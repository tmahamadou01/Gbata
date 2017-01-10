<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/home', 'HomeController@home')->name('home');

Route::get('/', 'HomeController@index')->name('accueil');

Route::get('/comment-ca-marche', 'HomeController@how')->name('how');

Route::get('/welcome', 'HomeController@bienvenue')->name('bienvenue-message');

/* route des offres*/
Route::get('/offers', 'OfferController@index');
Route::post('/offers', 'OfferController@search')->name('search');
Route::get('/detail/id/{id_offer}', 'OfferController@detail')->name('detail_offer');



/*route de l'admin zone */

Route::group(['prefix' => 'adminzone'], function () {

    Route::get('/home', '\App\Http\Controllers\Admin\AdminController@Home')->name('home_admin');
    Route::get('/agency/add', '\App\Http\Controllers\Admin\AgencyController@add')->name('add_agency');
    //Route::get('/offers/create', '\App\Http\Controllers\Admin\OfferController@create')->name('add_offers');
    Route::resource('offers', '\App\Http\Controllers\Admin\OfferController');
});



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register/confirm/{token}', '\App\Http\Controllers\Auth\RegisterController@confirmEmail');

