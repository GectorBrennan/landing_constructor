<?php

Route::domain(env('APP_URL'))->as('landings.')->group(function () {

        Route::get('/', 'LandingController@index')->name('list');
        Route::get('create/{name}', 'LandingController@create')->name('create');
        Route::get('show/{landing}', 'LandingController@show')->name('show');
        Route::get('edit/{landing}', 'LandingController@edit')->name('edit');
        Route::delete('destroy/{landing}', 'LandingController@destroy')->name('destroy');

        Route::get('settings/{landing}', 'LandingController@settings')->name('settings');

        Route::prefix('api')->as('api.')->namespace('Api')->group(function () {
            Route::post('store', 'LandingController@store')->name('store');
            Route::post('update', 'LandingController@update')->name('update');
        });
    });