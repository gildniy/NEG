<?php

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        include_once Config::get('generator.path_api_routes');
    });
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Test routes
Route::get('/header', 'WelcomeController@header');

//The default root url ("/") will redirect to ("/home")
Route::get('/', 'WelcomeController@index');
Route::get('/hello', [
    'as' => 'home.index',
    'uses' => 'WelcomeController@home',
]);

Route::resource('blogs', 'BlogController');
Route::get('blogs/{id}/delete', [
    'as' => 'blogs.delete',
    'uses' => 'BlogController@destroy',
]);

// Confide routes
Route::get('users/create', 'UserController@create');
Route::post('users', 'UserController@store');
Route::get('users/login', 'UserController@login');
Route::post('users/login', 'UserController@doLogin');
Route::get('users/confirm/{code}', 'UserController@confirm');
Route::get('users/forgot_password', 'UserController@forgotPassword');
Route::post('users/forgot_password', 'UserController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UserController@resetPassword');
Route::post('users/reset_password', 'UserController@doResetPassword');
Route::get('users/logout', 'UserController@logout');

//User Management
Route::get('users/manager', [
    'as' => 'users.manager.index',
    'uses' => 'UserController@index',
]);
Route::get('users/manager/create', [
    'as' => 'users.manager.create',
    'uses' => 'UserController@managerCreate',
]);
Route::post('users/manager', [
    'as' => 'users.manager.store',
    'uses' => 'UserController@managerStore',
]);
Route::get('users/manager/{id}/show', [
    'as' => 'users.manager.show',
    'uses' => 'UserController@show',
]);
Route::get('users/manager/{id}/edit', [
    'as' => 'users.manager.edit',
    'uses' => 'UserController@edit',
]);
Route::patch('users/manager/{id}/update', [
    'as' => 'users.manager.update',
    'uses' => 'UserController@update',
]);
Route::get('users/manager/{id}/delete', [
    'as' => 'users.manager.delete',
    'uses' => 'UserController@destroy',
]);

//The Dashboard routes...
Route::get('userpanel/dashboard', [
    'as' => 'userpanel.dashboard',
//    'uses' => 'DashboardController@index'
    'uses' => 'DashBoardController@dashboard'

]);

////The Dashboard routes for different roles
//Route::get('userpanel/dashboard', array('before' => 'auth', function () {
//    if (Entrust::hasRole('regular')) {
//        return View::make('/');
//    } else if (Entrust::hasRole('superadmin')) {
//        return Redirect::action('DashboardController@index');
//    } else {
//        Auth::logout();
//        return Redirect::to('/login')
//            ->with('error', 'You don\'t have access!');
//    }
//
//    return App::abort(403);
//}));

//Make the UserCustomValidator class available globally
//App::bind('confide.user_validator', 'Neg\Models\UserValidator');
//
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
//
//    Route::get('login', 'AuthController@login');
//    Route::get('logout', 'AuthController@logout');
//
//    Route::group(['middleware' => 'authAdmin'], function(){
//        Route::resource('page', 'PageController');
//        Route::resource('article', 'ArticleController');
//        Route::resource('gallery', 'GalleryController');
//        Route::resource('user', 'UserController');
//
//        // ...
//    });
//});

Route::group(['prefix' => 'manage', 'middleware' => 'role:admin|super'], function () {
    Route::get('users', [
        'as' => 'users.manager',
        'uses' => 'UsersController@index',
    ]);
});

Route::group(['prefix' => 'manage'], function () {

    // Manage users for only admin and super-admin roles(The filter is in the controller
    Route::get('users', [
        'as' => 'manage.users',
        'uses' => 'UserController@index'
    ]);

    Route::post('user/{id}/status', [
        'as' => 'manage.user.status',
        'uses' => 'UserController@changeUserStatus'
    ]);

    Route::post('user/{id}/assignrole', [
        'as' => 'manage.user.assignrole',
        'uses' => 'UserController@assignNewRoleToUser'
    ]);

    Route::post('user/{id}/changepw', [
        'as' => 'manage.user.changepw',
        'uses' => 'UserController@changeUserPassword'
    ]);
});

// Routes for the NEG Template Design
Route::group(['prefix' => 'tpl'], function () {

    Route::get('/', [
        'as' => 'index',
        'uses' => 'TplController@index'
    ]);
});

Route::get('back', 'BackendController@index');

