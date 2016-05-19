<?php

Route::group(['as'         => 'instrutor.',
              'prefix'     => 'instrutor',
              'middleware' => 'auth',
              'namespace'  => 'App\Http\Controllers\Web\Instrutor'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
    Route::get('/login', [
        'as'   => 'login',
        'uses' => 'LoginController@index'
    ]);
    Route::post('/login', [
        'as'   => 'logar',
        'uses' => 'LoginController@check'
    ]);
});