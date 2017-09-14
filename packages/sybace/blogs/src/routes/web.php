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

Route::group(['middleware' => ['web', 'admin'], 'prefix' => $locale . '/admin'], function() {
    # Blogs
    Route::GET('blogs', 'Sybace\Blogs\Controllers\BlogsController@index');
    Route::GET('blogs/create', 'Sybace\Blogs\Controllers\BlogsController@create');
    Route::POST('blogs', 'Sybace\Blogs\Controllers\BlogsController@store');
    Route::GET('blogs/{id}/edit', 'Sybace\Blogs\Controllers\BlogsController@edit');
    Route::PATCH('blogs/{id}', 'Sybace\Blogs\Controllers\BlogsController@update');
    Route::POST('blogs/bulk-operations', 'Sybace\Blogs\Controllers\BlogsController@bulkOperations');

    # ِComments
    Route::GET('blogs/comments', 'Sybace\Blogs\Controllers\CommentsController@index');
    Route::GET('blogs/comments/create', 'Sybace\Blogs\Controllers\CommentsController@create');
    Route::POST('blogs/comments', 'Sybace\Blogs\Controllers\CommentsController@store');
    Route::GET('blogs/comments/{id}/edit', 'Sybace\Blogs\Controllers\CommentsController@edit');
    Route::PATCH('blogs/comments/{id}', 'Sybace\Blogs\Controllers\CommentsController@update');
    Route::POST('blogs/comments/bulk-operations', 'Sybace\Blogs\Controllers\CommentsController@bulkOperations');
});
