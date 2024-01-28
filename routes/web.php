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
Route::get('choose-section-new', 'IndexController@postAd')->name('postAd');
Route::get('about-us/about-spareroom/', 'IndexController@aboutSpareroom')->name('aboutSpareroom');
Route::get('info-and-advice', 'IndexController@infoAndAdvice')->name('infoAndAdvice');
Route::get('earn', 'IndexController@earn')->name('earn');

Route::get('london/search-by-location', 'IndexController@searchByLocation')->name('searchByLocation');
Route::get('london/search-by-commute-time', 'IndexController@searchByCommuteTime')->name('searchByCommuteTime');
Route::get('london/search-by-travel-zone', 'IndexController@searchByTravelZone')->name('searchByTravelZone');
Route::get('london/search-by-tube-line', 'IndexController@searchByTubeLine')->name('searchByTubeLine');

Route::get('flatshare/search', 'IndexController@search')->name('search');
Route::get('flatshare/where_to_live_wizard', 'IndexController@whereToLiveWizard')->name('whereToLiveWizard');
Route::get('flatshare/find-postcode3', 'IndexController@findPostcode3')->name('findPostcode3');

Route::get('wanted_listing_step1', 'IndexController@wantedListingStep1')->name('wantedListingStep1');
Route::get('content/placeditadvert/listing-options/', 'IndexController@listingOptions')->name('listingOptions');
Route::get('liverentfree', 'IndexController@liveRentFree')->name('liveRentFree');

Route::get('my-account-index', 'AccountController@index')->name('account.index');
Route::get('flatshare/reg', 'AccountController@register')->name('account.register');
Route::get('logon', 'AccountController@login')->name('account.login');