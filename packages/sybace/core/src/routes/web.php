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

Route::group(['middleware' => ['web'], 'prefix' => 'admin'], function() {
	Route::get('login', 'Sybace\Core\Controllers\AdminLoginController@getAdmin');
	Route::post('login', 'Sybace\Core\Controllers\AdminLoginController@postAdmin');
	Route::get('logout', 'Sybace\Core\Controllers\AdminLoginController@getAdminLogout');
});

Route::group(['middleware' => ['web'], 'prefix' => $locale.'/admin'], function() {
	Route::get('login', 'Sybace\Core\Controllers\AdminLoginController@getAdmin');
	Route::post('login', 'Sybace\Core\Controllers\AdminLoginController@postAdmin');
	Route::get('logout', 'Sybace\Core\Controllers\AdminLoginController@getAdminLogout');
});

$action = 'Sybace\Core\Controllers\DashboardController@index';
if(Config::has('sybace.dashboard_function') && !empty(config('sybace.dashboard_function'))){
	$action = config('sybace.dashboard_function');
}

Route::group(['middleware' => ['web' ,'admin'], 'prefix' => $locale], function() use($action) {
	Route::get('admin', $action);
});

Route::group(['middleware' => ['web' ,'admin']], function() use($action) {
    
	Route::get('admin', $action);

        
        
});

Route::group(['middleware' => ['web' ,'admin'], 'prefix' => $locale.'/admin'], function() {
	Route::POST('delete-item', 'Sybace\Core\Controllers\OperationsController@delete');
	Route::POST('bulk-delete-items', 'Sybace\Core\Controllers\OperationsController@bulkDelete');
});