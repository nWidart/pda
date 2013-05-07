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
        ChromePhp::log($items['hero_id']);
        // Gets all the items + adds the type & uniqueness to it
        $itemSet = Diablo3Util::getItemSet( $items );

        // Get skillSet for current user
        // $skillSet = [ 'skill1' => 'icon', 'skill2' => 'icon' ]
        //$skillSet = Diablo3Util::getSkillset( $charId )

        $data = ['user' => Sentry::getUser(), 'characters' => $this->characters, 'items' => $itemSet ];
        return View::make( 'user.character', $data );
    }
}
