<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::prefix('/')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/ubytovani', 'AccommodationController@index')->name('accommodation');
});

Route::prefix(config('variants.variant_2.route_prefix'))->group(function () {
    Route::get('/', 'HomeController@index')->name(config('variants.variant_2.route_prefix_dash') . 'home');

    Route::get('/ubytovani', 'AccommodationController@index')->name(config('variants.variant_2.route_prefix_dash') . 'accommodation');
});
