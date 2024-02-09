<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');

Route::get('browse', 'IndexController@browse')->name('browse');
Route::get('browse/states/{state}', 'IndexController@browseState')->name('browse.state');

Route::get('choose-section-new', 'IndexController@postAd')->name('postAd');
Route::get('about-us/about-spareroom/', 'IndexController@aboutSpareroom')->name('aboutSpareroom');
Route::get('info-and-advice', 'IndexController@infoAndAdvice')->name('infoAndAdvice');
Route::get('earn', 'IndexController@earn')->name('earn');

Route::get('nigeria/search-by-location', 'IndexController@searchByLocation')->name('searchByLocation');
Route::get('nigeria/search-by-commute-time', 'IndexController@searchByCommuteTime')->name('searchByCommuteTime');
Route::get('nigeria/search-by-travel-zone', 'IndexController@searchByTravelZone')->name('searchByTravelZone');
Route::get('nigeria/search-by-tube-line', 'IndexController@searchByTubeLine')->name('searchByTubeLine');

Route::group(['prefix' => 'flatshare'], function () {
    Route::get('/state/{state}', 'PropertyController@state')->name('flatshare.state');
    Route::get('/state/{state}/{neighbourhood}', 'PropertyController@neighbourhood')->name('flatshare.neighbourhood');
    Route::get('/state/{state}/{neighbourhood}/{slug}', 'PropertyController@show')->name('flatshare.show');
    
    Route::get('search', 'PropertyController@search')->name('flatshare.search');
    Route::get('where_to_live_wizard', 'PropertyController@whereToLiveWizard')->name('flatshare.whereToLiveWizard');

    Route::match(['get', 'post'], 'find-postcode3', 'PropertyController@findPostcode3')->name('flatshare.findPostcode3');
    Route::match(['get', 'post'], 'offered-advert3', 'PropertyController@offeredAdvert3')->name('flatshare.offeredAdvert3');
    Route::match(['get', 'post'], 'offered-advert4', 'PropertyController@offeredAdvert4')->name('flatshare.offeredAdvert4');
    Route::match(['get', 'post'], 'offered-advert5', 'PropertyController@offeredAdvert5')->name('flatshare.offeredAdvert5');
    Route::match(['get', 'post'], 'offered-advert6', 'PropertyController@offeredAdvert6')->name('flatshare.offeredAdvert6');
    Route::match(['get', 'post'], 'offered-advert7', 'PropertyController@offeredAdvert7')->name('flatshare.offeredAdvert7');
});

Route::get('wanted_listing_step1', 'IndexController@wantedListingStep1')->name('wantedListingStep1');
Route::get('content/placeditadvert/listing-options/', 'IndexController@listingOptions')->name('listingOptions');
Route::get('liverentfree', 'IndexController@liveRentFree')->name('liveRentFree');

Route::group(['middleware' => 'guest'], function () {
    Route::match(['get', 'post'], 'flatshare/reg', 'AccountController@register')->name('account.register');
    Route::match(['get', 'post'], 'logon', 'AccountController@login')->name('account.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::match(['get', 'post'], 'flatshare/reg-2', 'AccountController@register2')->name('account.register2');
    Route::get('flatshare/thank-you', 'AccountController@thankYou')->name('account.thankYou');
    Route::get('my-account-index', 'AccountController@index')->name('account.index');
});