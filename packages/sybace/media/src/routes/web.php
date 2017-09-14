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

Route::group(['middleware' => 'web'], function() {

	Route::GET('media', 'Sybace\Media\Controllers\MediaController@index');
	Route::GET('media/upload', 'Sybace\Media\Controllers\MediaController@upload');
	Route::POST('media/upload', 'Sybace\Media\Controllers\MediaController@storeFile');
	Route::GET('media/{id}/edit', 'Sybace\Media\Controllers\MediaController@edit');
	Route::PATCH('media/{id}', 'Sybace\Media\Controllers\MediaController@update');
	Route::GET('media/{id}/confirm-delete', 'Sybace\Media\Controllers\MediaController@confirmDelete');
	Route::DELETE('media/{id}', 'Sybace\Media\Controllers\MediaController@delete');

	Route::POST('upload-media-file', 'Sybace\Media\Controllers\MediaController@storeFile');
        Route::POST('fetch-image-url', 'Sybace\Media\Controllers\MediaController@fetchImageUrlToGallery');
});