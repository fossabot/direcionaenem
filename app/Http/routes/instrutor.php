<?php

Route::group(['as'        => 'instrutor.',
              'prefix'    => 'instrutor',
              'namespace' => 'App\Http\Controllers\Web\Instrutor'], function () {

    Route::group(['middleware' => 'guest:instrutor'], function () {
        Route::get('login', 'LoginController@index');
        Route::post('login', 'LoginController@check');
    });

    Route::group(['middleware' => 'auth:instrutor'], function () {
        Route::get('/inicio', [
            'as'   => 'dashboard',
            'uses' => 'DashboardController@index'
        ]);
        Route::get('deslogar', 'LoginController@logout');
        Route::get('metas', 'MetasController@index');
        Route::get('materias', 'MateriasController@index');
        Route::get('materias/adicionar', 'MateriasController@adicionar');
        Route::post('materias/salvar', 'MateriasController@salvar');
        Route::get('materias/excluir/{id}', 'MateriasController@excluir');
    });
});