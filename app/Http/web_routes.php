<?php

Route::group(['as' => 'student.', 'namespace' => 'App\Http\Controllers\Web\Student'], function () {
    Route::get('/dashboard', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});

Route::group(['as' => 'instructor.', 'prefix' => 'instructor', 'namespace' => 'App\Http\Controllers\Web\Instructor'], function () {
    Route::get('/dashboard', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});

Route::get('/', 'App\Http\Controllers\Web\SiteController@index');
Route::get('quemsomos', 'App\Http\Controllers\Web\SiteController@quemsomos');
Route::post('/', 'App\Http\Controllers\Web\SiteController@registrar');