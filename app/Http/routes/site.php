<?php

Route::group(['namespace' => 'App\Http\Controllers\Web\Site'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('quemsomos', 'HomeController@quemsomos');
    Route::post('/', 'HomeController@registrar');
});
