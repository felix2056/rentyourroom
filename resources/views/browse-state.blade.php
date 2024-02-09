@extends('layouts.app')

@section('title', 'Rooms for rent in Flat &amp; house shares Nigeria wide')

@section('body-id', '')
@section('body-class', 'PAGEbrowse')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<style>
    /* overide padding right of table cells (not sure why thats there!) */
    th,
    td {
        padding-right: 0em
    }
</style>
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Rooms for rent in Nigeria</h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-4-8-4">
        <aside>
            <form action="{{ route('flatshare.search') }}" method="GET" id="filterForm" name="search-filter"
                class="search-widget-form" data-search-form>
                <section id="searchWidget" class="panel panel-header-closed search-widget panel-standard">
                    <header>
                        <h3 id="search-for-title">Search</h3>
                    </header>
                    <div data-widget="search">
                        <input type="hidden" name="action" value="search">
                        <input type="hidden" name="max_per_page" value>
                        <div role="group" aria-labelledby="search-for-title">
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input type="radio" name="flatshare_type" value="offered"
                                    id="flatshare_type-offered" checked>
                                <label title="Rooms in existing shares" for="flatshare_type-offered">
                                    Rooms for Rent </label>
                            </div>
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input id="flatshare_type-wanted" type="radio" name="flatshare_type" value="wanted"
                                    class="radiobuttons">
                                <label title="Potential flatmates and tenants seeking accommodation"
                                    for="flatshare_type-wanted">
                                    Rooms Wanted
                                </label>
                            </div>
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input id="flatshare_type-buddyup" type="radio" name="flatshare_type"
                                    value="buddyup" class="radiobuttons">
                                <label title="Find others seeking accommodation to form a new flatshare"
                                    for="flatshare_type-buddyup">
                                    Buddy ups
                                    <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i
                                            class="fas fa-info-circle"></i><span class="tooltip_box"><span
                                                class="tooltip_text">Find potential buddy ups to share this property
                                                with <a href="buddyups.html"
                                                    title="Find out more about BuddyUps">Find out more
                                                    &raquo;</a></span><span
                                                class="tooltip_arrow">&nbsp;</span></span><span
                                            class="tooltip_background" tabindex="-1"></span></span> </label>
                            </div>
                        </div>
                        <div class="search-widget__location-fields">
                            <div class="form-group autocomplete__wrapper">
                                <label class="search-widget__location-label" for="search_by_location_field">Search
                                    location</label>
                                <input class="form-group__input form-group__input--wide" type="text"
                                    name="search-display-name" value id="search_by_location_field"
                                    onFocus="if(this.value=='(e.g.Greenwich)'){this.value='';}" pattern=".*"
                                    required data-store-search-text autocomplete="off">
                                <input type="hidden" id="hidden_search" name="search" value>
                            </div>
                        </div>

                        <input id="submitButton" type="submit" class="button button--wide" value="Search">
                        <div class="search-widget__advanced-search-link">
                            <a href="{{ route('flatshare.search') }}">Advanced search</a>
                        </div>

                    </div>
                </section>


            </form>





            <div class="block block_standard" id="findbox">
                <div class="block_header">
                    <h3>Find an ad</h3>
                </div>
                <form action="/flatshare/propertyref.pl" method="GET" class="block_content">
                    <div class="advert-ref-search">
                        <label class="advert-ref-search__label" for="findid">Ad ref#</label>
                        <input aria-label="Search using advert reference" type="text" class="textbox"
                            name="advert_id" id="findid"><button class="button button--secondary"
                            type="Submit">Go</button>
                    </div>
                </form>
            </div>


        </aside>
        <div id="maincontent" class="grid-4">

            <div>
                <h2 class="countryheader">England</h2>
                <h3><a href="birmingham.html">Birmingham flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="birmingham_4.html">
                            1,693
                            rooms to rent in
                            1,109
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="birmingham_6.html">
                            961
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h3><a href="bristol.html">Bristol flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="bristol_5.html">
                            1,155
                            rooms to rent in
                            937
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="bristol_4.html">
                            1,283
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h3><a href="leeds.html">Leeds flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="leeds_5.html">
                            1,101
                            rooms to rent in
                            784
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="leeds_6.html">
                            577
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h3><a href="london.html">Nigeria flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="london_4.html">
                            15,412
                            rooms to rent in
                            12,697
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="london_1.html">
                            13,781
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <ul class="bulletlist">
                    <li><a href="central_london_2.html">Central London</a>
                        <ul>

                            <li>
                                <a href="central_london_2.html">
                                    7,475
                                    rooms to rent in
                                    6,024
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="central_london_1.html">
                                    11,992
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="east_london_2.html">East London</a>
                        <ul>

                            <li>
                                <a href="east_london_2.html">
                                    3,687
                                    rooms to rent in
                                    3,088
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="east_london_1.html">
                                    8,356
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="north_london_1.html">North London</a>
                        <ul>

                            <li>
                                <a href="north_london_1.html">
                                    2,097
                                    rooms to rent in
                                    1,747
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="north_london_2.html">
                                    8,004
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="north_west_london_1.html">North West London</a>
                        <ul>

                            <li>
                                <a href="north_west_london_1.html">
                                    1,752
                                    rooms to rent in
                                    1,377
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="north_west_london_2.html">
                                    7,927
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="south_east_london_1.html">South East London</a>
                        <ul>

                            <li>
                                <a href="south_east_london_1.html">
                                    2,674
                                    rooms to rent in
                                    2,171
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="south_east_london.html">
                                    9,636
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="south_west_london_1.html">South West London</a>
                        <ul>

                            <li>
                                <a href="south_west_london_1.html">
                                    3,180
                                    rooms to rent in
                                    2,642
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="south_west_london.html">
                                    8,901
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="west_london_2.html">West London</a>
                        <ul>

                            <li>
                                <a href="west_london_2.html">
                                    1,644
                                    rooms to rent in
                                    1,377
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="west_london_1.html">
                                    7,809
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <h3><a href="manchester.html">Manchester flatshare</a></h3>
                <ul class="bulletlist">
                    <li><a href="bolton_2.html">Bolton</a>
                        <ul>

                            <li>
                                <a href="bolton.html">
                                    109
                                    rooms to rent in
                                    70
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="bolton_1.html">
                                    339
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="manchester.html">Manchester</a>
                        <ul>

                            <li>
                                <a href="manchester_4.html">
                                    864
                                    rooms to rent in
                                    652
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="manchester_6.html">
                                    2,096
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="oldham_1.html">Oldham</a>
                        <ul>

                            <li>
                                <a href="oldham.html">
                                    72
                                    rooms to rent in
                                    51
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="oldham_2.html">
                                    282
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="stockport_1.html">Stockport</a>
                        <ul>

                            <li>
                                <a href="stockport_2.html">
                                    100
                                    rooms to rent in
                                    71
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="stockport.html">
                                    428
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="warrington_2.html">Warrington</a>
                        <ul>

                            <li>
                                <a href="warrington_1.html">
                                    58
                                    rooms to rent in
                                    43
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="warrington.html">
                                    284
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="wigan.html">Wigan</a>
                        <ul>

                            <li>
                                <a href="wigan_2.html">
                                    55
                                    rooms to rent in
                                    42
                                    flatshares &amp; house shares
                                </a>
                            </li>
                            <li>
                                <a href="wigan_1.html">
                                    217
                                    flatmates / roommates
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <h4><a href="bath.html">Bath</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="bath_2.html">
                            201
                            rooms to rent in
                            158
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="bath_1.html">
                            194
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="blackburn_2.html">Blackburn</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="blackburn.html">
                            21
                            rooms to rent in
                            19
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="blackburn_1.html">
                            55
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="blackpool_2.html">Blackpool</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="blackpool.html">
                            98
                            rooms to rent in
                            72
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="blackpool_1.html">
                            80
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="bournemouth_3.html">Bournemouth</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="bournemouth_2.html">
                            337
                            rooms to rent in
                            274
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="bournemouth_1.html">
                            304
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="bradford.html">Bradford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="bradford_1.html">
                            88
                            rooms to rent in
                            60
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="bradford_2.html">
                            124
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="brighton.html">Brighton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="brighton_3.html">
                            468
                            rooms to rent in
                            402
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="brighton_4.html">
                            606
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="bromley_1.html">Bromley</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="bromley.html">
                            126
                            rooms to rent in
                            98
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="bromley_2.html">
                            683
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="cambridge.html">Cambridge</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="cambridge_2.html">
                            488
                            rooms to rent in
                            394
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="cambridge_3.html">
                            600
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="canterbury_1.html">Canterbury</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="canterbury_3.html">
                            220
                            rooms to rent in
                            141
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="canterbury_2.html">
                            139
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="carlisle_1.html">Carlisle</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="carlisle_2.html">
                            56
                            rooms to rent in
                            32
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="carlisle.html">
                            45
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="chelmsford.html">Chelmsford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="chelmsford_2.html">
                            73
                            rooms to rent in
                            65
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="chelmsford_1.html">
                            231
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="chester_2.html">Chester</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="chester_3.html">
                            90
                            rooms to rent in
                            74
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="chester_1.html">
                            187
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="cleveland_1.html">Cleveland</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="cleveland_1.html">
                            407
                            rooms to rent in
                            189
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="cleveland.html">
                            182
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="colchester_2.html">Colchester</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="colchester_1.html">
                            181
                            rooms to rent in
                            141
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="colchester.html">
                            203
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="coventry_2.html">Coventry</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="coventry_1.html">
                            961
                            rooms to rent in
                            510
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="coventry.html">
                            363
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="crewe_1.html">Crewe</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="crewe.html">
                            65
                            rooms to rent in
                            54
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="crewe_2.html">
                            78
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="croydon_2.html">Croydon</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="croydon_1.html">
                            261
                            rooms to rent in
                            207
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="croydon.html">
                            790
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="darlington_2.html">Darlington</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="darlington_1.html">
                            116
                            rooms to rent in
                            58
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="darlington.html">
                            58
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="dartford_2.html">Dartford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="dartford_1.html">
                            92
                            rooms to rent in
                            65
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="dartford.html">
                            579
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="derby_1.html">Derby</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="derby.html">
                            488
                            rooms to rent in
                            305
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="derby_2.html">
                            165
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="doncaster.html">Doncaster</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="doncaster_1.html">
                            256
                            rooms to rent in
                            142
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="doncaster_2.html">
                            94
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="dorchester_1.html">Dorchester</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="dorchester_2.html">
                            13
                            rooms to rent in
                            13
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="dorchester.html">
                            48
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="dudley_1.html">Dudley</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="dudley.html">
                            38
                            rooms to rent in
                            27
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="dudley_2.html">
                            147
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="durham_2.html">Durham</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="durham_1.html">
                            84
                            rooms to rent in
                            56
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="durham.html">
                            64
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="enfield_1.html">Enfield</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="enfield_2.html">
                            79
                            rooms to rent in
                            60
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="enfield.html">
                            603
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="exeter.html">Exeter</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="exeter_2.html">
                            458
                            rooms to rent in
                            249
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="exeter_1.html">
                            178
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="gloucester_2.html">Gloucester</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="gloucester.html">
                            102
                            rooms to rent in
                            88
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="gloucester_1.html">
                            164
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="guernsey_1.html">Guernsey</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="guernsey_2.html">
                            3
                            rooms to rent in
                            3
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="guernsey.html">
                            6
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="guildford_2.html">Guildford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="guildford_1.html">
                            141
                            rooms to rent in
                            110
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="guildford.html">
                            232
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="halifax_1.html">Halifax</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="halifax_2.html">
                            42
                            rooms to rent in
                            28
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="halifax.html">
                            45
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="harrogate.html">Harrogate</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="harrogate_2.html">
                            39
                            rooms to rent in
                            30
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="harrogate_1.html">
                            67
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="harrow.html">Harrow</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="harrow_2.html">
                            318
                            rooms to rent in
                            251
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="harrow_1.html">
                            832
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="hemel_hempstead_2.html">Hemel Hempstead</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="hemel_hempstead_1.html">
                            64
                            rooms to rent in
                            50
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="hemel_hempstead.html">
                            138
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="hereford.html">Hereford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="hereford_2.html">
                            56
                            rooms to rent in
                            44
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="hereford_1.html">
                            52
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="huddersfield.html">Huddersfield</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="huddersfield_2.html">
                            145
                            rooms to rent in
                            75
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="huddersfield_1.html">
                            85
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="hull_2.html">Hull</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="hull_1.html">
                            311
                            rooms to rent in
                            175
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="hull.html">
                            104
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="ilford_2.html">Ilford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="ilford_1.html">
                            346
                            rooms to rent in
                            275
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="ilford.html">
                            806
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="ipswich_1.html">Ipswich</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="ipswich.html">
                            118
                            rooms to rent in
                            88
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="ipswich_2.html">
                            115
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="isle_of_man_1.html">Isle Of Man</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="isle_of_man_1.html">
                            5
                            rooms to rent in
                            5
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="isle_of_man.html">
                            25
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="kingston_upon_thames_2.html">Kingston Upon Thames</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="kingston_upon_thames_1.html">
                            98
                            rooms to rent in
                            88
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="kingston_upon_thames.html">
                            845
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="lancaster_1.html">Lancaster</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="lancaster_2.html">
                            114
                            rooms to rent in
                            67
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="lancaster.html">
                            78
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="leicester_2.html">Leicester</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="leicester_3.html">
                            681
                            rooms to rent in
                            370
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="leicester_1.html">
                            326
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="lincoln.html">Lincoln</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="lincoln_2.html">
                            360
                            rooms to rent in
                            193
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="lincoln_1.html">
                            88
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="liverpool_1.html">Liverpool</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="liverpool_2.html">
                            1,011
                            rooms to rent in
                            592
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="liverpool_3.html">
                            516
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="luton.html">Luton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="luton_2.html">
                            202
                            rooms to rent in
                            159
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="luton_1.html">
                            323
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="milton_keynes.html">Milton Keynes</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="milton_keynes_1.html">
                            261
                            rooms to rent in
                            215
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="milton_keynes_2.html">
                            376
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="newcastle_upon_tyne_2.html">Newcastle Upon Tyne</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="newcastle_upon_tyne.html">
                            376
                            rooms to rent in
                            304
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="newcastle_upon_tyne_1.html">
                            358
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="northampton.html">Northampton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="northampton_2.html">
                            253
                            rooms to rent in
                            174
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="northampton_3.html">
                            261
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="norwich_2.html">Norwich</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="norwich_3.html">
                            375
                            rooms to rent in
                            265
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="norwich_1.html">
                            228
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="nottingham_1.html">Nottingham</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="nottingham_3.html">
                            1,310
                            rooms to rent in
                            744
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="nottingham_2.html">
                            490
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="oxford.html">Oxford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="oxford_2.html">
                            410
                            rooms to rent in
                            316
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="oxford_1.html">
                            502
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="peterborough_2.html">Peterborough</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="peterborough_1.html">
                            181
                            rooms to rent in
                            145
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="peterborough.html">
                            196
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="plymouth_3.html">Plymouth</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="plymouth_1.html">
                            231
                            rooms to rent in
                            174
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="plymouth_2.html">
                            197
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="portsmouth_3.html">Portsmouth</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="portsmouth_1.html">
                            191
                            rooms to rent in
                            121
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="portsmouth_2.html">
                            191
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="preston.html">Preston</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="preston_2.html">
                            235
                            rooms to rent in
                            143
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="preston_1.html">
                            125
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="reading_2.html">Reading</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="reading.html">
                            420
                            rooms to rent in
                            332
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="reading_1.html">
                            385
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="redhill_2.html">Redhill</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="redhill_1.html">
                            46
                            rooms to rent in
                            40
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="redhill.html">
                            128
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="romford.html">Romford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="romford_1.html">
                            201
                            rooms to rent in
                            174
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="romford_2.html">
                            691
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="salisbury_1.html">Salisbury</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="salisbury.html">
                            37
                            rooms to rent in
                            36
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="salisbury_2.html">
                            84
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="sheffield_1.html">Sheffield</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="sheffield_3.html">
                            592
                            rooms to rent in
                            434
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="sheffield_2.html">
                            327
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="slough_2.html">Slough</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="slough_1.html">
                            214
                            rooms to rent in
                            154
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="slough.html">
                            196
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="southall.html">Southall</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="southall_1.html">
                            69
                            rooms to rent in
                            58
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="southall_2.html">
                            546
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="southampton_1.html">Southampton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="southampton.html">
                            422
                            rooms to rent in
                            328
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="southampton_2.html">
                            416
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="southend-on-sea_1.html">Southend-On-Sea</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="southend-on-sea_2.html">
                            92
                            rooms to rent in
                            47
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="southend-on-sea.html">
                            148
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="st_2._albans">St. Albans</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="st_1._albans">
                            69
                            rooms to rent in
                            52
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="st._albans">
                            219
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="stevenage.html">Stevenage</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="stevenage_1.html">
                            59
                            rooms to rent in
                            49
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="stevenage_2.html">
                            168
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="stoke-on-trent_1.html">Stoke-On-Trent</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="stoke-on-trent_2.html">
                            405
                            rooms to rent in
                            177
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="stoke-on-trent.html">
                            138
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="sunderland.html">Sunderland</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="sunderland_1.html">
                            58
                            rooms to rent in
                            35
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="sunderland_2.html">
                            103
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="sutton_1.html">Sutton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="sutton.html">
                            86
                            rooms to rent in
                            73
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="sutton_2.html">
                            631
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="swindon.html">Swindon</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="swindon_1.html">
                            176
                            rooms to rent in
                            143
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="swindon_2.html">
                            126
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="taunton.html">Taunton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="taunton_1.html">
                            64
                            rooms to rent in
                            54
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="taunton_2.html">
                            88
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="telford_1.html">Telford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="telford.html">
                            63
                            rooms to rent in
                            49
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="telford_2.html">
                            77
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="tonbridge_1.html">Tonbridge</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="tonbridge.html">
                            24
                            rooms to rent in
                            21
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="tonbridge_2.html">
                            75
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="torquay_1.html">Torquay</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="torquay_2.html">
                            60
                            rooms to rent in
                            50
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="torquay.html">
                            34
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="truro_2.html">Truro</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="truro.html">
                            33
                            rooms to rent in
                            30
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="truro_1.html">
                            108
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="twickenham_1.html">Twickenham</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="twickenham.html">
                            44
                            rooms to rent in
                            40
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="twickenham_2.html">
                            634
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="wakefield_2.html">Wakefield</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="wakefield_1.html">
                            52
                            rooms to rent in
                            37
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="wakefield.html">
                            102
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="walsall_2.html">Walsall</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="walsall_1.html">
                            41
                            rooms to rent in
                            38
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="walsall.html">
                            170
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="watford_1.html">Watford</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="watford_2.html">
                            163
                            rooms to rent in
                            140
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="watford.html">
                            215
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="wolverhampton_2.html">Wolverhampton</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="wolverhampton_1.html">
                            87
                            rooms to rent in
                            64
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="wolverhampton.html">
                            248
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="worcester_1.html">Worcester</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="worcester_2.html">
                            226
                            rooms to rent in
                            95
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="worcester.html">
                            76
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="york.html">York</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="york_1.html">
                            239
                            rooms to rent in
                            186
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="york_2.html">
                            216
                            flatmates / roommates
                        </a>
                    </li>

                </ul>

            </div>

            <div>
                <h2 class="countryheader">Northern Ireland</h2>
                <h4><a href="belfast.html">Belfast</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="belfast_2.html">
                            276
                            rooms to rent in
                            217
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="belfast_1.html">
                            253
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h2 class="countryheader">Scotland</h2>
                <h3><a href="edinburgh.html">Edinburgh flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="edinburgh_5.html">
                            632
                            rooms to rent in
                            556
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="edinburgh_6.html">
                            690
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h3><a href="glasgow.html">Glasgow flatshare</a></h3>
                <ul class="bulletlist">

                    <li>
                        <a href="glasgow_5.html">
                            718
                            rooms to rent in
                            626
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="glasgow_4.html">
                            695
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="aberdeen_3.html">Aberdeen</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="aberdeen_1.html">
                            169
                            rooms to rent in
                            128
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="aberdeen_2.html">
                            131
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="dumfries_1.html">Dumfries</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="dumfries_2.html">
                            16
                            rooms to rent in
                            12
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="dumfries.html">
                            11
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="dundee_3.html">Dundee</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="dundee_2.html">
                            111
                            rooms to rent in
                            96
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="dundee_1.html">
                            112
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="falkirk_1.html">Falkirk</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="falkirk_2.html">
                            12
                            rooms to rent in
                            9
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="falkirk.html">
                            36
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="galashiels_2.html">Galashiels</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="galashiels.html">
                            3
                            rooms to rent in
                            3
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="galashiels_1.html">
                            7
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="inverness_2.html">Inverness</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="inverness_1.html">
                            45
                            rooms to rent in
                            39
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="inverness.html">
                            52
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="kilmarnock.html">Kilmarnock</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="kilmarnock_1.html">
                            6
                            rooms to rent in
                            5
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="kilmarnock_2.html">
                            13
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="kirkcaldy.html">Kirkcaldy</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="kirkcaldy_1.html">
                            3
                            rooms to rent in
                            3
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="kirkcaldy_2.html">
                            19
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="motherwell.html">Motherwell</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="motherwell_2.html">
                            6
                            rooms to rent in
                            6
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="motherwell_1.html">
                            13
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="paisley_2.html">Paisley</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="paisley.html">
                            31
                            rooms to rent in
                            26
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="paisley_1.html">
                            42
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="perth.html">Perth</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="perth_1.html">
                            22
                            rooms to rent in
                            19
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="perth_2.html">
                            21
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h2 class="countryheader">Wales</h2>
                <h4><a href="cardiff.html">Cardiff</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="cardiff_3.html">
                            392
                            rooms to rent in
                            303
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="cardiff_4.html">
                            475
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h5><a href="llandudno_2.html">Llandudno</a></h5>
                <ul class="bulletlist">

                    <li>
                        <a href="llandudno_1.html">
                            18
                            rooms to rent in
                            13
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="llandudno.html">
                            30
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="newport.html">Newport</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="newport_2.html">
                            77
                            rooms to rent in
                            67
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="newport_1.html">
                            127
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="shrewsbury_2.html">Shrewsbury</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="shrewsbury_1.html">
                            42
                            rooms to rent in
                            38
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="shrewsbury.html">
                            71
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h4><a href="swansea_2.html">Swansea</a></h4>
                <ul class="bulletlist">

                    <li>
                        <a href="swansea_1.html">
                            290
                            rooms to rent in
                            156
                            flatshares &amp; house shares
                        </a>
                    </li>
                    <li>
                        <a href="swansea.html">
                            155
                            flatmates / roommates
                        </a>
                    </li>

                </ul>
                <h2 class="countryheader">States in Nigeria</h2>
                <ul class="bulletlist">
                    <li><a href="{{ route('browse.state', 'abuja') }}" title="Abuja flatshare house share and flatmates">Abuja</a></li>
                    <li><a href="{{ route('browse.state', 'abia') }}" title="Abia flatshare house share and flatmates">Abia</a></li>
                    <li><a href="{{ route('browse.state', 'adamawa') }}" title="Adamawa flatshare house share and flatmates">Adamawa</a></li>
                    <li><a href="{{ route('browse.state', 'akwa-ibom') }}" title="Akwa Ibom flatshare house share and flatmates">Akwa Ibom</a></li>
                    <li><a href="{{ route('browse.state', 'anambra') }}" title="Anambra flatshare house share and flatmates">Anambra</a></li>
                    <li><a href="{{ route('browse.state', 'bauchi') }}" title="Bauchi flatshare house share and flatmates">Bauchi</a></li>
                    <li><a href="{{ route('browse.state', 'bayelsa') }}" title="Bayelsa flatshare house share and flatmates">Bayelsa</a></li>
                    <li><a href="{{ route('browse.state', 'benue') }}" title="Benue flatshare house share and flatmates">Benue</a></li>
                    <li><a href="{{ route('browse.state', 'borno') }}" title="Borno flatshare house share and flatmates">Borno</a></li>
                    <li><a href="{{ route('browse.state', 'cross-river') }}" title="Cross River flatshare house share and flatmates">Cross River</a></li>
                    <li><a href="{{ route('browse.state', 'delta') }}" title="Delta flatshare house share and flatmates">Delta</a></li>
                    <li><a href="{{ route('browse.state', 'ebonyi') }}" title="Ebonyi flatshare house share and flatmates">Ebonyi</a></li>
                    <li><a href="{{ route('browse.state', 'edo') }}" title="Edo flatshare house share and flatmates">Edo</a></li>
                    <li><a href="{{ route('browse.state', 'ekiti') }}" title="Ekiti flatshare house share and flatmates">Ekiti</a></li>
                    <li><a href="{{ route('browse.state', 'enugu') }}" title="Enugu flatshare house share and flatmates">Enugu</a></li>
                    <li><a href="{{ route('browse.state', 'gombe') }}" title="Gombe flatshare house share and flatmates">Gombe</a></li>
                    <li><a href="{{ route('browse.state', 'imo') }}" title="Imo flatshare house share and flatmates">Imo</a></li>
                    <li><a href="{{ route('browse.state', 'jigawa') }}" title="Jigawa flatshare house share and flatmates">Jigawa</a></li>
                    <li><a href="{{ route('browse.state', 'kaduna') }}" title="Kaduna flatshare house share and flatmates">Kaduna</a></li>
                    <li><a href="{{ route('browse.state', 'kano') }}" title="Kano flatshare house share and flatmates">Kano</a></li>
                    <li><a href="{{ route('browse.state', 'katsina') }}" title="Katsina flatshare house share and flatmates">Katsina</a></li>
                    <li><a href="{{ route('browse.state', 'kebbi') }}" title="Kebbi flatshare house share and flatmates">Kebbi</a></li>
                    <li><a href="{{ route('browse.state', 'kogi') }}" title="Kogi flatshare house share and flatmates">Kogi</a></li>
                    <li><a href="{{ route('browse.state', 'kwara') }}" title="Kwara flatshare house share and flatmates">Kwara</a></li>
                    <li><a href="{{ route('browse.state', 'lagos') }}" title="Lagos flatshare house share and flatmates">Lagos</a></li>
                    <li><a href="{{ route('browse.state', 'nasarawa') }}" title="Nasarawa flatshare house share and flatmates">Nasarawa</a></li>
                    <li><a href="{{ route('browse.state', 'niger') }}" title="Niger flatshare house share and flatmates">Niger</a></li>
                    <li><a href="{{ route('browse.state', 'ogun') }}" title="Ogun flatshare house share and flatmates">Ogun</a></li>
                    <li><a href="{{ route('browse.state', 'ondo') }}" title="Ondo flatshare house share and flatmates">Ondo</a></li>
                    <li><a href="{{ route('browse.state', 'osun') }}" title="Osun flatshare house share and flatmates">Osun</a></li>
                    <li><a href="{{ route('browse.state', 'oyo') }}" title="Oyo flatshare house share and flatmates">Oyo</a></li>
                    <li><a href="{{ route('browse.state', 'plateau') }}" title="Plateau flatshare house share and flatmates">Plateau</a></li>
                    <li><a href="{{ route('browse.state', 'rivers') }}" title="Rivers flatshare house share and flatmates">Rivers</a></li>
                    <li><a href="{{ route('browse.state', 'sokoto') }}" title="Sokoto flatshare house share and flatmates">Sokoto</a></li>
                    <li><a href="{{ route('browse.state', 'taraba') }}" title="Taraba flatshare house share and flatmates">Taraba</a></li>
                    <li><a href="{{ route('browse.state', 'yobe') }}" title="Yobe flatshare house share and flatmates">Yobe</a></li>
                    <li><a href="{{ route('browse.state', 'zamfara') }}" title="Zamfara flatshare house share and flatmates">Zamfara</a></li>
                </ul>
                <h2 class="countryheader">Flatshares Worldwide
                    <h3><a href="https://www.spareroom.com" title="Rooms for Rent in the USA">United States</a></h3>
                    <ul>
                        <li><a href="https://www.spareroom.com/rooms-for-rent/new_york"
                                title="Rooms for Rent in New York, USA">Rooms for rent in New York</a></li>
                        <li><a href="https://www.spareroom.com/rooms-for-rent/san_francisco_bay_area"
                                title="Rooms for Rent in San Francisco, USA">Rooms for rent in San Francisco</a>
                        </li>
                        <li><a href="https://www.spareroom.com/rooms-for-rent/los_angeles"
                                title="Rooms for Rent in Los Angeles, USA">Rooms for rent in Los Angeles</a></li>
                        <li><a href="https://www.spareroom.com/roommates" title="Rooms for Rent in the US">Rooms for
                                rent in the rest of the US</a></li>
                    </ul>


                    <h3><a href="https://www.appartager.com" title="Colocation France">France</a></h3>
                    <ul>
                        <li><a href="https://www.appartager.com/colocations/paris"
                                title="Rooms for Rent in Paris">Colocation Paris</a></li>
                        <li><a href="https://www.appartager.com/colocations/lyon"
                                title="Rooms for Rent in Lyon">Colocation Lyon</a></li>
                        <li><a href="https://www.appartager.com" title="Rooms for Rent in France">Colocation
                                France</a></li>
                    </ul>
                </h2>
            </div>

        </div>
        <aside>

            <section>
                <h4>New to sharing?</h4>
                <ul>
                    <li><a href="flatsharing-faq.html">Why flatshare?</a></li>
                    <li><a href="rent-a-room-scheme.html">The <em>rent-a-room</em> scheme</a></li>
                    <li><a href="shared-house-contents-insurance.html">Shared home insurance</a></li>
                </ul>
            </section>
            <section>
                <h4>Help topics</h4>
                <ul>
                    <li><a href="how-the-site-works.html">What does

                            <img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1"
                                class="svg early_bird_icon " alt="Early bird" width="212" height="150"> mean?</a>
                    </li>
                </ul>
            </section>

            <section>
                <h4>Top flatsharing cities</h4>
                <ul>

                    <li><a href="london.html" title="Nigeria flatshare house share and flatmates">Nigeria</a></li>
                    <li><a href="birmingham_7.html"
                            title="Birmingham flatshare house share and flatmates">Birmingham</a></li>
                    <li><a href="bristol.html" title="Bristol flatshare house share and flatmates">Bristol</a></li>
                    <li><a href="leeds.html" title="Leeds flatshare house share and flatmates">Leeds</a></li>
                    <li><a href="manchester.html"
                            title="Manchester flatshare house share and flatmates">Manchester</a></li>
                    <li><a href="edinburgh.html" title="Edinburgh flatshare house share and flatmates">Edinburgh</a>
                    </li>
                    <li><a href="glasgow.html" title="Glasgow flatshare house share and flatmates">Glasgow</a></li>
                    <li><a href="{{ route('browse') }}" title="Nigeria flatshare house share and flatmates">Other Nigerian towns &amp;
                            cities</a></li>
                </ul>
            </section>

            <section class="panel panel-header-closed need-help">
                <header>
                    <h3>Need any help?</h3>
                </header>

                <div>
                    <ul class="need_help_contact">
                        <li><a href="faq.html">View our FAQs</a></li>
                        <li><a href="contact.pl" rel="nofollow">Contact us by email or phone</a></li>
                    </ul>

                    <!-- Start of spareroom Zendesk Widget script -->
                    <script id="ze-snippet" defer src="/js/snippet.js"> </script>
                    <!-- End of spareroom Zendesk Widget script -->
                </div>
            </section>
        </aside>
    </div>
</main>
@endsection

@section('js')

@endsection