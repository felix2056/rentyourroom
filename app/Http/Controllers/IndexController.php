<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function browse()
    {
        return view('browse');
    }

    public function postAd()
    {
        return view('post-ad');
    }

    public function aboutSpareroom()
    {
        return view('about-spareroom');
    }

    public function infoAndAdvice()
    {
        return view('info-and-advice');
    }

    public function earn()
    {
        return view('earn');
    }

    public function search()
    {
        return view('flatshare.search');
    }

    public function searchByLocation()
    {
        return view('london.search-by-location');
    }

    public function searchByCommuteTime()
    {
        return view('london.search-by-commute-time');
    }

    public function searchByTravelZone()
    {
        return view('london.search-by-travel-zone');
    }

    public function searchByTubeLine()
    {
        return view('london.search-by-tube-line');
    }

    public function whereToLiveWizard()
    {
        return view('flatshare.where-to-live-wizard');
    }

    public function findPostcode3()
    {
        return view('flatshare.find-postcode3');
    }

    public function wantedListingStep1()
    {
        return view('wanted-listing-step1');
    }

    public function listingOptions()
    {
        return view('listing-options');
    }

    public function liveRentFree()
    {
        return view('liverentfree');
    }
}
