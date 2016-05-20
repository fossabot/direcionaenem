<?php

Route::group(['as'        => 'instrutor.',
              'prefix'    => 'instrutor',
              'namespace' => 'App\Http\Controllers\Web\Instrutor'], function () {

    Route::group(['middleware' => 'guest:instrutor'], function () {
        Route::get('/login', 'LoginController@index');
        Route::post('/login', 'LoginController@check');
    });

    Route::group(['middleware' => 'auth:instrutor'], function () {
        Route::get('/', [
            'as'   => 'dashboard',
            'uses' => 'DashboardController@index'
        ]);
    });
});