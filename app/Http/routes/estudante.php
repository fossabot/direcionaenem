<?php

Route::group(['as'         => 'estudante.',
              'prefix'     => 'estudante',
              'middleware' => 'auth',
              'namespace'  => 'App\Http\Controllers\Web\Estudante'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
    Route::get('estudante/cadastrar', [
        'as'   => 'cadastrar',
        'uses' => 'EstudantesController@cadastrar'
    ]);
});