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
	# Pages 
	Route::GET('contactus', 'Sybace\Contactus\Controllers\ContactusApiController@list');
	Route::POST('contactus', 'Sybace\Contactus\Controllers\ContactusApiController@storePage');
    
	Route::POST('contactus/{id}/update', 'Sybace\Contactus\Controllers\ContactusApiController@updatePage');
});