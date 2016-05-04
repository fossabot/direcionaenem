<?php

Route::group(['as' => 'admin.',
              'prefix' => 'admin',
              'namespace' => 'App\Http\Controllers\Web\Admin'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});