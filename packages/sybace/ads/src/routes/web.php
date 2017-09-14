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
	# Ads
	Route::GET('ads', 'Sybace\Ads\Controllers\AdsController@index');
	Route::GET('ads/create', 'Sybace\Ads\Controllers\AdsController@create');
	Route::POST('ads', 'Sybace\Ads\Controllers\AdsController@store');
	Route::GET('ads/{id}/edit', 'Sybace\Ads\Controllers\AdsController@edit');
	Route::PATCH('ads/{id}', 'Sybace\Ads\Controllers\AdsController@update');
	Route::POST('ads/bulk-operations', 'Sybace\Ads\Controllers\AdsController@bulkOperations');

});