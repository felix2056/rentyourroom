<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function browseState($state)
    {
        return view('browse-state', compact('state'));
    }

    public function browseCity($state, $city)
    {
        return view('browse-city', compact('state', 'city'));
    }

    public function browseNeighbourhood($state, $city, $neighbourhood)
    {
        return view('browse-neighbourhood', compact('state', 'city', 'neighbourhood'));
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
