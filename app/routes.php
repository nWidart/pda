<?php
/**
 * Registring the Authentication Routes
 *
 */
Route::group(array('prefix' => 'auth'), function()
{
    # Login
    Route::get('login', array('as' => 'signin', 'uses' => 'AuthController@getLogin'));
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
    # Updating the battle tag & server info
    Route::post('update-user-btag-info', 'AccountController@postUpdateUserBtagInfo');

    # Updating First & Last name
    Route::post('update-user-info', 'AccountController@postUpdateUserInfo');

    # Change Password
    Route::post('change-password', 'AccountController@postChangeUserPassword');

    # Displaying the dashboard
    Route::get('/', 'AccountController@getIndex');
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
    # Group Management
    Route::group(array('prefix' => 'groups'), function()
    {
        Route::get('/', array('as' => 'groups', 'uses' => 'Controllers\Admin\GroupsController@getIndex'));
        Route::get('create', array('as' => 'create/group', 'uses' => 'Controllers\Admin\GroupsController@getCreate'));
        Route::post('create', 'Controllers\Admin\GroupsController@postCreate');
        Route::get('{groupId}/edit', array('as' => 'update/group', 'uses' => 'Controllers\Admin\GroupsController@getEdit'));
        Route::post('{groupId}/edit', 'Controllers\Admin\GroupsController@postEdit');
        Route::get('{groupId}/delete', array('as' => 'delete/group', 'uses' => 'Controllers\Admin\GroupsController@getDelete'));
        Route::get('{groupId}/restore', array('as' => 'restore/group', 'uses' => 'Controllers\Admin\GroupsController@getRestore'));
    });


    # Character Management
    Route::group(array('prefix' => 'characters'), function()
    {
        Route::get('/', array('as' => 'characters', 'uses' => 'Controllers\Admin\CharactersController@getIndex'));
        Route::get('create', array('as' => 'create/character', 'uses' => 'Controllers\Admin\CharactersController@getCreate'));
        Route::post('create', 'Controllers\Admin\CharactersController@postCreate');
        Route::get('{characterId}/edit', array('as' => 'update/character', 'uses' => 'Controllers\Admin\CharactersController@getEdit'));
        Route::post('{characterId}/edit', 'Controllers\Admin\CharactersController@postEdit');
        Route::get('{characterId}/delete', array('as' => 'delete/character', 'uses' => 'Controllers\Admin\CharactersController@getDelete'));
        Route::get('{characterId}/restore', array('as' => 'restore/character', 'uses' => 'Controllers\Admin\CharactersController@getRestore'));
    });

    # Dashboard
    Route::get('/', array('as' => 'admin', 'uses' => 'Controllers\Admin\DashboardController@getIndex'));
});

# Homepage
Route::get('/', [ 'as' => 'home', function() {
    return View::make('home');
}]);
