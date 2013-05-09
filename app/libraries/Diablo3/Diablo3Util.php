<?php namespace Diablo3;
use Str;

class Diablo3Util {
    /** getSkillImages
     * Saves all the skill images for a given character ID
     *
     * @param  int $charId
     * @return string
     */
    public function getSkillImages( $charId )
    {
        $Diablo3 = new \Diablo3( \Sentry::getUser()->battletag, \Sentry::getUser()->server, 'en_US' );
        return ( $Diablo3->getAllSkillImages( $charId ) ) ? 'true' : 'false';
    }

    /** getItemImages
     * Saves all the item images for a given character ID
     *
     * @param  int $charId
     * @return string
     */
    public function getItemImages( $charId )
    {
        $Diablo3 = new \Diablo3( \Sentry::getUser()->battletag, \Sentry::getUser()->server, 'en_US' );
        return ( $Diablo3->getAllItemImages( $charId ) ) ? 'true' : 'false';
    }

    /**
     * Gets all the active skills form a heroId
     *
     * @param  int $heroId
     * @return array
     */
    public function getSkillSet( $heroId )
    {
        if ( isset( \Sentry::getUser()->battletag ) && isset( \Sentry::getUser()->server ) )
        {
            $battletag = \Sentry::getUser()->battletag;
            $server = \Sentry::getUser()->server;
        }
        else
            return false;
        // Instantiate a new d3 instance
        $Diablo3 = new \Diablo3($battletag, $server, 'en_US');
        // Get the hero information for the given heroId
        $heroData = $Diablo3->getHero($heroId);

        // If errors were returned
        if ( !is_array( $heroData ) ) return false;

        $skillSet = [];
        $n = 0;
        foreach ($heroData['skills']['active'] as $skills)
        {
            // Checking for empty ones (=not a lvl60 hero)
            if ( isset( $skills['skill'] ) )
                $skillSet[$n] = $skills['skill'];
            $n++;
        }

        return $skillSet;
    }

    /**
     * Syncs the character items with Battle.Net (saves items)
     * @param  [type] $heroId [description]
     * @param  [type] $charId [description]
     * @return [type]         [description]
     */
    public function saveCharacterItems( $heroId, $charId )
    {
        if ( isset( \Sentry::getUser()->battletag ) && isset( \Sentry::getUser()->server ) )
        {
            $battletag = \Sentry::getUser()->battletag;
            $server = \Sentry::getUser()->server;
        }
        else
            return false;
        // Instantiate a new d3 instance
        $Diablo3 = new \Diablo3($battletag, $server, 'en_US');
        // Get the hero information for the given heroId
        $heroData = $Diablo3->getHero($heroId);

        // Check if we got all the hero data
        // (array) => ok , (string) => error
        //
        if( is_array( $heroData) )
        {
            // Looping over every item that character has
            foreach ($heroData['items'] as $item) {
                // Get all the information about every item
                $itemData = $Diablo3->getItem($item['tooltipParams']);
                // If we got data back
                if ( is_array( $itemData ) )
                {
                    // Step 1. Add the base item
                    $input = [ 'name' => $itemData['name'] ];
                    // Validate the item name (has to be unique)
                    $validator = new \Services\Validators\Item( $input );
                    if ( $validator->passes() )
                    {
                        // Create the new item
                        //
                        $item = new \Item;
                        $item->name = $itemData['name'];
                        $item->icon = $itemData['icon'];
                        $item->save();
                    }
                    else
                    {
                        // The base item already exists get its ID
                        //
                        $item = \Item::where( 'name', '=', $itemData['name'] )->first();
                    }

                    // Step 2. Add the modifiers to that item
                    //
                    foreach ($itemData['attributesRaw'] as $name => $value) {
                        // $dbAttr = \ItemAttribute::whereName( $name )->whereMax( $value['max'] )->where( 'item_id', '=', $item->id )->first();

                        $attribute = new \ItemAttribute;
                        $attribute->name = $name;
                        $attribute->max = $value['max'];
                        $item = \Item::find( $item->id );
                        $attribute = $item->attributes()->save( $attribute );
                    }

                    // Step 3. Attach the item to a Character
                    // Check if character already has that item If so detach it
                    //
                    $input = [ 'item_id' => $item->id ];
                    $char = \Character::find( $charId );
                    $validator = new \Services\Validators\CharacterItem( $input );
                    if ( $validator->passes() )
                    {
                        $char->items()->attach( $item->id );
                    }
                    else
                    {
                        $char->items()->detach( $item->id );
                        $char->items()->attach( $item->id );
                    }
                }
                else
                {
                    // No data, error returned
                    return false;
                }
                // ChromePhp::log($itemData['name']);
                // ChromePhp::log($itemData['attributesRaw']['Vitality_Item']['min']);
            }
        }
        else
        {
            return false; // Error message
        }
        return $heroData;
    }

    /**
     * Creates a itemSet for given Items
     * Adds the item type and uniquenes of the item with the item info
     *
     * @param  array $items
     * @return array
     */
    public function getItemSet( $items )
    {
        $itemSet = [];
        $n = 0;
        foreach ($items['items'] as $item)
        {
            switch ($item['icon']) {
                case Str::contains($item['icon'], 'helm'):
                    $itemSet[$n]['type'] = 'helm';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'chest'):
                    $itemSet[$n]['type'] = 'chest';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'boots'):
                    $itemSet[$n]['type'] = 'boots';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'gloves'):
                    $itemSet[$n]['type'] = 'gloves';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'shoulders'):
                    $itemSet[$n]['type'] = 'shoulders';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'pants'):
                    $itemSet[$n]['type'] = 'pants';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'bracer'):
                    $itemSet[$n]['type'] = 'bracer';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'mace'):
                    $itemSet[$n]['type'] = 'mace';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'sword'):
                    $itemSet[$n]['type'] = 'sword';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'belt'):
                    $itemSet[$n]['type'] = 'belt';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'ring'):
                    $itemSet[$n]['type'] = 'ring';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;

                case Str::contains($item['icon'], 'amulet'):
                    $itemSet[$n]['type'] = 'amulet';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;
                default:
                    $itemSet[$n]['type'] = 'nothingYet';
                    $itemSet[$n]['item'] = $item;
                    $itemSet[$n]['unique'] = $this->isUniqueItem( $item['icon'] );
                    break;
            }
            $n++;
        }
        return $itemSet;
    }

    public function saveCharacterStatistics( $heroId )
    {
        // Source on formulas: http://www.clicktoloot.com/p/combat.html
        //

        // Get the items as a collection
        $itemsCollection = \Character::whereId($heroId)->with('items.attributes')->first();

        $heroStats = [
            'defensiveStatistics' => [
                'armor'                     => 0,
                'resistanceAll'             => 0,
                'blockChance'               => 0,
                'dodgeChance'               => 0,
                'armorDamageReduction'      => 0,
                'resistanceDamageReduction' => 0,
                'totalDamageReduction'      => 0,
                'thorns'                    => 0
            ],
            'defensiveSpecifics' => [
                'physicalResistance'     => 0,
                'coldResistance'         => 0,
                'fireResistance'         => 0,
                'lightningResistance'    => 0,
                'poisonResistance'       => 0,
                'arcaneResistance'       => 0,
                'crowdControlReduction'  => 0,
                'missileDamageReduction' => 0,
                'meleeDamageReduction'   => 0,
                'eliteDamageReduction'   => 0
            ],
            'healthStatistics' => [
                'maximumLife'             => 0,
                'lifeSteal'               => 0,
                'lifePerHit'              => 0,
                'totalLifeBonus'          => 0,
                'lifePerSecond'           => 0,
                'lifePerKill'             => 0,
                'healthGlobeHealingBonus' => 0,
                'bonusGoldGlobeRadius'    => 0,
                'ehp'                     => 0
            ]
        ];
        // Base Stats at lvl 60
        // Attribute        Starting Value  Increase per Level
        // Primary Attribute       10               +3
        // Secondary Attributes    8                +1
        // Vitality                9                +2
        switch ( $itemsCollection->class )
        {
            case 'barbarian':
                $heroStats['baseStatistics'] = [
                        'strength'     => 10 + 3 * ( $itemsCollection->level - 1 ), # primary
                        'intelligence' => 8 + 1 * ( $itemsCollection->level - 1 ),
                        'dexterity'    => 8 + 1 * ( $itemsCollection->level - 1 ),
                        'vitality'     => 9 + 2 * ( $itemsCollection->level - 1 ),
                        'magicFind'    => 0,
                        'goldFind'     => 0
                ];
                break;
            case 'wizard': case 'witch-doctor':
                $heroStats['baseStatistics'] = [
                        'strength'     => 8 + 1 * ( $itemsCollection->level - 1 ),
                        'intelligence' => 10 + 3 * ( $itemsCollection->level - 1 ), # primary
                        'dexterity'    => 8 + 1 * ( $itemsCollection->level - 1 ),
                        'vitality'     => 9 + 2 * ( $itemsCollection->level - 1 ),
                        'magicFind'    => 0,
                        'goldFind'     => 0
                ];
                break;
            case 'demon-hunter': case 'monk':
                $heroStats['baseStatistics'] = [
                        'strength'     => 8 + 3 * ( $itemsCollection->level - 1 ),
                        'intelligence' => 8 + 3 * ( $itemsCollection->level - 1 ),
                        'dexterity'    => 10 + 3 * ( $itemsCollection->level - 1 ), # primary
                        'vitality'     => 9 + 2 * ( $itemsCollection->level - 1 ),
                        'magicFind'    => 0,
                        'goldFind'     => 0
                ];
                break;
        }

        $armorStat = 0;
        // Looping through the items
        foreach ($itemsCollection->items()->get() as $item)
        {
            // baseStatistics
            # Calulating the strength of the items
            $heroStats['baseStatistics']['strength'] += $this->_getAttributeTotal( $item, 'Strength_Item' );
            # Calulating the int of the items
            $heroStats['baseStatistics']['intelligence'] += $this->_getAttributeTotal( $item, 'Intelligence_Item' );
            $heroStats['baseStatistics']['dexterity'] += $this->_getAttributeTotal( $item, 'Dexterity_Item' );
            # Calulating the vitality of the items
            $heroStats['baseStatistics']['vitality'] += $this->_getAttributeTotal( $item, 'Vitality_Item' );
            # Magic Find
            $heroStats['baseStatistics']['magicFind'] += $this->_getAttributeTotal( $item, 'Magic_Find' );
            # Gold Find
            $heroStats['baseStatistics']['goldFind'] += $this->_getAttributeTotal( $item, 'Gold_Find' );

            // defensiveStatistics
            # Armor + Armor Bonus
            $armorStat += $this->_getAttributeTotal( $item, 'Armor_Item' );
            $armorStat += $this->_getAttributeTotal( $item, 'Armor_Bonus_Item' );
            # 1 Str = 1armor
            $heroStats['defensiveStatistics']['armor'] = $armorStat + $heroStats['baseStatistics']['strength'];
            # Dodge
            #  Dex range   Dodge% per point of Dex
            #    1 - 100          0.100
            #    101 - 500        0.025
            #    501 - 1000       0.020
            #    1001 - 8000      0.010
            if ( $heroStats['baseStatistics']['dexterity'] < 100 )
                $heroStats['defensiveStatistics']['dodgeChance'] = 0.100 * $heroStats['baseStatistics']['dexterity'];
            elseif ( $heroStats['baseStatistics']['dexterity'] > 101 && $heroStats['baseStatistics']['dexterity'] < 500 )
                $heroStats['defensiveStatistics']['dodgeChance'] = 0.025 * $heroStats['baseStatistics']['dexterity'];
            elseif ( $heroStats['baseStatistics']['dexterity'] > 501 && $heroStats['baseStatistics']['dexterity'] < 1000 )
                $heroStats['defensiveStatistics']['dodgeChance'] = 0.020 * $heroStats['baseStatistics']['dexterity'];
            elseif ( $heroStats['baseStatistics']['dexterity'] > 1001 && $heroStats['baseStatistics']['dexterity'] < 8000 )
                $heroStats['defensiveStatistics']['dodgeChance'] = 0.010 * $heroStats['baseStatistics']['dexterity'];
            # Thorns
            $heroStats['defensiveStatistics']['thorns'] += $this->_getAttributeTotal( $item, 'Thorns_Fixed#Physical' );

            // defensiveSpecifics
            $heroStats['defensiveSpecifics']['physicalResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Physical');
            $heroStats['defensiveSpecifics']['coldResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Cold');
            $heroStats['defensiveSpecifics']['fireResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Fire');
            $heroStats['defensiveSpecifics']['lightningResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Lightning');
            $heroStats['defensiveSpecifics']['poisonResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Poison');
            $heroStats['defensiveSpecifics']['arcaneResistance'] += $this->_getAttributeTotal( $item, 'Resistance#Arcane');
            $heroStats['defensiveSpecifics']['crowdControlReduction'] += $this->_getAttributeTotal( $item, 'CrowdControl_Reduction' );


            # All Resist
            $heroStats['defensiveStatistics']['resistanceAll'] += $this->_getAttributeTotal( $item, 'Resistance_All' );

            // healtStatistics
            # Life Steal
            $heroStats['healthStatistics']['lifeSteal'] += $this->_getAttributeTotal( $item, 'Steal_Health_Percent' );
            # Life on hit
            $heroStats['healthStatistics']['lifePerHit'] += $this->_getAttributeTotal( $item, 'Hitpoints_On_Hit' );
            # TODO Total Life Bonus
            # $heroStats['healthStatistics']['totalLifeBonus'] += $this->_getAttributeTotal( $item, '' );
            # Life Per Second
            $heroStats['healthStatistics']['lifePerSecond'] += $this->_getAttributeTotal( $item, 'Hitpoints_Regen_Per_Second' );
            # TODO Life per kill
            # $heroStats['healthStatistics']['lifePerKill'] += $this->_getAttributeTotal( $item, '' );
            # TODO Health Globe Healing Bonus
            # $heroStats['healthStatistics']['healthGlobeHealingBonus'] += $this->_getAttributeTotal( $item, '' );
            # TODO Bonus to Gold/Globe Radius
            # $heroStats['healthStatistics']['bonusGoldGlobeRadius'] += $this->_getAttributeTotal( $item, '' );
            #
        }

        // defensiveStatistics
        # Damage reduction from armor = Armor / (50 × Monster Level + Armor)
        $heroStats['defensiveStatistics']['armorDamageReduction'] = $heroStats['defensiveStatistics']['armor'] / ( 50 * 63 + $heroStats['defensiveStatistics']['armor'] );
        # Damage reduction from resistance = Resistance / (5 × Monster Level + Resistance)
        $heroStats['defensiveStatistics']['resistanceDamageReduction'] = $heroStats['defensiveStatistics']['resistanceAll'] / ( 5 * 63 + $heroStats['defensiveStatistics']['resistanceAll'] );
        # Total damage reduction = 1 - ((1 - DR from Armor) × (1 - DR from Resistance) × (1 - other DR))
        $heroStats['defensiveStatistics']['totalDamageReduction'] = 1 - ( ( 1 - $heroStats['defensiveStatistics']['armorDamageReduction'] ) * ( 1 - $heroStats['defensiveStatistics']['resistanceDamageReduction'] ) );
        $heroStats['defensiveStatistics']['resistanceAll'] += 0.1 * $heroStats['baseStatistics']['intelligence'];


        // defensiveSpecifics (add the base resistance)
        $heroStats['defensiveSpecifics']['physicalResistance'] += $heroStats['defensiveSpecifics']['physicalResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];
        $heroStats['defensiveSpecifics']['coldResistance'] += $heroStats['defensiveSpecifics']['coldResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];
        $heroStats['defensiveSpecifics']['fireResistance'] += $heroStats['defensiveSpecifics']['fireResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];
        $heroStats['defensiveSpecifics']['lightningResistance'] += $heroStats['defensiveSpecifics']['lightningResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];
        $heroStats['defensiveSpecifics']['poisonResistance'] += $heroStats['defensiveSpecifics']['poisonResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];
        $heroStats['defensiveSpecifics']['arcaneResistance'] += $heroStats['defensiveSpecifics']['arcaneResistance'] + $heroStats['defensiveStatistics']['resistanceAll'];


        // healtStatistics
        # Maximum life
        # Life when player level < 35: = 36 + 4 × Level + 10 × Vitality
        # Life when player level ≥ 35: = 36 + 4 × Level + (Level - 25) × Vitality
        if ( $itemsCollection->level < 35 )
            $heroStats['healthStatistics']['maximumLife'] = 36 + 4 * $itemsCollection->level + 10 * $heroStats['baseStatistics']['vitality'];
        else
            $heroStats['healthStatistics']['maximumLife'] = 36 + 4 * $itemsCollection->level + ($itemsCollection->level - 25) * $heroStats['baseStatistics']['vitality'];
        # EHP: = Life / ((1 - DR from Armor) × (1 - DR from Resistance) × (1 - 0.30 if monk or barbarian) × (1 - DR from other source))
        $heroStats['healthStatistics']['ehp'] = $heroStats['healthStatistics']['maximumLife'] / ( ( 1 - $heroStats['defensiveStatistics']['armorDamageReduction'] ) * ( 1 - $heroStats['defensiveStatistics']['resistanceDamageReduction'] ) * ( 1 - 0.30 ) );


        // Setting %
        $heroStats['defensiveStatistics']['armorDamageReduction'] = $this->_getPercent( $heroStats['defensiveStatistics']['armorDamageReduction'] );
        $heroStats['defensiveStatistics']['totalDamageReduction'] = $this->_getPercent( $heroStats['defensiveStatistics']['totalDamageReduction'] );
        $heroStats['defensiveSpecifics']['crowdControlReduction'] = $this->_getPercent( $heroStats['defensiveSpecifics']['crowdControlReduction'] );
        $heroStats['healthStatistics']['lifeSteal'] = $this->_getPercent( $heroStats['healthStatistics']['lifeSteal'] );
        $heroStats['healthStatistics']['totalLifeBonus'] = $this->_getPercent( $heroStats['healthStatistics']['totalLifeBonus'] );
        $heroStats['baseStatistics']['magicFind'] = $this->_getPercent( $heroStats['baseStatistics']['magicFind'] );
        $heroStats['baseStatistics']['goldFind'] = $this->_getPercent( $heroStats['baseStatistics']['goldFind'] );

        \ChromePhp::log($heroStats);
        return $heroStats;
    }
    private function _getAttributeTotal( $item, $attribute )
    {
        $attr = $item->attributes()->where('name', '=', $attribute )->first();
        if ( $attr )
        {
            return $attr->max;
        }
        return 0;
    }

    private function _getPercent( $num )
    {
        $num = $num * 100;
        return round( $num, 2);
    }

    /**
     * Checks if an item is unique or not
     * Based on the Item's icon
     *
     * @param  string  $item
     * @return boolean
     */
    private function isUniqueItem( $item )
    {
        return ( Str::contains($item, 'unique') ) ? true : false;
    }
}
