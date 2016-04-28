<?php

Route::group(['as' => 'student.', 'namespace' => 'App\Http\Controllers\Web\Student'], function () {
    Route::get('/dashboard', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});

Route::group(['as' => 'instructor.', 'prefix' => 'instructor', 'namespace' => 'App\Http\Controllers\Web\Instructor'],
    function () {
    Route::get('/dashboard', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});

