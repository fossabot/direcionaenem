<?php

Route::group(['as'         => 'admin.',
              'prefix'     => 'admin',
              'middleware' => 'auth',
              'namespace'  => 'App\Http\Controllers\Web\Admin'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});