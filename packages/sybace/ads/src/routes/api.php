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
	Route::GET('ads', 'Sybace\Ads\Controllers\AdsApiController@list');
	Route::POST('ads', 'Sybace\Ads\Controllers\AdsApiController@storeAd');
	Route::POST('ads/{id}/update', 'Sybace\Ads\Controllers\AdsApiController@updateAd');

});
