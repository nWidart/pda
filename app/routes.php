<?php
/**
 * The home page
 *
 */
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

# Forgot Password Confirmation
// Route::get('auth/forgot-password/{userID}/{resetCode}', 'AuthController@getForgotPasswordConfirmation');
// Route::post('auth/forgot-password/{userID}/{resetCode}', 'AuthController@postForgotPasswordConfirmation');

# Logout
Route::get('auth/logout', 'AuthController@getLogout');

/**
 * Registring the RESTful Diablo Controller
 *
 */
Route::controller('diablo', 'DiabloController');

/**
 * Registring the RESTful Account Controller
 *
 */
Route::controller('dashboard', 'AccountController');

/**
 * Registring the RESTful Character Controller
 *
 */
Route::controller('character', 'CharacterController');
