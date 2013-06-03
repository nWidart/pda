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

        // $heroStats = Diablo3Util::saveCharacterStatistics( $id );
        $skillSet = Diablo3Util::getSkillset( $character->hero_id );

        ChromePhp::log( Config::get('heroStats.heroStats'));
        $data = [
            'user'       => Sentry::getUser(),
            'character' => $character,
            'characters' => $this->characters,
            // 'items'      => $itemSet,
            'skills'     => $skillSet,
            'heroStats'  => Config::get('heroStats.heroStats'),
        ];
        return View::make( 'user.character', $data );
    }
}
