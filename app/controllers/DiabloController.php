<?php

class DiabloController extends BaseController {
    /**
     * Import all selected characters into the db
     *
     */
    public function postImport()
    {
        // Get the selected characters array
        $characters = Input::all();

        // if not characters where selected redirect
        if ( !$characters )
            return Redirect::to('dashboard')->with('errorAlert', 'Import failed. No characters were selected.');

        // Get the battle tag from the session
        $battletag = Sentry::getUser()->battletag;
        $server = Sentry::getUser()->server;

        // Instantiate a new d3 instance
        $Diablo3 = new Diablo3( $battletag, $server, 'en_US' );

        $userId = Sentry::getUser()->id;

        // For each character, add it to the DB with the currect logged in user
        foreach ($characters as $character) {
            $input = [ 'character' => $character];
            $validator = new Services\Validators\Character($input);
            // If the hero_id is unique add it.
            // Duplicate heros are disabled on front-end, but for safe mesure
            if ( $validator->passes() )
            {
                $heroData = $Diablo3->getHero( $character );
                $newChar = new Character;
                $newChar->user_id = $userId;
                $newChar->battletag = $battletag;
                $newChar->hero_id = $heroData['id'];
                $newChar->name = $heroData['name'];
                $newChar->class = $heroData['class'];
                $newChar->level = $heroData['level'];
                $newChar->paragonLevel = $heroData['paragonLevel'];
                $newChar->gender = $heroData['gender'];
                $newChar->save();
                Diablo3Util::saveCharacterItems( $newChar->hero_id, $newChar->id );
                Diablo3Util::getSkillImages( $newChar->hero_id );
                Diablo3Util::getItemImages( $newChar->hero_id );
            }
        }
        // Return redirect to dashboard
        Event::fire('hero.import');
        return Redirect::to('dashboard')->with('success', 'Import successful');
    }
}
