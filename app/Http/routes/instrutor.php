<?php
//Instructor Routes
Route::group(['as'         => 'instrutor.',
              'prefix'     => 'instrutor',
              'middleware' => 'auth',
              'namespace'  => 'App\Http\Controllers\Web\Instrutor'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});