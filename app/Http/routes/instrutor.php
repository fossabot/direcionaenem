<?php
//Instructor Routes
Route::group(['as' => 'instructor.',
              'prefix' => 'instrutor',
              'namespace' => 'App\Http\Controllers\Web\Instrutor'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});