<?php
Event::listen('user.logout', function()
{
    Cache::forget('heroes');
});
Event::listen('hero.import', function()
{
    Cache::forget('heroes');
});

Event::listen('404', function()
{
    return "404!";
});

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
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if ( !Sentry::check() ) return Redirect::action('AuthController@getLogin');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

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

Route::filter('admin-auth', function()
{
    // Check if the user is logged in
    if ( ! Sentry::check())
    {
        // Store the current uri in the session
        Session::put('loginRedirect', Request::url());

        // Redirect to the login page
        return Redirect::route('signin');
    }

    // Check if the user has access to the admin page
    if ( ! Sentry::getUser()->hasAccess('admin'))
    {
        // Show the insufficient permissions page
        return App::abort(403);
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
