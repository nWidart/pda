<?php

class CharacterController extends BaseController {
    public $characters;
    /**
     * Attach the Auth filter to the controller
     *
     */
    public function __construct()
    {
        $this->characters = User::find( (int)Sentry::getUser()->id )->characters;
        $this->beforeFilter('auth');
    }

    public function getIndex( $id )
    {
        return "indexed";
    }
    public function getProfile( $id )
    {
        // Get a character with all its items (& item modifiers)
        $items = Character::whereId($id)->with('items.attributes')->first()->toArray();

        $itemSet = Diablo3Util::getItemSet( $items );
        ChromePhp::log($itemSet);

        // $character = Character::find( $id );
        // $heroData = $this->_saveCharacterItems( $character['hero_id'], $id );
        // Diablo3Util::saveCharacterItems( $character['hero_id'], $id );

        $data = ['user' => Sentry::getUser(), 'characters' => $this->characters, 'items' => $itemSet ];
        return View::make( 'user.character', $data );
    }
}
