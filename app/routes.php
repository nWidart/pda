<?php
/**
 * The home page
 *
 */
Route::get('/', [ 'as' => 'home', function()
{
	return View::make('home');
}]);

Route::get('skillimg', function() {
    $Diablo3 = new Diablo3( "Hafuu#2176", 'eu', 'en_US' );
    return $Diablo3->getAllSkillImages( '10355573');
});

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
