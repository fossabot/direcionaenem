<?php

Route::group(['namespace' => 'App\Http\Controllers\Web\Estudante'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@index');
        Route::post('login', 'LoginController@check');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('inicio', 'DashboardController@index');
        Route::get('minha-conta', 'UsuariosController@editar');
        Route::get('ver-perfil', 'UsuariosController@index');
        Route::get('ajuda', 'UsuariosController@ajuda');
        Route::get('fale-conosco', 'UsuariosController@faleconosco');
        Route::get('cadastrar', 'CadastroController@index');
        Route::get('metas', 'MetasController@index');
        Route::get('aulas', 'AulasController@index');
        Route::get('desempenho', 'DesempenhoController@index');
        Route::get('mensagens', 'MensagensController@index');
        Route::get('contato', 'ContatoController@index');
        Route::get('deslogar', 'LoginController@logout');
    });

});