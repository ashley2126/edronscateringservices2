<?php

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


Route::get('/',[
   'as' =>  'frontend.home',
   'uses' => 'PagesController@home'
]);

Route::get('gallery',[
   'as' => 'frontend.gallery',
   'uses' => 'PagesController@gallery'
]);

Route::get('menu',[
    'as' => 'frontend.menu',
    'uses' => 'PagesController@menu'
]);

Route::get('packages',[
    'as' => 'frontend.packages',
    'uses' => 'PagesController@packages'
]);

Route::get('contact',[
    'as' => 'frontend.contact',
    'uses' => 'PagesController@contact'
]);

Route::get('package1',[
    'as' => 'frontend.package_menu',
    'uses' => 'PagesController@package_menu'
]);

Route::get('package2',[
    'as' => 'frontend.package_menu',
    'uses' => 'PagesController@package_menu2'
]);


//paypal routes
Route::post('payment', array(
    'as' => 'payment',
    'uses' => 'IndexController@postPayment',
));

// this is after make the payment, PayPal redirect back to your site
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'IndexController@getPaymentStatus',
));
//end of paypal routes

//Route::get('/','Admin\PackageController@index');

Route::group(['namespace' => 'Admin'], function()
{
    // Add Admin Middleware here.
    Route::group(['prefix' => 'admin'],function()
    {

        Route::get('/','PackageController@index');
        Route::resource('packages','PackageController');
        Route::resource('menus','MenuController');
        Route::resource('menuitems','MenuItemController');

    });

});


Route::get('logout',array('as' => 'user.logout','uses' => 'Auth\AuthController@getLogout'));
Route::get('login',array('as' => 'user.login','uses' => 'Auth\AuthController@getLogin'));
Route::get('register',array('as' => 'user.register','uses' => 'Auth\AuthController@getRegister'));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);