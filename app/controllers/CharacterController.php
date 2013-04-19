<?php

class CharacterController extends BaseController {
    /**
     * Attach the Auth filter to the controller
     *
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    public function getIndex( $id )
    {
        return $this->_getCharacterItems(15212314);
    }
    public function getProfile( $id )
    {
        $character = Character::find( $id );
        $heroData = $this->_saveCharacterItems( $character['hero_id'], $id );

        return $id;
    }

    private function _saveCharacterItems( $heroId, $charId )
    {
        if ( isset( Sentry::getUser()->battletag ) && isset( Sentry::getUser()->server ) )
        {
            $battletag = Sentry::getUser()->battletag;
            $server = Sentry::getUser()->server;
        }
        else
            return false;
        // Instantiate a new d3 instance
        $Diablo3 = new Diablo3($battletag, $server, 'en_US');
        $heroData = $Diablo3->getHero($heroId);

        // Check if we got all the hero data
        // (array) => ok , (string) => error
        //
        if( is_array( $heroData) )
        {
            foreach ($heroData['items'] as $item) {
                $itemData = $Diablo3->getItem($item['tooltipParams']);
                // If we got data back
                if ( is_array( $itemData ) )
                {
                    // Step 1. Add the base item
                    // TODO: If the item already exists get its ID and use that to add modifiers
                    $input = [ 'name' => $itemData['name'] ];
                    $validator = new Services\Validators\Item( $input );
                    if ( $validator->passes() )
                    {
                        $item = new Item;
                        $item->name = $itemData['name'];
                        $item->save();
                    }
                    else
                    {
                        // The base item already exists get its ID
                        //
                        $item = Item::where( 'name', '=', $itemData['name'] )->get()->toArray();
                        $itemId = $item[0]['id'];
                    }

                    // Step 2. Add the modifiers to that item
                    // No validation? Maybe just to check for integers/floats.
                    // TODO: check if ALL the modifiers are unique. If not means an item rolled exactly the same mods.
                    // how?
                    $modifier = new Modifier;
                    $modifier->dexterity = ( isset( $itemData['attributesRaw']['Dexterity_Item']['min'] ) )
                                            ? $itemData['attributesRaw']['Dexterity_Item']['min'] : 0;
                    $modifier->intelligence = ( isset( $itemData['attributesRaw']['Intelligence_Item']['min'] ) )
                                            ? $itemData['attributesRaw']['Intelligence_Item']['min'] : 0;
                    $modifier->strength = ( isset( $itemData['attributesRaw']['Strength_Item']['min'] ) )
                                            ? $itemData['attributesRaw']['Strength_Item']['min'] : 0;
                    $modifier->vitality = ( isset( $itemData['attributesRaw']['Vitality_Item']['min'] ) )
                                            ? $itemData['attributesRaw']['Vitality_Item']['min'] : 0;
                    $item = Item::find( $item->id );
                    $modifier = $item->modifiers()->save($modifier);

                    // Step 3. Attach the item to a Character
                    $char = Character::find( $charId );
                    $char->items()->attach( $item->id );
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
