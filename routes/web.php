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
// Public routes
Route::get('/', 'WebsiteController@home');
Route::post('get-selected-cities', 'WebsiteController@getSelectedCities');

# Locale
// $locale = \Request::segment(1);
$locale = "en";
Route::group(['prefix' => $locale], function() {
    Route::get('/home', 'WebsiteController@index');
    // Auth
    Route::get('login', 'WebsiteController@login');
    Route::post('login', 'WebsiteController@postLogin');

    Route::get('register', 'WebsiteController@register');
    Route::post('register', 'WebsiteController@postRegister');
    Route::get('country-areas/{countryId}', 'WebsiteController@countryAreas');
    // Sms confirmation
    Route::get('confirm-account/{userId}/{userPhone}/{confirmationType}', 'WebsiteController@confirmCode');
    Route::post('confirm-account/{userId}', 'WebsiteController@postConfirmCode');

    // Forgot password
    Route::get('forgot-password', 'WebsiteController@forgotPassword');
    Route::post('forgot-password', 'WebsiteController@forgotPasswordUserValidation');
    Route::post('retrieve-password-by-phone/{userId}', 'WebsiteController@postConfirmCodeRetrievePassword');
    Route::get('reset-password/{userId}/{confirmationCode}/{method}', 'WebsiteController@resetPassword');
    Route::post('reset-password/{userId}/{method}', 'WebsiteController@postResetPassword');

    Route::get('email-change/{userId}/{confirmationCode}', 'WebsiteController@emailChange');
    // Pages
    Route::get('pages/{pageId}', 'CmsController@showPage');

    // Contact-us
    Route::get('contact-us', 'WebsiteController@createContact');
    Route::post('contact-us', 'WebsiteController@createContact');
    //faqs
    Route::get('faqs', 'FaqController@faqs');
    Route::post('faqs/contact', 'FaqController@faqContact');

    // public profile
    Route::get('profile/{userName}', 'WebsiteController@publicProfile');

    Route::post('change-show-status', 'WebsiteController@changeShowStatus');

    Route::post('delete-gallery-images', 'WebsiteController@deleteGalleryImages');

    Route::post('show-more-comments', 'WebsiteController@moreComments');

    Route::get('/search-result', 'SearchController@searchResult');
    Route::get('/search-result/{id}/view', 'SearchController@storeDetail');

});

Route::get('/logout', 'WebsiteController@logout');

// Registerd user routes
Route::group(['prefix' => $locale], function() {
    // User profile
    Route::get('verify-account/{id}', 'WebsiteController@verifyUserAccount');
    Route::post('post-verify-account', 'WebsiteController@postVerifyAccount');
    Route::get('user', 'WebsiteController@dashboard');
    Route::get('user/profile', 'WebsiteController@profile');
    Route::get('user/edit-profile', 'WebsiteController@editProfile');
    Route::post('user/post-edit', 'WebsiteController@postEdit');
    Route::get('user/reset-mobile', 'WebsiteController@resetMobile');
});
Route::get('check-email-vailability', 'WebsiteController@checkEmailAvailability');

// OAuth Routes
Route::get('auth/{provider}', 'WebsiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'WebsiteController@handleProviderCallback');

// Store routes start here
Route::group(['prefix' => $locale], function() {

    Route::GET('user/stores', 'StoreController@index');
    Route::GET('user/stores/create', 'StoreController@addStore');
    Route::POST('user/stores', 'StoreController@saveStore');
    Route::GET('user/stores/{id}/edit', 'StoreController@edit');
    Route::PATCH('user/stores/{id}', 'StoreController@update');
    //view
    Route::GET('user/stores/{id}/view', 'StoreController@view');

    Route::GET('user/stores/{id}/view', 'StoreController@view');
//    Route::POST('stores/bulk-operations', 'StoreController@bulkOperations');
});
// Store routes end here

// Scrape routes start here
Route::group(['prefix' => $locale], function() {
    Route::resource('scrape','WebScraperController@index');
});
// Scrape routes end here

// Market Place routes start here
Route::group(['prefix' => $locale], function() {
    Route::GET('marketplace','MarketPlaceController@index');
});
// Market Place routes end here

// Market Place routes start here
Route::group(['prefix' => $locale], function() {
    Route::get('manageMailChimp', 'MailChimpController@manageMailChimp');
    Route::post('subscribe', 'MailChimpController@subscribe');
    Route::post('sendCompaign',['as'=>'sendCompaign','uses'=>'MailChimpController@sendCompaign']);
});
// Market Place routes end here

Route::get('/blog', 'WebsiteController@blog');