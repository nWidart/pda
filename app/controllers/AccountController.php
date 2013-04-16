<?php

class AccountController extends BaseController {
    /**
     * Attach the Auth filter to the controller
     *
     */
    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    /**
     * Displaying the dashboard
     * If no characters are already imported, prompt the user to import
     * If proile not completed, ask for completion
     *
     */
    public function getIndex()
    {
        // Look for characters for logged in user
        $user = User::find( (int)Sentry::getUser()->id )->characters->first();
        if ( $user )
        {
            $characters = User::find( (int)Sentry::getUser()->id )->characters;
            $options = $this->_getHeroes();
            $user = Sentry::getUser();
            $data = [ 'characters' => $characters, 'options' => $options, 'user' => $user ];
            return View::make('user.index', $data);
        }
        else
        {
            if( !empty( Sentry::getUser()->battletag ) )
            {
                $options = $this->_getHeroes();
            }
            else
                $options = [];

            $data = [
                'notice' => 'You havent imported any characters yet. <a class="" data-toggle="modal" href="#modalImportProfile" >Do it now!</a>',
                'options' => $options,
            ];
            return View::make('user.index', $data);
        }
    }

    public function postUpdateUserInfo()
    {
        $firstName = Input::get('firstName');
        $lastName = Input::get('lastName');
        $battletag = Input::get('battletag');

        $input = Input::all();
        $validator = new Services\Validators\User;
        if ( $validator->passes() )
        {
            try
            {
                // Find the user using the user id
                $user = Sentry::getUserProvider()->findById( Sentry::getUser()->id );

                // Update the user details
                $user->first_name = $firstName;
                $user->last_name = $lastName;
                $user->battletag = $battletag;

                // Update the user
                if ($user->save())
                {
                    $data = [
                        'success' => 'Profile updated.',
                    ];
                    return Response::json( $data );
                }
                else
                {

                }
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                return 'User with this login already exists.';
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                return 'User was not found.';
            }
        }
        else
        {
            $errors = $validator->getErrors();
            $errorFirstName = ($errors->has('firstName')) ? $errors->get('firstName') : null;
            $errorLastName = ($errors->has('lastName')) ? $errors->get('lastName') : null;
            $errorBattletag = ($errors->has('battletag')) ? $errors->get('battletag') : null;
            $data = [
                'error' => 'Something went wrong',
                'errors' => $errors->all(),
            ];
            return Response::json( $data );
        }

        // $data = [ 'firstName' => $firstName, 'lastName' => $lastName, 'battletag' => $battletag ];
        // return Response::json( $data );
    }

    /**
     * Get the heroes takes battletag from db
     * return a html valid <option> list
     *
     */
    private function _getHeroes()
    {
        if ( isset( Sentry::getUser()->battletag ) )
            $battletag = Sentry::getUser()->battletag;
        else
            return false;
        // Instantiate a new d3 instance
        $Diablo3 = new Diablo3( $battletag, 'eu', 'en_US' );

        // Get the info about that battle tag
        $career = $Diablo3->getCareer();

        // The array containing the <option> html
        $options = [];

        foreach ( $career['heroes'] as $key ) {
            $name = $key['name'];
            $id = $key['id'];
            if ( !isset( $d3data[ $id ] ) ) {
                $d3data[$id] = [];
            }

            // Make a array for the validator
            $input = [ 'character' => $id ];

            // Check if character already is in database if it is add a disabled attribute
            $validator = new Services\Validators\Character($input);
            if ( $validator->passes() )
                $options[] = '<option value="' . $id . '">' . $name . '</option>';
            else
                $options[] = '<option value="' . $id . '"disabled="disabled">' . $name . '</option>';
        }
        return $options;
    }

}
