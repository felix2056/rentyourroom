@extends('layouts.app')

@section('title', 'My account')

@section('body-id', 'SUBPAGEmyaccountoptions')
@section('body-class', 'PAGEmyaccount')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/my_account.22c53a23fdd7f54d04c8.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1> My account </h1>
        </div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
        <aside>







            <form action="{{ route('search') }}" method="GET" id="filterForm" name="search-filter" class="search-widget-form" data-search-form>
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
                            <a href="{{ route('search') }}">Advanced search</a>
                        </div>

                    </div>
                </section>


            </form>
        </aside>
        <div id="maincontent">

            <div class="login_link" id="loginLinkBox">
                <p>
                    To view this content you will need to either <a href="logon_8.pl" title="Please click here to log in">log
                        in</a> or <a href="reg_7.pl" title="Please click here to register">register</a>.
                </p>
            </div>



            <!--/is_loggedin-->
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



            <aside class="panel sfm_srm_box"><img src="/fonts/SpeedFlatmating_blue_1.svg" class="svg SpeedFlatmating_blue" alt="SpeedFlatmating logo">
                <p>Meet lots of potential flatmates in one go and see who you click with.</p><a class="button button--secondary" title="SpeedFlatmating" href="https://www.speedflatmating.co.uk">Book
                    now</a>
            </aside>


            <article class="panel liverentfree_box">
                <img src="/fonts/LiveRentFree.svg" class="svg LiveRentFree" alt="LiveRentFree logo">
                <p>Win a month's free rent, every month. Don't miss out!</p>
                <a class="button button--secondary" title="Live Rent Free" href="liverentfree.html">Read more</a>
            </article>
        </aside>
    </div>
</main>
@endsection

@section('js')
<script src="/js/e0c43c978ea516935f9ded8af409ac54.js"></script>
<script>
/* this needs to be button specific rather than page specific so removing for now: SR.settings.loginReturnPath = '/flatshare/search.pl?action=search&flatshare_type=offered&search=UK&max_degrees=3'; */
SR.facebookConnect.setSettings({
    passthrough: {
    update_connections: 0//disabling on-the-fly updating of connections
    }
})
</script>

<script src="/js/my_account.182763631f888597eb80.js"></script>
@endsection
