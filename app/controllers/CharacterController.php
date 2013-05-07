<?php

class CharacterController extends BaseController {
    public $characters;
    /**
     * Attach the Auth filter to the controller
     *
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
        $this->characters = User::find( (int)Sentry::getUser()->id )->characters;
    }

    public function getProfile( $id )
    {
        // Get a character with all its items (& item modifiers)
        $items = Character::whereId($id)->with('items.attributes')->first()->toArray();

        $itemSet = Diablo3Util::getItemSet( $items );

        $data = ['user' => Sentry::getUser(), 'characters' => $this->characters, 'items' => $itemSet ];
        return View::make( 'user.character', $data );
    }
}
