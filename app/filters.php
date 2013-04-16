<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. Also, a "guest" filter is
| responsible for performing the opposite. Both provide redirects.
|
*/

Route::filter('auth', function()
{
	if ( !Sentry::check() ) return Redirect::action('AuthController@getLogin');
});


Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});
/**
 * Admin Auth Filter
 * Check if user is logged in
 */
Route::filter('adminAuth', function()
{
    if ( Sentry::check() )
    {
        try
        {
            // Find the user using the user id
            $user = Sentry::getUserProvider()->findById( Sentry::getUser()->id );

            // Find the Administrator group
            $admin = Sentry::getGroupProvider()->findByName('Admin');

            // Check if the user is in the administrator group
            if ( !$user->inGroup($admin) )
            {
                return Redirect::to('login');
            }

        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';
        }
        catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
        {
            echo 'Group was not found.';
        }
    }
});
/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

// Route::filter('csrf', function()
// {
// 	if (Session::getToken() != Input::get('_token'))
// 	{
// 		throw new Illuminate\Session\TokenMismatchException;
// 	}
// });
