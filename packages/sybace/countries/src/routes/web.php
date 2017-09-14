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
	# Countries
	Route::GET('countries', 'Sybace\Countries\Controllers\CountriesController@index');
	Route::GET('countries/create', 'Sybace\Countries\Controllers\CountriesController@create');
	Route::POST('countries', 'Sybace\Countries\Controllers\CountriesController@store');
	Route::GET('countries/{id}/edit', 'Sybace\Countries\Controllers\CountriesController@edit');
	Route::PATCH('countries/{id}', 'Sybace\Countries\Controllers\CountriesController@update');
	Route::POST('countries/bulk-operations', 'Sybace\Countries\Controllers\CountriesController@bulkOperations');

	# ِAreas
	Route::GET('countries-areas', 'Sybace\Countries\Controllers\AreasController@index');
	Route::GET('countries-areas/create', 'Sybace\Countries\Controllers\AreasController@create');
	Route::POST('countries-areas', 'Sybace\Countries\Controllers\AreasController@store');
	Route::GET('countries-areas/{id}/edit', 'Sybace\Countries\Controllers\AreasController@edit');
	Route::PATCH('countries-areas/{id}', 'Sybace\Countries\Controllers\AreasController@update');
	Route::POST('countries-areas/bulk-operations', 'Sybace\Countries\Controllers\AreasController@bulkOperations');
});