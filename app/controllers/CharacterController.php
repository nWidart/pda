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
        if ( Sentry::check() )
            $this->characters = User::find( (int)Sentry::getUser()->id )->characters;

    }

    /**
     * Show the character profile
     *
     * @param  int $id
     * @return View
     */
    public function getProfile( $id )
    {
        // Get a character with all its items (& item modifiers)
        // $items = Character::whereId($id)->with('items.attributes')->first()->toArray();
        $character = Character::whereId($id)->first();
        // ChromePhp::log($character->hero_id);
        // Session::put( 'items', $items );

        // Diablo3Util::getSkillImages( $character->hero_id );

        $heroStats = Diablo3Util::saveCharacterStatistics( $id );
        // $itemSet = Diablo3Util::getItemSet( Session::get('items') );
        $skillSet = Diablo3Util::getSkillset( $character->hero_id );

        $data = [
            'user'       => Sentry::getUser(),
            'character' => $character,
            'characters' => $this->characters,
            // 'items'      => $itemSet,
            'skills'     => $skillSet,
            'heroStats'  => $heroStats,
        ];
        return View::make( 'user.character', $data );
    }
}
