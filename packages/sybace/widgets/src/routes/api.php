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
	# Ads 
	Route::GET('widgets', 'Sybace\Widgets\Controllers\WidgetsApiController@list');
	Route::POST('widgets', 'Sybace\Widgets\Controllers\WidgetsApiController@storeAd');
	Route::POST('widgets/{id}/update', 'Sybace\Widgets\Controllers\WidgetsApiController@updateAd');

});
