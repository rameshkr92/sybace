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
	//Activities
	Route::GET('activities', 'Sybace\Activities\Controllers\ActivitiesController@index');
	Route::GET('activities/create', 'Sybace\Activities\Controllers\ActivitiesController@create');
	Route::POST('activities', 'Sybace\Activities\Controllers\ActivitiesController@store');
	Route::GET('activities/{id}/edit', 'Sybace\Activities\Controllers\ActivitiesController@edit');
	Route::PATCH('activities/{id}', 'Sybace\Activities\Controllers\ActivitiesController@update');
	Route::POST('activities/bulk-operations', 'Sybace\Activities\Controllers\ActivitiesController@bulkOperations');

});