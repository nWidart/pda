<?php namespace Controllers\Admin;

use AdminController;
use Config;
use Input;
use Lang;
use Redirect;
use Sentry;
use Character;
use Validator;
use View;

class CharactersController extends AdminController
{
    /**
     * Show a list of all the characters.
     *
     * @return View
     */
    public function getIndex()
    {
        // Grab all the characters
        $characters = Character::with('user')->orderBy('user_id', 'ASC');
        $characters = $characters->paginate(20);

        // Show the page
        return View::make('backend.characters.index', compact('characters'));
    }

    /**
     * Character update
     * @param  int $characterId
     * @return View
     */
    public function getEdit($characterId)
    {
        // Check if the character exists
        if ( is_null( $character = Character::whereId( $characterId ) ) )
        {
            return Redirect::to('backend.characters')->with('error', Lang::get('admin/characters/message.does_not_exist'));
        }

        // Show the page
        return View::make('backend.characters.edit', compact('character'));
    }

    /**
     * Delete the given character.
     *
     * @param  int  $characterId
     * @return Redirect
     */
    public function getDelete($characterId)
    {
        // Check if the character exists
        if (is_null($character = Character::whereId($characterId)->with('items.attributes')))
        {
            // Redirect to the characters management page
            return Redirect::to('admin/characters')->with('error', Lang::get('admin/characters/message.not_found'));
        }

        // Delete the character & its items
        $character->delete();

        // Redirect to the characters management page
        return Redirect::to('admin/characters')->with('success', Lang::get('admin/characters/message.delete.success'));
    }
}
