<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------|
| Admin Routes                                                             |
|--------------------------------------------------------------------------|
|
|     Here is where you can register web routes for your application. These
|     routes are loaded by the RouteServiceProvider within a group which
|     contains the "admin" middleware group. Now create something great!
|
*/
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
#satart Admin routes
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin','prefix'=>'admin'], function () {

       Route::get('/', 'DashboardController@index')->name('admin.dashboard');
       Route::get('logout','LoginController@logout')->name('admin.logout');
        #Routs For Settings only
         Route::group(['prefix' => 'settings'], function () {
        #routs for Shipping Methods only
          Route::get('shipping-methods/{type}', 'SettingsController@editShippingMethods')->name('edit.shipping.methods');
          Route::put('shipping-methods/{id}', 'SettingsController@updateShippingMethods')->name('update.shipping.methods');
        });


        #routs for Admin profile only
        Route::group(['prefix' => 'profile'], function () {
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@updateProfile')->name('update.profile');
            //Route::put('update/password', 'ProfileController@updatePassword')->name('update.profile.password');
        });

    });
#End Dashboard Routs

# start Rout of login if user not admin or admin inst Dashboard
    Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin','prefix'=>'admin'], function () {

        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    });
# End Rout of login if user not admin or admin inst Dashboard

});



