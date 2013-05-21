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
Route::get('diablo/sync/{charId}', 'DiabloController@getSync');

/**
 * Registring the RESTful Account Controller
 *
 */
// Route::controller('dashboard', 'AccountController');
Route::get('dashboard', 'AccountController@getIndex');
Route::post('dashboard/update-user-btag-info', 'AccountController@postUpdateUserBtagInfo');
Route::post('dashboard/update-user-info', 'AccountController@postUpdateUserInfo');

/**
 * Registring the RESTful Character Controller
 *
 */
Route::get('character/profile/{id}', 'CharacterController@getProfile')->where('id', '\d+');


/**
 * Registring the Auction House tools
 */
Route::get('ah/realmoney-calculator', 'AuctionHouseController@getAHProfitCalc');
Route::get('ah/gold-or-realmoney', 'AuctionHouseController@getGoldOrRealMoney');

Route::get('item/compare/{itemId}', 'DiabloController@getCompareItem');

Route::post('items/update', function()
{
    $name = Input::get('value');
    ChromePhp::log($name);
});
