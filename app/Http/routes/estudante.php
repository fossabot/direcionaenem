<?php

Route::group(['namespace' => 'App\Http\Controllers\Web\Estudante'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index');
        Route::post('login', 'LoginController@check');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('inicio', 'DashboardController@index');
        Route::get('editar-conta', 'DashboardController@index');
        Route::get('cadastrar', 'CadastroController@index');
        Route::get('metas', 'MetasController@index');
        Route::get('aulas', 'AulasController@index');
        Route::get('desempenho', 'DesempenhoController@index');
        Route::get('mensagens', 'MensagensController@index');
        Route::get('contato', 'ContatoController@index');
        Route::get('deslogar', 'LoginController@logout');
    });
});