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

Route::group(['middleware' => ['web' ,'admin'], 'prefix' => $locale.'/admin'], function() use($locale) {
    # Settings
    Route::GET('/settings', function () use($locale)
    {
        return redirect($locale.'/admin/settings/accounts');
    });
    Route::GET('/settings/info', 'Sybace\Settings\Controllers\SettingsController@editInformation');
    Route::POST('/settings/info', 'Sybace\Settings\Controllers\SettingsController@updateInformation');
    Route::GET('/settings/smtp', 'Sybace\Settings\Controllers\SettingsController@editSmtp');
    Route::POST('/settings/smtp', 'Sybace\Settings\Controllers\SettingsController@updateSmtp');
    Route::GET('/settings/accounts', 'Sybace\Settings\Controllers\SettingsController@editSocialAccounts');
    Route::POST('/settings/accounts', 'Sybace\Settings\Controllers\SettingsController@updateSocialAccounts');
    Route::GET('/settings/links', 'Sybace\Settings\Controllers\SettingsController@editAppLinks');
    Route::POST('/settings/links', 'Sybace\Settings\Controllers\SettingsController@updateAppLinks');
    Route::GET('/settings/seo', 'Sybace\Settings\Controllers\SettingsController@editSeo');
    Route::POST('/settings/seo', 'Sybace\Settings\Controllers\SettingsController@updateSeo');
    Route::GET('/settings/fcm', 'Sybace\Settings\Controllers\SettingsController@editFcm');
    Route::POST('/settings/fcm', 'Sybace\Settings\Controllers\SettingsController@updateFcm');
    Route::GET('/settings/sms', 'Sybace\Settings\Controllers\SettingsController@editSms');
    Route::POST('/settings/sms', 'Sybace\Settings\Controllers\SettingsController@updateSms');
    Route::GET('/settings/mode', 'Sybace\Settings\Controllers\SettingsController@editMaintenanceMode');
    Route::POST('/settings/mode', 'Sybace\Settings\Controllers\SettingsController@updateMaintenanceMode');
    Route::GET('/settings/bank', 'Sybace\Settings\Controllers\SettingsController@editBankInformation');
    Route::POST('/settings/bank', 'Sybace\Settings\Controllers\SettingsController@updateBankInformation');
});