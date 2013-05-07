<?php

class AuthController extends BaseController {
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
     * @return Redirect
     */
    public function postRegister()
    {
        $validator = new Services\Validators\Register;
        if ( $validator->passes() )
        {
            try
            {
                $user = Sentry::register( array(
                    'email'    => Input::get('email'),
                    'password' => Input::get('password'),
                ) );

                // Sets the data for the email & gets the activationCode for the user
                //
                $data = [
                    'user' => $user,
                    'activationcode' => $user->getActivationCode()
                ];
                Mail::send('emails.auth.welcome', $data, function($m) use($user)
                {
                    $m->to( $user->email )->subject( 'Welcome on your PDA.' );
                });

                return Redirect::to('auth/register')->with('success', 'Account created successfully! Please check your email to activate your account.');
            }
            catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
            {
                $error = 'Login field is required.';
            }
            catch (Cartalyst\Sentry\Users\UserExistsException $e)
            {
                $error = 'User with this login already exists.';
            }
            // Something went wrong - Redirect with Sentry errors
            return Redirect::back()->withInput()->with('error', $error);
        }
        // Something went wrong
        return Redirect::back()->withInput()->withErrors( $validator->getErrors() );
    }

    /**
     * User account activation page.
     *
     * @param  integer  $userId
     * @param  string   $actvationCode
     * @return Redirect
     */

    public function getActivate($userId = null, $activationCode = null)
    {
        try
        {
            // Get the user we are trying to activate
            $user = Sentry::getUserProvider()->findById($userId);

            // Try to activate this user account
            if ( $user->attemptActivation( $activationCode ) )
            {
                // Send a welcome email ?

                // Redirect to the login page
                return Redirect::to('auth/login')->with('success', "Account activated successfully. You're ready to login.");
            }

            // The activation failed.
            $error = 'Activation failed.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $error = 'User does not exist.';
        }

        // Redirect to the home page with error message
        return Redirect::to('/')->with('error', $error);
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
