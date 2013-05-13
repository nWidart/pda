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
        Event::fire('test');
        // Look for characters for logged in user
        $user = User::find( (int)Sentry::getUser()->id )->characters->first();
        // Cache::forget('heroes');
        $heroes = Cache::remember('heroes', 10, function ()
        {
           return  ( $this->_getHeroes() ) ? $this->_getHeroes() : '';
        });

        // If the user has characters
        if ( $user )
        {
            $data = [
                'characters' => User::find( (int)Sentry::getUser()->id )->characters,
                'heroes' => $heroes,
                'user' => Sentry::getUser()
            ];
            return View::make('user.index', $data);
        }
        else
        {
            $data = [
                'notice' => "You havent imported any characters yet. <a data-toggle='modal' href='#modal' >Do it now!</a>",
                'heroes' => ( $this->_getHeroes() ) ? $this->_getHeroes() : '',
                'user' => Sentry::getUser(),
            ];
            return View::make('user.index', $data);
        }
    }

    /**
     * Updating user info
     * First Name & Last Name
     *
     * @return Reponse::json
     */
    public function postUpdateUserInfo()
    {
        $firstName = Input::get('firstName');
        $lastName = Input::get('lastName');

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

                // Update the user
                if ($user->save())
                {
                    $data = [ 'success' => 'Profile updated.' ];
                    return Response::json( $data );
                }
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                $data = [ 'error' => 'User with this login already exists.' ];
                return Response::json( $data );
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                $data = [ 'error' => 'User was not found.' ];
                return Response::json( $data );
            }
        }
        else
        {
            $errors = $validator->getErrors();
            $data = [
                'error' => 'Something went wrong',
                'errors' => $errors->all(),
            ];
            return Response::json( $data );
        }
    }

    /**
     * Updating user info
     * Battletag & Server
     *
     * @return Reponse::json
     */
    public function postUpdateUserBtagInfo()
    {
        $battletag = Input::get('battletag');
        $server = Input::get('server');

        $validator = new Services\Validators\Battlenet;

        if ( $validator->passes() )
        {
            try
            {
                // Find the user using the user id
                $user = Sentry::getUserProvider()->findById( Sentry::getUser()->id );

                // Update the user details
                $user->battletag = $battletag;
                $user->server = $server;

                // Update the user
                if ($user->save())
                {
                    $data = [ 'success' => 'Profile updated.' ];
                    return Response::json( $data );
                }
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                $data = [ 'error' => 'User with this login already exists.' ];
                return Response::json( $data );
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                $data = [ 'error' => 'User was not found.' ];
                return Response::json( $data );
            }
        }
        else
        {
            $errors = $validator->getErrors();
            $errorBattletag = ($errors->has('battletag')) ? $errors->get('battletag') : null;
            $data = [
                'error' => 'Something went wrong',
                'errors' => $errors->all(),
            ];
            return Response::json( $data );
        }
    }

    /**
     * Get the heroes takes battletag from db
     *
     * @return arary    hero list
     */
    private function _getHeroes()
    {
        if ( isset( Sentry::getUser()->battletag ) && isset( Sentry::getUser()->server ) )
        {
            $battletag = Sentry::getUser()->battletag;
            $server = Sentry::getUser()->server;
        }
        else
            return false;
        // Instantiate a new d3 instance
        $Diablo3 = new Diablo3( $battletag, $server, 'en_US' );

        // Get the info about that battle tag
        $career = $Diablo3->getCareer();
        $heroes = [];

        if ( !isset($career['heroes']) ) return false;
        $n = 0;
        foreach ( $career['heroes'] as $key )
        {
            // Make a array for the validator
            $input = [ 'character' => $key['id'] ];
            // Check if character already is in database
            $validator = new Services\Validators\Character($input);
            if ( $validator->passes() )
            {
                $heroes[$n]['name'] = $key['name'];
                $heroes[$n]['id'] = $key['id'];
                $heroes[$n]['class'] = $key['class'];
                $heroes[$n]['gender'] = $key['gender'];
                $n++;
            }
        }
        return $heroes;
    }

}
