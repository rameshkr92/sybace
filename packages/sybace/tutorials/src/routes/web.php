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
    # Courses
    Route::GET('courses', 'Sybace\Tutorials\Controllers\CoursesController@index');
    Route::GET('courses/create', 'Sybace\Tutorials\Controllers\CoursesController@create');
    Route::POST('courses', 'Sybace\Tutorials\Controllers\CoursesController@store');
    Route::GET('courses/{id}/edit', 'Sybace\Tutorials\Controllers\CoursesController@edit');
    Route::PATCH('courses/{id}', 'Sybace\Tutorials\Controllers\CoursesController@update');
    Route::POST('courses/bulk-operations', 'Sybace\Tutorials\Controllers\CoursesController@bulkOperations');
    # Tutorials
    Route::GET('tutorials', 'Sybace\Tutorials\Controllers\TutorialsController@index');
    Route::GET('tutorials/create', 'Sybace\Tutorials\Controllers\TutorialsController@create');
    Route::POST('tutorials', 'Sybace\Tutorials\Controllers\TutorialsController@store');
    Route::GET('tutorials/{id}/edit', 'Sybace\Tutorials\Controllers\TutorialsController@edit');
    Route::PATCH('tutorials/{id}', 'Sybace\Tutorials\Controllers\TutorialsController@update');
    Route::POST('tutorials/bulk-operations', 'Sybace\Tutorials\Controllers\TutorialsController@bulkOperations');

    # ِComments
    Route::GET('tutorials/comments/{id}', 'Sybace\Tutorials\Controllers\CommentsController@index');
    Route::GET('tutorials/comments/{id}/create', 'Sybace\Tutorials\Controllers\CommentsController@create');
    Route::POST('tutorials/comments/{id}', 'Sybace\Tutorials\Controllers\CommentsController@store');
    Route::GET('tutorials/comments/{post_id}/{id}/edit', 'Sybace\Tutorials\Controllers\CommentsController@edit');
    Route::PATCH('tutorials/comments/{post_id}/{id}', 'Sybace\Tutorials\Controllers\CommentsController@update');
    Route::POST('tutorials/comments/bulk-operations', 'Sybace\Tutorials\Controllers\CommentsController@bulkOperations');
});
