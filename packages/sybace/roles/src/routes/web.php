<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
$locale = \Request::segment(1);

Route::group(['middleware' => ['web' ,'admin'], 'prefix' => $locale.'/admin'], function() {
	# Roles
	Route::GET('roles', 'Sybace\Roles\Controllers\RolesController@index');
	Route::GET('roles/create', 'Sybace\Roles\Controllers\RolesController@create');
	Route::POST('roles', 'Sybace\Roles\Controllers\RolesController@store');
	Route::GET('roles/{id}/edit', 'Sybace\Roles\Controllers\RolesController@edit');
	Route::PATCH('roles/{id}', 'Sybace\Roles\Controllers\RolesController@update');
	Route::POST('roles/bulk-operations', 'Sybace\Roles\Controllers\RolesController@bulkOperations');

});