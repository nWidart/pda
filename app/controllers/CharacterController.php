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
        $items = Character::whereId($id)->with('items.attributes')->first()->toArray();
        Session::put( 'items', $items );
        Session::put( 'heroId', $items['hero_id'] );
        Session::put( 'charId', $id );

        // TODO Change to 1day+?
        // $heroStats = Cache::remember('heroStats', 10, function()
        // {
        //     return Diablo3Util::saveCharacterStatistics( Session::get('charId') );
        // });
        $heroStats = Diablo3Util::saveCharacterStatistics( Session::get('charId') );

        // Gets all the items + adds the type & uniqueness to it
        // TODO Better cache system
        // $itemSet = Cache::remember('itemSet', 10, function ()
        // {
        //     return Diablo3Util::getItemSet( Session::get('items') );
        // });
        $itemSet = Diablo3Util::getItemSet( Session::get('items') );

        // Get skillSet for current user
        // $skillSet = Cache::remember('skillSet', 10, function ()
        // {
        //     return Diablo3Util::getSkillset( Session::get('heroId') );
        // });
        // Diablo3Util::saveCharacterItems( Session::get('heroId'), $id );
        // Diablo3Util::getItemImages( Session::get('heroId') );
        Diablo3Util::getSkillImages(Session::get('heroId'));

        $skillSet = Diablo3Util::getSkillset( Session::get('heroId') );

        $data = [
            'user'       => Sentry::getUser(),
            'character' => $items,
            'characters' => $this->characters,
            'items'      => $itemSet,
            'skills'     => $skillSet,
            'heroStats'  => $heroStats,
        ];
        return View::make( 'user.character', $data );
    }
}
