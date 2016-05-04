<?php

Route::group(['namespace' => 'App\Http\Controllers\Web\Site'], function () {
    Route::get('/', 'HomeController@index');
    Route::post('/', 'HomeController@registrar');
    Route::get('quemsomos', 'HomeController@quemsomos');
    Route::get('login', 'LoginController@index');
});
