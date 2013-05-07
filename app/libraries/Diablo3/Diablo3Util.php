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
