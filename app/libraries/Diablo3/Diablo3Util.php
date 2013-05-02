<?php namespace Diablo3;

class Diablo3Util {
    /** getSkillImages
     * Saves all the skill images for a given battletag
     *
     * @param  int $charId
     * @return string
     */
    public function getSkillImages( $charId )
    {
        $Diablo3 = new \Diablo3( \Sentry::getUser()->battletag, \Sentry::getUser()->server, 'en_US' );
        return ( $Diablo3->getAllSkillImages( $charId ) ) ? 'true' : 'false';
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

                        // $attribute = new \ItemAttribute;
                        // $attribute->name = $name;
                        // $attribute->max = $value['max'];
                        // $item = \Item::find( $item->id );
                        // $attribute = $item->attributes()->save( $attribute );
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
}
