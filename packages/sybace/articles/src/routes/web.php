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
    //Articles
    Route::GET('articles', 'Sybace\Articles\Controllers\ArticlesController@index');
    Route::GET('articles/create', 'Sybace\Articles\Controllers\ArticlesController@create');
    Route::POST('articles', 'Sybace\Articles\Controllers\ArticlesController@store');
    Route::GET('articles/{id}/edit', 'Sybace\Articles\Controllers\ArticlesController@edit');
    Route::PATCH('articles/{id}', 'Sybace\Articles\Controllers\ArticlesController@update');
    Route::POST('articles/bulk-operations', 'Sybace\Articles\Controllers\ArticlesController@bulkOperations');
});