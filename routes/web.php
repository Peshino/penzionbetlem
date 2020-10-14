<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

Auth::routes();

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/ubytovani', 'AccommodationController@index')->name('accommodation');

    Route::get('/cenik', 'PriceListController@index')->name('price-list');

    Route::get('/stravovani', 'EatingController@index')->name('eating');

    Route::get('/fotogalerie', 'PhotoGalleryController@index')->name('photo-gallery');

    Route::get('/tipy-na-vylety', 'TipsForTripsController@index')->name('tips-for-trips');

    Route::get('/rezervace', 'ReservationController@index')->name('reservation');

    Route::get('/partneri', 'PartnersController@index')->name('partners');

    Route::get('/kontakty', 'ContactsController@index')->name('contacts');
});

Route::prefix(config('variants.variant_2.route_prefix'))->group(function () {
    // Route::get('/', 'HomeController@index')->name(config('variants.variant_2.route_prefix_dash') . 'home');

    // Route::get('/ubytovani', 'AccommodationController@index')->name(config('variants.variant_2.route_prefix_dash') . 'accommodation');

    // Route::get('/cenik', 'PriceListController@index')->name(config('variants.variant_2.route_prefix_dash') . 'price-list');

    // Route::get('/stravovani', 'EatingController@index')->name(config('variants.variant_2.route_prefix_dash') . 'eating');

    // Route::get('/fotogalerie', 'PhotoGalleryController@index')->name(config('variants.variant_2.route_prefix_dash') . 'photo-gallery');

    // Route::get('/tipy-na-vylety', 'TipsForTripsController@index')->name(config('variants.variant_2.route_prefix_dash') . 'tips-for-trips');

    // Route::get('/rezervace', 'ReservationController@index')->name(config('variants.variant_2.route_prefix_dash') . 'reservation');

    // Route::get('/partneri', 'PartnersController@index')->name(config('variants.variant_2.route_prefix_dash') . 'partners');

    // Route::get('/kontakty', 'ContactsController@index')->name(config('variants.variant_2.route_prefix_dash') . 'contacts');

    Route::get('/', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'home');

    Route::get('/ubytovani', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'accommodation');

    Route::get('/cenik', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'price-list');

    Route::get('/stravovani', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'eating');

    Route::get('/fotogalerie', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'photo-gallery');

    Route::get('/tipy-na-vylety', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'tips-for-trips');

    Route::get('/rezervace', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'reservation');

    Route::get('/partneri', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'partners');

    Route::get('/kontakty', 'HomeController@inConstruction')->name(config('variants.variant_2.route_prefix_dash') . 'contacts');
});

Route::post('/send-reservation-mail', 'ReservationController@sendReservationMail')->name('send-reservation-mail');

Route::get('/symlink', function () {
    Artisan::call('storage:link');
});
