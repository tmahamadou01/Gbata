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



Route::group(['prefix' => 'offer'], function () {

    Route::get('/list', 'OfferController@listoffer')->name('list_offer');
    Route::get('/{id_offer}/detail', 'OfferController@detailoffer')->name('detail_offer')->where('id_offer', '[0-9]+');
    Route::get('/add', 'OfferController@addoffer')->name('add_offer');

});



Auth::routes();

