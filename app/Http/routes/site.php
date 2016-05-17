<?php

Route::group(['namespace' => 'App\Http\Controllers\Web\Site'], function () {
    Route::get('/', 'HomeController@index');
    Route::post('/', 'HomeController@registrar');
    Route::get('quemsomos', 'HomeController@quemsomos');
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index');
        Route::post('logar', [
            'as'   => 'logar',
            'uses' => 'LoginController@logar'
        ]);
    });
    Route::get('login/face', 'LoginController@facebook');
    Route::get('deslogar', [
        'as'   => 'deslogar',
        'uses' => 'LoginController@deslogar'
    ]);
});
