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
        return "indexed";
    }
    public function getProfile( $id )
    {
        // Get a character with all its items (& item modifiers)
        // $char = Character::with('items.modifiers')->first()->toArray();
        // ChromePhp::log($char);

        $character = Character::find( $id );
        // $heroData = $this->_saveCharacterItems( $character['hero_id'], $id );
        Diablo3Util::saveCharacterItems( $character['hero_id'], $id );

        return $id;
    }
}
