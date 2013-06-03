<?php
# Homepage
Route::get('/', [ 'as' => 'home', function() {
    return View::make('home');
}]);

/**
 * Registring the Authentication Routes
 *
 */
Route::group(array('prefix' => 'auth'), function()
{
    # Login
    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');

    # Register
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate');

    # Logout
    Route::get('logout', 'AuthController@getLogout');
});

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
Route::group(array('prefix' => 'dashboard'), function()
{
    Route::get('/', 'AccountController@getIndex');
    Route::post('update-user-btag-info', 'AccountController@postUpdateUserBtagInfo');
    Route::post('update-user-info', 'AccountController@postUpdateUserInfo');
});

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

Route::post('items/update', function() {
    $name = Input::get('value');
    ChromePhp::log($name);
});


/**
 * Registring Admin routes
 *
 */
Route::group(array('prefix' => 'admin'), function()
{
    # User Management
    Route::group(array('prefix' => 'users'), function()
    {
        Route::get('/', array('as' => 'users', 'uses' => 'Controllers\Admin\UsersController@getIndex'));
        Route::get('create', array('as' => 'create/user', 'uses' => 'Controllers\Admin\UsersController@getCreate'));
        Route::post('create', 'Controllers\Admin\UsersController@postCreate');
        Route::get('{userId}/edit', array('as' => 'update/user', 'uses' => 'Controllers\Admin\UsersController@getEdit'));
        Route::post('{userId}/edit', 'Controllers\Admin\UsersController@postEdit');
        Route::get('{userId}/delete', array('as' => 'delete/user', 'uses' => 'Controllers\Admin\UsersController@getDelete'));
        Route::get('{userId}/restore', array('as' => 'restore/user', 'uses' => 'Controllers\Admin\UsersController@getRestore'));
    });
    # Dashboard
    Route::get('/', array('as' => 'admin', 'uses' => 'Controllers\Admin\DashboardController@getIndex'));
});
