<?php
# Homepage
Route::get('/', [ 'as' => 'home', function()
{
	return View::make('home');
}]);

/**
 * Registring the Authentication Routes
 *
 */
# Login
Route::get('auth/login', 'AuthController@getLogin');
Route::post('auth/login', 'AuthController@postLogin');

# Register
Route::get('auth/register', 'AuthController@getRegister');
Route::post('auth/register', 'AuthController@postRegister');

# Account Activation
Route::get('auth/activate/{userId}/{activationCode}', 'AuthController@getActivate');

# Logout
Route::get('auth/logout', 'AuthController@getLogout');

/**
 * Registring the RESTful Diablo Controller
 *
 */
Route::post('diablo/import', 'DiabloController@postImport');

/**
 * Registring the RESTful Account Controller
 *
 */
Route::controller('dashboard', 'AccountController');

/**
 * Registring the RESTful Character Controller
 *
 */
Route::get('character/profile/{id}', 'CharacterController@getProfile');
