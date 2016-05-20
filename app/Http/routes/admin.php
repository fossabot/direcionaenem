<?php

Route::group(['as'        => 'admin.',
              'prefix'    => 'admin',
              'namespace' => 'App\Http\Controllers\Web\Admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index');
        Route::post('login', 'LoginController@check');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('inicio', 'DashboardController@index');
        Route::get('estudantes', 'EstudantesController@index');
        Route::get('instrutores', 'InstrutoresController@index');
        Route::get('instrutores/editar/{id}', 'InstrutoresController@editar');
        Route::get('instrutores/desativar/{id}', 'InstrutoresController@editar');
    });
});