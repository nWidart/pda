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

        $test = Character::whereId($id)->with('items.attributes')->first();
        ChromePhp::log( $test->items()->first() );
        foreach ($test->items() as $item) {
            $itemIntel = $item->attributes()->where('name', '=', 'Strength_Item')->first();
            ChromePhp::log($intemIntel->max);
        }

        // Gets all the items + adds the type & uniqueness to it
        $itemSet = Diablo3Util::getItemSet( $items );

        // Downloads the skill images
        // TODO: Execute this at hero import, so it happens only once.
        Diablo3Util::getSkillImages( $items['hero_id'] );

        // Get skillSet for current user
        $skillSet = Diablo3Util::getSkillset( $items['hero_id'] );

        $data = [
            'user' => Sentry::getUser(),
            'characters' => $this->characters,
            'items' => $itemSet,
            'skills' => $skillSet
        ];
        return View::make( 'user.character', $data );
    }
}
