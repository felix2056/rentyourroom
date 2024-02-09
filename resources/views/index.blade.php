@extends('layouts.app')

@section('title', 'SpareRoom for flatshare, house share, flat share &amp; rooms for rent')

@section('body-id', '')
@section('body-class', '')

@section('css')
<link rel="stylesheet" href="/css/home.4844950bab7092afcc08.css">
@endsection

@section('content')
<main id="spareroom" class="wrap">
    <div>
    </div>

    <section class="hero">
        <header class="hero__header">
            <h1 class="hero__heading">Nigeria's Number 1 Flatshare Site</h1>
            <h2 class="hero__sub-heading">83,036 rooms and flatmates available now across Nigeria</h2>
        </header>

        <form class="landing-search__form" method="GET" action="{{ route('flatshare.search') }}" id="searchForm" data-search-form>
            <div class="landing-search__search-function-wrapper">
                <div class="landing-search__input-wrapper">
                    <label for="search_by_location_field" class="magnifierIcon">
                        <i class="far fa-search" aria-hidden="true"></i><span class="sr-only">Search for rooms or flatmates</span>
                    </label>
                    <input type="text" id="search_by_location_field" class="search landing-search__text-input" name="search-display-name" size="100" maxlength="255" value placeholder="Area or postcode" pattern=".*" required data-store-search-text>
                    <input type="hidden" id="hidden_search" name="search" value>
                    <div class="landing-search__action-buttons">
                        <button type="reset" name="reset" class="reset" tabindex="-1" aria-label="search reset button"><label for="search_by_location_field" aria-hidden="true" class="far fa-times-circle"></label></button>
                        <button type="button" class="markerIcon" id="getAddress" aria-label="Search using your location">
                            <i class="far fa-crosshairs"></i>
                        </button>
                    </div>
                </div>
                <fieldset class="landing-search__options">
                    <legend class="landing-search__legend sr-only">What are you searching for?</legend>
                    <div class="landing-search__options-checkbox">
                        <input type="radio" name="flatshare_type" CHECKED value="offered" id="offeredRadio">
                        <label for="offeredRadio">Rooms</label>
                    </div>
                    <div class="landing-search__options-checkbox">
                        <input type="radio" name="flatshare_type" aria-label="Flatmates" value="wanted" id="wantedRadio">
                        <label for="wantedRadio">Flatmates</label>
                    </div>
                    <div class="landing-search__options-checkbox">
                        <input type="radio" name="flatshare_type" value="buddyup" id="buddyupRadio" aria-label="Buddy ups - People looking for a room who are also interested in forming a group with others to search for suitable whole properties to rent together.">
                        <label for="buddyupRadio">Buddy ups</label>
                    </div>
                </fieldset>
                <div class="landing-search__search-button">
                    <input type="hidden" name="location_type" value="area">
                    <input type="hidden" name="action" value="search">
                    <button class="button button--large landing-search__submit-button" id="search_by_location_submit_button" type="submit" name="submit">Search
                    </button>
                </div>
            </div>
            <div class="landing-search__advanced-search-wrapper">
                <a class="landing-search__advanced-search" href="{{ route('flatshare.search') }}">Advanced search</a>
            </div>
        </form>

        <div class="hero__image-wrapper">
            <picture class="hero__image-picture">
                <source media="(min-width: 769px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 676px) and (max-width: 768px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 481px) and (max-width: 675px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 416px) and (max-width: 480px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 376px) and (max-width: 415px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 321px) and (max-width: 375px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(max-width: 320px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 769px)" type="image/jpeg" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 769px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 676px) and (max-width: 768px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 481px) and (max-width: 675px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 416px) and (max-width: 480px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 376px) and (max-width: 415px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(min-width: 321px) and (max-width: 375px)" type="image/webp" srcset="/images/banner/1banner-960.png">
                <source media="(max-width: 320px)" type="image/jpeg" srcset="/images/banner/1banner-960.png">
                <img class="hero__image" src="/images/banner/1banner-3960.png" alt importance="high">
            </picture>
        </div>
    </section>

    <div class="home-sections">
        <div class="trustpilot-static">
            <a class="trustpilot-static__link" href="https://uk.trustpilot.com/review/www.spareroom.co.uk?utm_medium=custom_trustbox&amp;utm_source=Horizontal">
                <img class="trustpilot-static__image" src="/fonts/stars_and_logo.svg" alt="4.7 out of 5 stars" width="224" height="24">
                <span class="sr-only">Trustpilot reviews</span>
            </a>
            <p class="trustpilot-static__stats"><strong>4.7</strong> out of 5 based on <strong>10,000+</strong> reviews</p>
        </div>

        <section class="search-locations">
            <h2 class="search-locations__heading heading">Looking in Nigeria?</h2>
            <div class="search-locations__options">
                <div class="search-locations__option">
                    <b>Search by: </b>
                    <div class="search-locations__link-wrap">
                        <a href="{{ route('searchByCommuteTime') }}" title="Search Nigeria by commute time" class="search-locations__link">Commute time</a>
                        <a href="{{ route('searchByTravelZone') }}" title="Search Nigeria by travel zone" class="search-locations__link">Travel zone</a>
                        <a href="{{ route('searchByTubeLine') }}" title="Search Nigeria by tube line">Tube line</a>
                    </div>
                </div>
                <div class="search-locations__option">
                    <b>Or try our: </b>
                    <div class="search-locations__link-wrap">
                        <a href="{{ route('flatshare.whereToLiveWizard') }}" title="Find the right place to live based on criteria that is important to you">Where to Live Wizard</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="tube-ad-wrapper" id="tubead">
            <a href="{{ route('earn') }}" class="tube-ad__link">
                <div class="tube-ad">
                    <div class="tube-ad__heading">
                        <img src="/fonts/tube_camp_main_text.svg" class="svg tube_camp_main_text" alt="Tube campaign">
                    </div>
                    <div class="button button--primary tube-ad__button">Find out more</div>
                </div>
            </a>
        </section>

        <section class="features">
            <h2 class="heading">Why use SpareRoom?</h2>
            <div class="features__container">
                <div class="features__feature">
                    <img src="/fonts/EveryThreeMins.svg" class="features__image" width="102" height="102" alt="We're the busiest">
                    <h3 class="features__title">We're the busiest</h3>
                    <p class="features__body">Every 3 minutes someone finds a flatmate on SpareRoom. With the biggest selection
                        of ads, you'll find yours.</p>
                </div>
                <div class="features__feature">
                    <img src="/fonts/Keys.svg" class="features__image" width="155" height="102" alt="Safety">
                    <h3 class="features__title">Safety</h3>
                    <p class="features__body">Your safety is our top priority. We have a team of moderators working 7 days a
                        week to check ads and content.</p>
                </div>
                <div class="features__feature">
                    <img src="/fonts/Welcome.svg" class="features__image" width="192" height="102" alt="We're all about people">
                    <h3 class="features__title">We're all about people</h3>
                    <p class="features__body">Everyone's idea of the perfect housemate is different, so search based on what's
                        important to you.</p>
                </div>
            </div>
        </section>

        <section class="place-ad">
            <div class="place-ad__options">
                <div class="place-ad__option">
                    <h2 class="heading place-ad__heading">Need a room?</h2>
                    <p class="place-ad__text">Post a free Room Wanted ad and make sure people with rooms can find you.</p>
                    <div>
                        <a class="button button--large" id="wantedButton" href="{{ route('wantedListingStep1') }}">Advertise for free</a>
                    </div>
                </div>
                <div class="place-ad__option">
                    <h2 class="heading place-ad__heading">Got a room to let?</h2>
                    <p class="place-ad__text">Post a free ad and rent your room in days.
                        <br>
                        <a id="findOutMore" href="{{ route('listingOptions') }}">Find out more</a>
                    </p>
                    <div>
                        <a class="button button--large" id="offeredButton" href="{{ route('flatshare.findPostcode3', ['desc' => 'Free Advert', 'amount' => '0']) }}">
                            Post a free ad
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="as-featured-by" data-id="asFeaturedBy">
            <h3 class="as-featured-by__heading heading">As featured by</h3>
            <div class="as-featured-by__logos">
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/theGuardian.svg" class="svg theGuardian" alt="The Guardian" width="105" height="35">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/buzzfeed.svg" class="svg buzzfeed" alt="Buzzfeed" width="143" height="26">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/BBC.svg" class="svg BBC" alt="BBC" width="105" height="31">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/metro.svg" class="svg metro" alt="Metro" width="102" height="31">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/channel4.svg" class="svg channel4" alt="Channel 4" width="32" height="41">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/timeOut.svg" class="svg timeOut" alt="Time Out" width="87" height="41">
                </div>
                <div class="as-featured-by__logo-container">
                    <img src="/fonts/refinery29.svg" class="svg refinery29" alt="Refinery 29" width="80" height="51">
                </div>
            </div>
        </section>

        <section class="promos">
            <h3 class="sr-only">Promotions</h3>
            <div class="promos__promo">
                <a class="promos__heading promos__heading--with-logo" href="https://www.speedflatmating.co.uk/" title="The original flatmate finding event">
                    <img src="/fonts/SpeedFlatmating_blue.svg" class="svg SpeedFlatmating_blue" alt="Speed Flat Mating" width="269" height="30"> </a>
                <p class="promos__body">
                    Find a room or meet potential flatmates face to face. Events held every week in Nigeria and Manchester.
                    <a class="promos__link" href="https://www.speedflatmating.co.uk" title="The original flatmate finding event">Find out more</a>
                </p>
            </div>
            <div class="promos__promo">
                <a class="promos__heading" href="https://blog.spareroom.co.uk/spareroom-crisis/">
                    <img src="/images/crisis.png" alt class="promos__heading-logo-crisis" width="166" height="80">
                    <span class="sr-only">Crisis. Together we will end homelessness</span>
                </a>
                <p class="promos__body">We’re proud to partner with Crisis and support their work to end homelessness.
                    <a class="promos__link" href="https://blog.spareroom.co.uk/spareroom-crisis/" title="Our partnership with Crisis">Find out more</a>
                </p>
            </div>
            <div class="promos__promo">
                <a class="promos__heading promos__heading--with-logo" href="{{ route('liveRentFree') }}" title="A chance to live rent free for a month">
                    <img src="/fonts/LiveRentFree.svg" class="svg LiveRentFree" alt="LiveRentFree" width="255" height="30"> </a>
                <p class="promos__body">Enter for the chance to win a month's rent. Held every month.
                    <a class="promos__link" href="{{ route('liveRentFree') }}" title="A chance to live rent free for a month">Find out
                        more</a>
                </p>
            </div>
        </section>
    </div>
</main>
@endsection

@section('js')
<script src="/js/home.4b8f2423631b37c2ade9.js" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGKluQknDjjGQpfx9btogz9wH_hW-sbsY&v=3.exp&sensor=false&callback=initialize"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get location
        var getAddressButton = document.getElementById('getAddress');
        var searchByLocationField = document.getElementById('search_by_location_field');

        getAddressButton.addEventListener('click', function() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var lat = position.coords.latitude;
                    var lng = position.coords.longitude;
                    var geocoder = new google.maps.Geocoder();
                    var latlng = new google.maps.LatLng(lat, lng);

                    // Get location by latlng
                    geocoder.geocode({
                        'latLng': latlng
                    }, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            if (results[0]) {
                                console.log(results[0]);
                                var address = results[0].formatted_address;
                                searchByLocationField.value = address;
                            }
                        }
                    });
                });
            }
        });

        // Search by location
        var searchByLocationField = document.getElementById('search_by_location_field');
        var searchByLocationSubmitButton = document.getElementById('search_by_location_submit_button');
        var searchByLocationForm = document.getElementById('searchForm');

        searchByLocationField.addEventListener('input', function() {
            var value = this.value;
            var hiddenSearch = document.getElementById('hidden_search');

            hiddenSearch.value = value;
        });

        searchByLocationForm.addEventListener('submit', function() {
            var value = searchByLocationField.value;
            var hiddenSearch = document.getElementById('hidden_search');

            hiddenSearch.value = value;
        });
    });
</script>
@endsection
