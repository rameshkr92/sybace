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
    //Pages
    Route::GET('pages', 'Sybace\Pages\Controllers\PagesController@index');
    Route::GET('pages/dynamic', 'Sybace\Pages\Controllers\PagesController@dynamic');
    Route::GET('pages/create', 'Sybace\Pages\Controllers\PagesController@create');
    Route::POST('pages', 'Sybace\Pages\Controllers\PagesController@store');
    Route::GET('pages/{id}/edit', 'Sybace\Pages\Controllers\PagesController@edit');
    Route::PATCH('pages/{id}', 'Sybace\Pages\Controllers\PagesController@update');
    Route::POST('pages/bulk-operations', 'Sybace\Pages\Controllers\PagesController@bulkOperations');
});