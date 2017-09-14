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
	# Stores 
	Route::GET('stores', 'Sybace\Stores\Controllers\StoresApiController@list');
	Route::POST('stores', 'Sybace\Stores\Controllers\StoresApiController@storeActivity');
	Route::POST('stores/{id}/update', 'Sybace\Stores\Controllers\StoresApiController@updateActivity');

});
