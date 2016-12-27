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


Route::get('/', 'HomeController@index')->name('accueil');

Route::get('/comment-ca-marche', 'HomeController@how')->name('how');

/* route des offres*/

Route::group(['prefix' => 'offer'], function () {

    Route::get('/list', 'OfferController@listoffer')->name('list_offer');
    Route::get('/{id_offer}/detail', 'OfferController@detailoffer')->name('detail_offer')->where('id_offer', '[0-9]+');
    Route::get('/add', 'OfferController@addoffer')->name('add_offer');

});

/*route des vente */

Route::group(['prefix' => 'sale'], function () {

    Route::get('/list', 'SaleController@listsale')->name('list_sale');
    Route::get('/{id_offer}/detail', 'SaleController@detailsale')->name('detail_sale')->where('id_sale', '[0-9]+');
    Route::get('/add', 'SaleController@addsale')->name('add_sale');

});

/*route de l'admin zone */

Route::group(['prefix' => 'adminzone'], function () {

    Route::get('/home', '\App\Http\Controllers\Admin\AdminController@addAgency')->name('add_agency');

});



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

