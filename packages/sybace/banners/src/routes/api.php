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
	# Banners 
	Route::GET('banners', 'Sybace\Banners\Controllers\BannersApiController@list');
	Route::POST('banners', 'Sybace\Banners\Controllers\BannersApiController@storeBanner');
	Route::POST('banners/{id}/update', 'Sybace\Banners\Controllers\BannersApiController@updateBanner');
});