@extends('layouts.app')

@section('title', 'Advertise on SpareRoom for free')

@section('body-id', 'SUBPAGEoptions')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">

    <div class="grid-16 " id="mainheader">
        <div>
            <h1>
                Advertise on SpareRoom for free
            </h1>
        </div>
    </div>

    <div class>
        <div id="maincontent">
            <link rel="stylesheet" href="/css/options.ee92e1219d1059876968.css">

            <head>

            </head>
            <h2 class>What do you want to advertise?</h2>
            <section class="options__container">
                <div class="options__wrapper">
                    <a id="optionsWrapperRoom" href="{{ route('listingOptions') }}" class="options__item">
                        <p class="options__image">
                            <img class="options__img" src="/images/room_only.png" alt="Rooms to Rent">
                        </p>
                        <div class="options__description">
                            <h3 class="options__description-title">Rooms to Rent ad</h3>
                            Advertise one or more rooms in a property
                        </div>
                        <p class="options__button-container"><button class="button button--wide" id="postAdRoomForRentButton" type="submit" name="submit">Post a free ad</button> </p>
                    </a>

                    <a id="optionsWrapperWholeProperty" href="scp-options.html" class="options__item">
                        <p class="options__image">
                            <img class="options__img" src="/images/whole_property.png" alt="Whole Property to Rent">
                        </p>
                        <div class="options__description">
                            <h3 class="options__description-title">Whole Property to Let ad</h3>
                            Advertise a self-contained property (with no existing flatmates) on a single contract. Includes studios
                            and 1 bed flats
                        </div>
                        <p class="options__button-container"><button class="button button--wide" id="postAdWholePropertyButton" type="submit" name="submit">Post a free ad</button> </p>
                    </a>

                    <a id="optionsWrapperRoomWanted" href="wanted_listing_step1.pl" class="options__item remove-border">
                        <p class="options__image">
                            <img class="options__img" src="/images/room_wanted.png" alt="Rooms wanted">
                        </p>
                        <div class="options__description">
                            <h3 class="options__description-title">Room Wanted ad</h3>
                            Create a room wanted ad so people offering rooms can find out more about you and get in touch
                        </div>
                        <p class="options__button-container"><button class="button button--wide" id="postAdRoomWantedButton" type="submit" name="submit">Post a free ad</button> </p>
                    </a>

                </div>
                <div class="trustpilot-widget options__trustpilot " data-locale="en-GB" data-template-id="539ad60defb9600b94d7df2c" data-businessunit-id="48e90eea000064000503c7fe" data-style-height="500px" data-style-width="100%" data-theme="light" data-stars="4,5">
                    <a href="https://uk.trustpilot.com/review/www.spareroom.co.uk" target="_blank">Trustpilot</a>
                </div>
            </section>

            <!-- TrustBox script -->
            <script type="text/javascript" src="/js/tp.widget.bootstrap.min.js" async></script>
            <!-- End Trustbox script -->
            <!-- TrustBox script -->
            <script type="text/javascript" src="/js/tp.widget.bootstrap.min.js" async></script>
            <!-- End Trustbox script -->

            <script src="/js/options.2a3c13f54d6277659690.js"></script>

            <div>
                <h2 style="margin: 0 0 0; color: #5E5E5E;">How to edit an existing ad</h2>
                <p>

                    To see, edit, upgrade or deactivate your existing ads, you must <a id="editExistingAdvertLogin" href="logon_3.pl">log&nbsp;in</a>


                </p>

                <h3 style="color: #5E5E5E;">Help topics</h3>
                <a href="scp-rooms-difference.html">What's the difference between "whole property to let" and "room(s) for
                    rent"?</a>

            </div>
            <script src="/js/choose_section.0fd57664dd5ee593f17c.js"></script>

        </div>



    </div>
</main>
@endsection

@section('js')
<script src="/js/e0c43c978ea516935f9ded8af409ac54.js"></script>
@endsection
