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
	# Faqs 
	Route::GET('faqs', 'sybace\Faqs\Controllers\FaqsApiController@list');
	Route::POST('faqs', 'sybace\Faqs\Controllers\FaqsApiController@storePage');
	Route::POST('faqs/{id}/update', 'sybace\Faqs\Controllers\FaqsApiController@updatePage');
});