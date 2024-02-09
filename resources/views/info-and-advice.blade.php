@extends('layouts.app')

@section('title', 'Info & Advice Overview')

@section('body-id', 'SUBPAGEinfooverview')
@section('body-class', 'PAGEinfoadvice')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Info & Advice Overview</h1>
        </div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
        <aside>
            <form action="{{ route('flatshare.search') }}" method="GET" id="filterForm" name="search-filter" class="search-widget-form" data-search-form>
                <section id="searchWidget" class="panel panel-header-closed search-widget panel-standard">
                    <header>
                        <h3 id="search-for-title">Search</h3>
                    </header>
                    <div data-widget="search">
                        <input type="hidden" name="action" value="search">
                        <input type="hidden" name="max_per_page" value>
                        <div role="group" aria-labelledby="search-for-title">
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input type="radio" name="flatshare_type" CHECKED value="offered" id="flatshare_type-offered" checked>
                                <label title="Rooms in existing shares" for="flatshare_type-offered">
                                    Rooms for Rent </label>
                            </div>
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input id="flatshare_type-wanted" type="radio" name="flatshare_type" value="wanted" class="radiobuttons">
                                <label title="Potential flatmates and tenants seeking accommodation" for="flatshare_type-wanted">
                                    Rooms Wanted
                                </label>
                            </div>
                            <div class="form-group__radio form-group__radio--white-bg">
                                <input id="flatshare_type-buddyup" type="radio" name="flatshare_type" value="buddyup" class="radiobuttons">
                                <label title="Find others seeking accommodation to form a new flatshare" for="flatshare_type-buddyup">
                                    Buddy ups
                                    <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Find potential buddy ups to share this property
                                                with <a href="buddyups.html" title="Find out more about BuddyUps">Find out more
                                                    &raquo;</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span> </label>
                            </div>
                        </div>
                        <div class="search-widget__location-fields">
                            <div class="form-group autocomplete__wrapper">
                                <label class="search-widget__location-label" for="search_by_location_field">Search location</label>
                                <input class="form-group__input form-group__input--wide" type="text" name="search-display-name" value id="search_by_location_field" onFocus="if(this.value=='(e.g.Greenwich)'){this.value='';}" pattern=".*" required data-store-search-text autocomplete="off">
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
        </aside>
        <div id="maincontent">
            <p></p>
            <ul>
                <li><a class="hasVisitedState" href="advice-flatsharers.html"><b>Sharers &amp; Tenants</b></a></li>
                <li><a class="hasVisitedState" href="advice-landlord.html"><b>Landlords</b></a></li>
                <li><a class="hasVisitedState" href="advice-landlord.html#LILs"><b>Homeowners / Live in Landlords</b></a></li>
                <li><a href="flatsharing-faq.html">Flatsharing FAQ</a></li>
                <li><a href="faq.html">SpareRoom FAQ</a></li>
                <li><a class="hasVisitedState" href="glossary-of-terms_1.html">Glossary of terms</a></li>
            </ul>
            <p></p>
            <p></p>

        </div>
        <aside>


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
<script src="/js/e0c43c978ea516935f9ded8af409ac54.js"></script>
@endsection
