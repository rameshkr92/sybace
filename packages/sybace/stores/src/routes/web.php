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
	# Stores
	Route::GET('stores', 'Sybace\Stores\Controllers\StoresController@index');
	Route::GET('stores/create', 'Sybace\Stores\Controllers\StoresController@create');
	Route::POST('stores', 'Sybace\Stores\Controllers\StoresController@store');
	Route::GET('stores/{id}/edit', 'Sybace\Stores\Controllers\StoresController@edit');
	Route::PATCH('stores/{id}', 'Sybace\Stores\Controllers\StoresController@update');
	Route::POST('stores/bulk-operations', 'Sybace\Stores\Controllers\StoresController@bulkOperations');

    Route::POST('stores/delete-store-gallery-images', 'Sybace\Stores\Controllers\StoresController@deleteStoreGalleryImages');
});