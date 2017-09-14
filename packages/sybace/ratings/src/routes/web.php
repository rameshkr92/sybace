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
	# Ratings
	Route::GET('ratings', 'Sybace\Ratings\Controllers\RatingsController@index');
	Route::GET('ratings/create', 'Sybace\Ratings\Controllers\RatingsController@create');
	Route::POST('ratings', 'Sybace\Ratings\Controllers\RatingsController@store');
	Route::GET('ratings/{id}/edit', 'Sybace\Ratings\Controllers\RatingsController@edit');
	Route::PATCH('ratings/{id}', 'Sybace\Ratings\Controllers\RatingsController@update');
	Route::POST('ratings/bulk-operations', 'Sybace\Ratings\Controllers\RatingsController@bulkOperations');

});