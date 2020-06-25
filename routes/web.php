<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/ubytovani', 'AccommodationController@index')->name('accommodation');

    Route::get('/cenik', 'PriceListController@index')->name('price-list');

    Route::get('/stravovani', 'EatingController@index')->name('eating');

    Route::get('/partneri', 'PartnersController@index')->name('partners');

    Route::get('/kontakty', 'ContactsController@index')->name('contacts');
});

Route::prefix(config('variants.variant_2.route_prefix'))->group(function () {
    Route::get('/', 'HomeController@index')->name(config('variants.variant_2.route_prefix_dash') . 'home');

    Route::get('/ubytovani', 'AccommodationController@index')->name(config('variants.variant_2.route_prefix_dash') . 'accommodation');

    Route::get('/cenik', 'PriceListController@index')->name(config('variants.variant_2.route_prefix_dash') . 'price-list');

    Route::get('/stravovani', 'EatingController@index')->name(config('variants.variant_2.route_prefix_dash') . 'eating');

    Route::get('/partneri', 'PartnersController@index')->name(config('variants.variant_2.route_prefix_dash') . 'partners');

    Route::get('/kontakty', 'ContactsController@index')->name(config('variants.variant_2.route_prefix_dash') . 'contacts');
});
