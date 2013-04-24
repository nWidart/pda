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
 * Registring the RESTful Auth Controller
 *
 */
Route::controller('auth', 'AuthController');

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
