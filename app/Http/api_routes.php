<?php 

Route::get('/', [
	'as' => 'hello',
	'uses' => 'HelloController@index'
]);