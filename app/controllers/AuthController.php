<?php

class AuthController extends BaseController {

    public function getIndex()
    {
        return 'indexed';
    }

    /**
     * Returns the view to register a new User.
     *
     * @return View The register view
     */
    public function getRegister()
    {
        return View::make('account.register');
    }

    /**
     * Handles the registration.
     *
     * @return [type] [description]
     */
    public function postRegister()
    {
        $validator = new Services\Validators\Register;
        if ( $validator->passes() )
        {
            try
            {
                // Let's register a user.
                // Optional TRUE param to activate user
                //
                $user = Sentry::register(array(
                    'email'    => Input::get('email'),
                    'password' => Input::get('password'),
                ), true);

                $data = [];
                Mail::send('emails.auth.welcome', $data, function($m)
                {
                    $m->to( Input::get('email') )->subject('Welcome on your PDA.');
                });
                // Success!
                // Logs the user in
                $creds = [
                    'email' => $user->email,
                    'password' => Input::get('password'),
                ];
                Sentry::authenticate($creds, false);
                // Redirect to proile page
                // TODO: will redirecto to dashboard
                return Redirect::route('profile')->with('success', 'Account created successfully!');
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                echo 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                echo 'User with this login already exists.';
            }
        }
        Profiler::logInfo( 'error: ');
        ChromePhp::log('ok');
        // return 'ok';
        // return Redirect::back()->withInput()->withErrors($validator->getErrors());
        return Redirect::back()->withInput()->withErrors($validator->getErrors());
    }

    /**
     * Returns the login view
     *
     * @return View The login view
     */
    public function getLogin()
    {
        return View::make('account.login');
    }

    /**
     * Handles the login logic
     *
     * @return View Profile view if successful || login view
     */
    public function postLogin()
    {
        $validator = new Services\Validators\Login;
        if ( $validator->passes() )
        {
            try
            {
                // Set login credentials
                $credentials = array(
                    'email'    => Input::get('email'),
                    'password' => Input::get('password'),
                );

                // Try to authenticate the user
                $user = Sentry::authenticate($credentials, false);
                ChromePhp::log($user);
                // User logged in
                // Redirect to the profile page
                return Redirect::to('dashboard')->with('success', 'Successfully logged in.');
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                echo 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
            {
                echo 'Password field is required.';
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                echo 'User was not found.';
            }
            catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
            {
                echo 'User is not activated.';
            }
        }
        // Something is wrong, redirect with the correct errors
        return Redirect::back()->withInput()->withErrors($validator->getErrors());
    }

    /**
     * Handles the logout logic
     *
     * @return Redirect To homepage
     */
    public function getLogout()
    {
        Sentry::logout();
        return Redirect::route('home')->with('success', 'Loged out!');
    }
}
