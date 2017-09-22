<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
$locale = \Request::segment(1);
Route::group(['middleware' => ['api'], 'prefix' => $locale.'/api/{key}'], function() {
	# Tasks 
	Route::GET('tasks', 'Sybace\Tasks\Controllers\TasksApiController@list');
	Route::POST('tasks', 'Sybace\Tasks\Controllers\TasksApiController@storeActivity');
	Route::POST('tasks/{id}/update', 'Sybace\Tasks\Controllers\TasksApiController@updateActivity');

});
