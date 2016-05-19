<?php

Route::group(['as'         => 'estudante.',
  'middleware' => 'auth',
  'namespace'  => 'App\Http\Controllers\Web\Estudante'], function () {
    Route::get('editarconta', 'DashboardController@index');
    Route::get('inicio', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
        ]);
    Route::get('cadastrar', [
        'as'   => 'cadastrar',
        'uses' => 'CadastroController@index'
        ]);
    Route::get('metas', [
        'as'   => 'metas',
        'uses' => 'MetasController@index'
        ]);
    Route::get('aulas', [
        'as'   => 'aulas',
        'uses' => 'AulasController@index'
        ]);
    Route::get('desempenho', [
        'as'   => 'desempenho',
        'uses' => 'DesempenhoController@index'
        ]);
    Route::get('mensagens', [
        'as'   => 'mensagens',
        'uses' => 'MensagensController@index'
        ]);
    Route::get('contato', [
        'as'   => 'contato',
        'uses' => 'ContatoController@index'
        ]);

});