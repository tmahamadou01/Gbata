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
Route::get('/offers', 'OfferController@index')->name('liste_des_offres');
Route::get('/offers/locations', 'OfferController@offer_location')->name('offre_location');
Route::get('/offers/sales', 'OfferController@offer_vente')->name('offre_vente');
Route::post('/offers', 'OfferController@search')->name('search');
Route::get('/detail/id/{id_offer}', 'OfferController@detail')->name('detail_offer');



/*route de l'admin zone */

Route::group(['prefix' => 'adminzone', 'middleware' => ['role:admin|agence']], function () {

    Route::get('/', '\App\Http\Controllers\Admin\AdminController@Home')->name('home_admin');
    Route::get('/agency/add', '\App\Http\Controllers\Admin\AgencyController@add')->middleware(['role:admin'])->name('add_agency');
    //Route::get('/offers/create', '\App\Http\Controllers\Admin\OfferController@create')->name('add_offers');
    Route::resource('offers', '\App\Http\Controllers\Admin\OfferController');
    Route::get('offers/{offer}/desactivate', '\App\Http\Controllers\Admin\OfferController@desactivate_offer')->name('desactivate_offer');
    Route::get('offers/{offer}/activate', '\App\Http\Controllers\Admin\OfferController@activate_offer')->name('activate_offer');
});


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register/confirm/{token}', '\App\Http\Controllers\Auth\RegisterController@confirmEmail');

