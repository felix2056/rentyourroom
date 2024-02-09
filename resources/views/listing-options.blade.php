@extends('layouts.app')

@section('title', 'Advertise your Room to Let')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
@endsection

@section('styles')
<style>
    html {
        opacity 1;
        transition: opacity 0s;
        transition-delay: 0.7s;
    }

    .async-hide {
        opacity: 0 !important;
    }

</style>
<style>
    .hidden-overlay {
        display: none
    }

</style>
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>
                Advertise your Room to Let
            </h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-4-8-4">
        <aside>
            <div id="testimonials">
                <blockquote class="testimonial">
                    <p>You run a brilliant service quick and easy. I would only ever recommend your company. Once again
                        SpareRoom A BIG THANK YOU</p>
                    <footer><cite>Kim K</cite></footer>
                </blockquote>
            </div>
        </aside>

        <div id="maincontent">
            <link rel="stylesheet" href="/css/index.316cd90e02cd52831bf1.css">

            <div class="listing_options">
                <h2>What are your options?</h2>
                <table class="comparison-table">
                    <tr class="comparison-table__row">
                        <th class="comparison-table__heading round-corner--top-left">Features</th>
                        <th class="comparison-table__heading ">Free ad</th>
                        <th class="comparison-table__heading  round-corner--top-right">Bold Ad</th>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell">Upgraded users can contact your ad <span class="comparison-table__emphasized">immediately</span></td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell">Free users can contact your ad after 7 days</td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell"><span class="comparison-table__emphasized">Double your
                                enquiries</span><br>
                            On average, Bold Ads get twice as many enquiries</td>
                        <td class="comparison-table__cell "><i class="far fa-times-circle"></i><span class="sr-only">no</span>
                        </td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell"><span class="comparison-table__emphasized">Rank higher</span> in the
                            search pages</td>
                        <td class="comparison-table__cell "><i class="far fa-times-circle"></i><span class="sr-only">no</span>
                        </td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell">Contact all Room Wanted ads <span class="comparison-table__emphasized">immediately</span></td>
                        <td class="comparison-table__cell "><i class="far fa-times-circle"></i><span class="sr-only">no</span>
                        </td>
                        <td class="comparison-table__cell "><i class="far fa-check-circle"></i><span class="sr-only">yes</span>
                        </td>
                    </tr>
                    <tr class="comparison-table__row">
                        <td class="comparison-table__cell round-corner--bottom-left">Stand out <span class="comparison-table__emphasized">more</span><span id="adExamples"></span></td>
                        <td class="comparison-table__cell "><i class="far fa-times-circle"></i><span class="sr-only">no</span>
                        </td>
                        <td class="comparison-table__cell  round-corner--bottom-right"><i class="far fa-check-circle"></i><span class="sr-only">yes</span></td>
                    </tr>
                </table>
                <div class="buttons-ads">
                    <a class="button button--secondary buttons-ads__free-ad" id="postFreeAd" href="{{ route('flatshare.findPostcode3') }}">Post a
                        free ad</a>
                    <a class="button buttons-ads__bold-ad" id="postBoldAd" href="{{ route('flatshare.findPostcode3') }}">Post a Bold ad</a>
                </div>


                <section class="listing-options__bold-benefits">
                    <h2 class="listing-options__title">Pricing and further benefits of upgrading to Bold</h2>
                    <p>
                        <strong>Upgrading also gets you Early Bird Access...</strong>


                        <img src="/fonts/early_bird.svg" class="svg early_bird_icon " alt="Early bird" width="212" height="150">
                    </p>

                    <h3 class="listing-options__title">Have a room to fill?</h3>
                    <p>Early Bird Access lets you contact all Room Wanted Ads. Pro-active landlords who contact room seekers
                        fill their rooms faster than those who sit back and wait for enquiries.</p>
                    <h3 class="listing-options__title">Contact all ads</h3>
                    <p>Early Bird Access means there are no restrictions on which ads you can contact.</p>

                    <h3 class="listing-options__title">Need a room?</h3>
                    <p>Competition for good rooms is fierce, particularly in busy areas. Early Bird Access gives you a 7 day
                        head start.</p>


                    <ul class="bulletlist pricelist">
                        <li>1 week: <strong>&pound;11.99</strong></li>
                        <li>2 weeks: <strong>&pound;21.99</strong></li>
                        <li>4 weeks: <strong>&pound;25.99</strong></li>
                        <li>6 months: <strong>&pound;99</strong></li>
                    </ul>



                    <blockquote>
                        <p class="quote">
                            We had well more than a dozen hits everday. Recommend the Bold Ad to anyone letting as it makes a HUGE
                            difference and is definitely worth the money.
                        </p>
                        <p class="author">
                            Jane C
                        </p>
                    </blockquote>

                </section>


                <section data-JSpopUp="exampleListing" id="exampleListing" class="listing-results--example listing-results">
                    <h2 class="title-bold">What a bold ad looks like</h2>
                    <div>
                        <p>How your upgraded ad will look in the search results - enhanced for better visibility</p>

                        <article class="panel-listing-result listing-bold  ">
                            <header class="desktop"><strong class="listingPrice">&pound;1,000 <abbr title="per calendar month">pcm</abbr></strong>
                                <h2> Beautiful Room to Let</h2>
                                <div class="pricingInfo"><em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em><em class="listingPriceDetails"></em></div>
                            </header>
                            <header class="mobile">
                                <h2> Beautiful Room to Let</h2>

                            </header>
                            <figure><img src="/images/offeredAd.jpg" alt="example">
                                <p class="media-details"><span><i class="fas fa-camera"></i> 3</span><span><i class="far fa-video"></i> 1 </span></p>
                            </figure>
                            <div class="infoLabels"><mark class="new-today"> New today</mark></div>
                            <div class="pricingInfo mobile">
                                <em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em>
                                <strong class="listingPrice">
                                    &pound;1,000 <abbr title="per calendar month">pcm</abbr> </strong>
                                <em class="listingPriceDetails">
                                </em>
                            </div>
                            <div class="listing-results-content desktop">
                                <div class="advertDescription">
                                    <p class="description"> A fully furnished room with natural light, you will love the view of the
                                        city from the balcony. </p><strong>Available now</strong>
                                </div>
                            </div>
                            <footer class="status_container"><span class="freeContact status"><span> Free to Contact
                                    </span></span><span class="tooltip example-save-button" tabindex="-1"><span class="tooltip_item"><span class="anchor_text"><i class="far fa-heart"></i><span>
                                                Save</span></span><span class="tooltip_box"><span class="tooltip_text">Add this to your 'saved
                                                ads' list for quick reference in future. You'll find your saved ad lists under the 'search'
                                                tab in the main menu</span><span class="tooltip_arrow">&nbsp;</span></span></span><span class="tooltip_background" tabindex="-1"></span></span><span class="more desktop">More info</span>
                            </footer>
                        </article>
                    </div>
                    <div class="current-example__container">
                        <p>How your ad currently appears in the search results.</p>

                        <article class="panel-listing-result listing-free  ">
                            <header class="desktop"><strong class="listingPrice">&pound;1,000 <abbr title="per calendar month">pcm</abbr></strong>
                                <h2> Beautiful Room to Let</h2>
                                <div class="pricingInfo"><em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em><em class="listingPriceDetails"></em></div>
                            </header>
                            <header class="mobile">
                                <h2> Beautiful Room to Let</h2>

                            </header>
                            <figure><img src="https://assets.spareroom.co.uk/img/spareroom/v4/examples/offeredAd.jpg" alt="example">
                                <p class="media-details"><span><i class="fas fa-camera"></i> 3</span><span><i class="far fa-video"></i> 1 </span></p>
                            </figure>
                            <div class="infoLabels"><mark class="new-today"> New today</mark></div>
                            <div class="pricingInfo mobile">
                                <em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em>
                                <strong class="listingPrice">
                                    &pound;1,000 <abbr title="per calendar month">pcm</abbr> </strong>
                                <em class="listingPriceDetails">
                                </em>
                            </div>
                            <div class="listing-results-content desktop">
                                <div class="advertDescription">
                                    <p class="description"> A fully furnished room with natural light, you will love the view of the
                                        city from the balcony. </p><strong>Available now</strong>
                                </div>
                            </div>
                            <footer class="status_container"><span class="earlyBird status desktop"><span class="tooltip earlyBird" tabindex="-1"><span class="tooltip_item">
                                            <img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird" width="212" height="150">Early
                                            Bird</span>&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Early Bird Access is just one benefit of upgrading. With it you can
                                                contact all ads on the site as soon as they appear - otherwise you'll have to wait 7 days
                                                before you can contact any ads with the Early Bird icon. <a href="how-the-site-works.html" class="tooltip_link_earlybird_access" title="About Early Bird Access">Find out more
                                                    &raquo;</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span></span><span class="earlyBird status mobile">Early Bird</span><span class="tooltip example-save-button" tabindex="-1"><span class="tooltip_item"><span class="anchor_text"><i class="far fa-heart"></i><span> Save</span></span><span class="tooltip_box"><span class="tooltip_text">Add this to your 'saved ads' list for quick reference in future. You'll
                                                find your saved ad lists under the 'search' tab in the main menu</span><span class="tooltip_arrow">&nbsp;</span></span></span><span class="tooltip_background" tabindex="-1"></span></span><span class="more desktop">More info</span></footer>
                        </article>
                    </div>
                </section>
                <section>


                    <blockquote>
                        <p class="quote">
                            Brilliant site! Placed an ad with 3 different sites and this is the only one which delivered! Brilliant
                            work SpareRoom! Have recommended you to other landlord friends!
                        </p>
                        <p class="author">
                            KB
                        </p>
                    </blockquote>

                    <blockquote>
                        <p class="quote">
                            SpareRoom is awesome. I now have a viewing every 15mins from 5.45pm until 9pm tomorrow. If both rooms
                            aren't let I'll eat my deposit receipt!
                        </p>
                        <p class="author">
                            Martin S
                        </p>
                    </blockquote>


                </section>
            </div>



            <script src="/js/index.fcb9a916ca7ff32059ee.js"></script>


        </div>

        <aside>



            <section class="panel panel-header-closed need-help">
                <header>
                    <h3>Need any help?</h3>
                </header>
                <div>

                    <p class="need_help_contact">
                        Contact us by <a href="contact.pl" rel="nofollow" title="Contact us by email">email</a> or
                        <br>
                        <i class="far fa-phone"></i>
                        <a href="tel:+441617681162">Call us on 0161 768 1162</a>
                    </p>

                    <p class="need-help__hours">
                        Mon to Fri: 9am &ndash; 8.30pm
                        <br>
                        Weekends: 10am &ndash; 7.30pm
                    </p>

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