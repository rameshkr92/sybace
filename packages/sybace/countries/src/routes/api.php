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
	# Countries 
	Route::GET('countries', 'Sybace\Countries\Controllers\CountriesApiController@list');
	Route::POST('countries', 'Sybace\Countries\Controllers\CountriesApiController@storeCountry');
	Route::POST('countries/{id}/update', 'Sybace\Countries\Controllers\CountriesApiController@updateCountry');

	# Areas 
	Route::GET('countries-areas', 'Sybace\Countries\Controllers\AreasApiController@list');
	Route::POST('countries-areas', 'Sybace\Countries\Controllers\AreasApiController@storeArea');
	Route::POST('countries-areas/{id}/update', 'Sybace\Countries\Controllers\AreasApiController@updateArea');
});
