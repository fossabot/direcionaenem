<?php
//Student Routes
Route::group(['as' => 'estudante.',
              'prefix' => 'estudante',
              'namespace' => 'App\Http\Controllers\Web\Estudante'], function () {
    Route::get('/', [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index'
    ]);
});