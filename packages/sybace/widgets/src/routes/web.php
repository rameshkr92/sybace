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
	Route::GET('widgets', 'Sybace\Widgets\Controllers\WidgetController@index');
	Route::GET('widgets/create', 'Sybace\Widgets\Controllers\WidgetController@create');
	Route::POST('widgets', 'Sybace\Widgets\Controllers\WidgetController@store');
	Route::GET('widgets/{id}/edit', 'Sybace\Widgets\Controllers\WidgetController@edit');
	Route::PATCH('widgets/{id}', 'Sybace\Widgets\Controllers\WidgetController@update');
	Route::POST('widgets/bulk-operations', 'Sybace\Widgets\Controllers\WidgetController@bulkOperations');

});