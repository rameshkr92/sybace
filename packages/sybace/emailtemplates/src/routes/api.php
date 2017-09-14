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
	# Reports 
//	Route::GET('reports', 'Sybace\Reports\Controllers\ReportsApiController@list');
//	Route::POST('reports', 'Sybace\Reports\Controllers\ReportsApiController@storeReport');
//	Route::POST('reports/{id}/update', 'Sybace\Reports\Controllers\ReportsApiController@updateReport');
});
