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
	# Tasks
	Route::GET('tasks', 'Sybace\Tasks\Controllers\TasksController@index');
	Route::GET('tasks/create', 'Sybace\Tasks\Controllers\TasksController@create');
	Route::POST('tasks', 'Sybace\Tasks\Controllers\TasksController@store');
	Route::GET('tasks/{id}/edit', 'Sybace\Tasks\Controllers\TasksController@edit');
	Route::PATCH('tasks/{id}', 'Sybace\Tasks\Controllers\TasksController@update');
	Route::POST('tasks/bulk-operations', 'Sybace\Tasks\Controllers\TasksController@bulkOperations');

    Route::POST('tasks/delete-store-gallery-images', 'Sybace\Tasks\Controllers\TasksController@deleteStoreGalleryImages');
});