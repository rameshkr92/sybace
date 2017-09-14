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
    # Contact Us Section
    Route::GET('contactus-section', 'Sybace\Contactus\Controllers\ContactusController@sectionIndex');
    Route::GET('contactus-section-create', 'Sybace\Contactus\Controllers\ContactusController@createSection');
    Route::POST('contactus-section-create', 'Sybace\Contactus\Controllers\ContactusController@storeSection');
    Route::GET('contactus-section-update/{id}/edit', 'Sybace\Contactus\Controllers\ContactusController@editSection');
    Route::PATCH('contactus-section-update/{id}', 'Sybace\Contactus\Controllers\ContactusController@updateSection');
    Route::GET('contactus/{id}', 'Sybace\Contactus\Controllers\ContactusController@show');
    Route::GET('contactus/change-section-status/{id}', 'Sybace\Contactus\Controllers\ContactusController@changeSectionStatus');
    Route::POST('contactus/bulk-operations-section', 'Sybace\Contactus\Controllers\ContactusController@bulkOperationsSection');

    # Contact Us
    Route::GET('contactus', 'Sybace\Contactus\Controllers\ContactusController@index');
    Route::GET('contactus/{id}', 'Sybace\Contactus\Controllers\ContactusController@show');
    Route::GET('contactus/change-status/{id}', 'Sybace\Contactus\Controllers\ContactusController@changeStatus');
    Route::POST('contactus/request-reply/{id}', 'Sybace\Contactus\Controllers\ContactusApiController@postReply');
    Route::POST('contactus/bulk-operations', 'Sybace\Contactus\Controllers\ContactusController@bulkOperations');
});
