<?php

class DiabloController extends BaseController {
    public function postTesting()
    {
        return 'nice';
    }


    /**
     * Import all selected characters into the db
     *
     */
    public function postImport()
    {
        // Get the selected characters array
        $characters = Input::get('d3characters');

        // if not characters where selected redirect
        if ( !$characters )
            return Redirect::to('dashboard')->with('errorAlert', 'Import failed. No characters were selected.');

        // Get the battle tag from the session
        $battletag = Sentry::getUser()->battletag;

        // Instantiate a new d3 instance
        $Diablo3 = new Diablo3( $battletag, 'eu', 'en_US' );

        $userId = Sentry::getUser()->id;
        // For each character, add it to the DB with the currect logged in user

        foreach ($characters as $character) {
            $input = [ 'character' => $character];
            $validator = new Services\Validators\Character($input);
            // If the hero_id is unique add it.
            // Duplicate heros are disabled on front-end, but for safe mesure
            if ( $validator->passes() )
            {
                ChromePhp::log($character);
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
            }
        }
        // Return redirect to dashboard
        return Redirect::to('dashboard')->with('success', 'Import successful');
    }
}
