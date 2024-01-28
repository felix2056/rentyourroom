@extends('layouts.app')

@section('title', 'About SpareRoom')

@section('body-id', 'SUBPAGE-about-spareroom')
@section('body-class', 'PAGEaboutus')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
@endsection

@section('styles')
<style>
    .mobile {
        display: none;
    }

    figure {
        padding: 0;
        margin: 0;
        text-align: center;
    }

    section {
        margin-bottom: 40px;
    }

    .zebra section:nth-child(even) {
        background: #ebfafd;
        padding: 16px;
    }

    .zebra h2 {
        padding-top: 24px;
    }

    #SUBPAGE-breaking-ground p {
        font-size: 15px;
    }

    .bg-image {
        position: relative;
        height: 251px;
        margin: 15px 0 40px;
        background-image: url("images/bg-background.png");
    }

    .bg-image__logo {
        position: relative;
        width: 221px;
        height: 221px;
        top: 15px;
        left: 30px;
        border-radius: 100%;
        background-color: white;
        border: 1px solid #00b67a;
    }

    .bg-image__logo img {
        position: relative;
        top: 25px;
    }

    .bg-image__logo-text {
        position: relative;
        top: 30px;
        color: #00b67a;
        line-height: 22px;
        font-size: 16px;
    }

    .bg-image__logo-text p {
        margin-bottom: 0;
    }

    .bg-image__text {
        position: relative;
        bottom: 190px;
        right: 50px;
        font-weight: 300;
        color: #00b67a;
    }

    .bg-image__graphic {
        position: absolute;
        bottom: -7px;
        right: 125px;
        right: 10px;
        bottom: 0;
        width: 320px;
        height: 125px;
    }

    .bg-image__empty-tower,
    .bg-image__full-tower {
        position: absolute;
        bottom: 7px;
        right: 0;
        width: 66px;
        background-position: bottom right;
        right: 100px;
        bottom: 0;
        padding: 0;
        background-repeat: no-repeat;
    }

    .bg-image__empty-tower {
        height: 246px;
        z-index: 500;
        background-image: url("images/bg-empty-tower.png");
    }

    .bg-image__full-tower {
        height: 0;
        z-index: 750;
        background-image: url("images/bg-full-tower.png");
    }

    .bg-image__money-raised {
        position: absolute;
        z-index: 1000;
        border-top: 2px solid #10557F;
        top: 0;
        bottom: auto;
        left: 0;
        width: 100%;
        text-align: left;
        padding: 0;
    }

    .bg-image__money-raised figcaption {
        position: absolute;
        left: 7px;
        top: 0;
        font-family: 'Quicksand', sans-serif;
        font-size: 30px;
        color: #FFF;
    }

    .bg-image__money-raised span {
        position: relative;
        bottom: 5px;
        left: 2px;
    }

    #SUBPAGE-breaking-ground .bg-image__month {
        position: absolute;
        top: 0;
        right: 0;
        color: #00b67a;
        min-width: 32px;
        font-size: 13px;
        font-weight: 500;
        padding: 0;
        margin: 0;
        line-height: normal;
    }

    #SUBPAGE-breaking-ground .bg-image__month span {
        font-size: 10px;
        position: absolute;
        top: -14px;
        right: 0;
        display: block;
        text-align: right;
        padding: 0;
    }

    .bg-intro {
        max-width: 739px;
        text-align: center;
        margin: 0 auto 40px;
    }

    .bg-info {
        margin-bottom: 0;
    }

    .bg-info,
    .bg-details {
        display: flex;
    }

    .bg-info__panel {
        width: 32%;
        padding-bottom: 8px;
    }

    .bg-info__panel:first-of-type {
        border-top: 2px solid #14C8F6;
        border-bottom: 2px solid #14C8F6;
        margin-right: 2%;
    }

    .bg-info__panel:nth-of-type(2) {
        border-top: 2px solid #00b67a;
        border-bottom: 2px solid #00b67a;
        margin-right: 2%;
    }

    .bg-info__panel:nth-of-type(3) {
        border-top: 2px solid #FF9600;
        border-bottom: 2px solid #FF9600;
    }

    .bg-info__panel div,
    .bg-details__panel div {
        display: table;
        width: 100%;
        height: 65px;
    }

    .bg-info__panel div {
        text-align: center;
    }

    .bg-info__panel h2,
    .bg-details__panel h2 {
        display: table-cell;
        vertical-align: middle;
        font-size: 18px;
    }

    .bg-info__image {
        margin-bottom: 10px;
    }

    .bg-lrf-banner {
        width: 100%;
        border-bottom: 1.5px solid #D5D5D5;
        margin-bottom: 14px;
        text-align: center;
    }

    .bg-lrf-banner__logo {
        display: block;
        width: 180px;
        height: 23px;
        margin: 0 auto 15px;
    }

    a.bg-lrf-banner__button.button {
        margin-bottom: 40px;
    }

    .bg-details {
        margin-bottom: 0;
    }

    .bg-details__panel {
        width: 50%;
    }

    .bg-details__panel p {
        width: 95%;
    }

    #SUBPAGE-how-spareroom-works figure {
        min-height: 141px;
    }

    #SUBPAGE-how-spareroom-works figure img {
        height: 109px;
        width: auto;
    }

    #SUBPAGE-how-spareroom-works figure img.how-spareroom-works-tell-people,
    #SUBPAGE-how-spareroom-works figure img.how-spareroom-works-contact-flatmates {
        height: 81px;
    }

    .pressIntroduction,
    #pressEnquiries section:not(:last-of-type) {
        border-bottom: 1px solid #D4D4D4;
    }

    .assetDownloads .grid-4 {
        width: 100%;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .ourTeam,
    .pressIntroduction {
        margin-bottom: 16px !important;
        % # had to !important these. ie9 and ie10 were ignoring the rules
    }

    section.assetDownloads,
    section.pressTestimonials,
    .downloadBlock,
    .ourTeam img {
        margin-bottom: 24px;
    }

    .downloadBlock {
        text-align: center;
    }

    .downloadBlock:nth-child(4n) {
        margin-right: 0 !important;
        % # had to !important these. ie9 and ie10 were ignoring the rules
    }

    .assetDownloads img {
        max-width: 210px;
    }

    .ourTeam h3 {
        margin-bottom: 16px;
    }

    .ourTeam div:after {
        content: '';
        clear: both;
        display: block;
    }

    .ourTeam img {
        float: left;
        margin-right: 24px;
        max-width: 200px;
    }

    .ourTeam span:before {
        content: '– ';
    }

    .asFeaturedBy {
        margin-bottom: 0;
    }

    .mail-to-name:after {
        content: '@';
    }

    main footer {
        text-align: center;
        margin-bottom: 40px;
        margin-top: 0;
        padding-top: 0;
        border-top: 0;
        font-size: 1em;
        line-height: 1.6;
    }

    main footer a {
        padding: 0 2.5em;
    }

    blockquote footer {
        margin: 0;
    }

    .pressTestimonials blockquote {
        margin-bottom: 54px;
        align-self: baseline;
    }

    .pressTestimonials .testimonial cite {
        overflow: visible;
    }

    .UKPress {
        background: url('images/media-GB.png');
    }

    .USPress {
        background: url('images/media-US.png');
    }

    .UKPress,
    .USPress {
        width: 660px;
        height: 120px;
        margin: 0 auto;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: contain;
    }

    .intro {
        margin-bottom: 10px;
    }

    .intro__img {
        padding-top: 65px;
    }

    .intro__img img {
        width: 100%;
    }

    .commitments {
        box-sizing: border-box;
        margin-bottom: 0;
    }

    .commitments.upper .commitment {
        margin-bottom: 30px;
    }

    .commitment {
        border: 1px solid #D5D5D5;
        padding: 0 18px 13px;
        overflow: hidden;
    }

    .commitment-logo.trust {
        height: 149px;
        margin: 10px 0 -30px;
    }

    .commitment-logo.respect {
        height: 119px;
        margin: 22px 0 -10px;
    }

    .commitment-logo.sharing {
        height: 139px;
        margin-bottom: -20px;
    }

    .commitment-logo.community {
        height: 159px;
        margin: -5px 0 -30px;
    }

</style>
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <link rel="stylesheet" href="/css/about.f9a87c6ecb8564e06832.css">

    <div class="video-container">
        <iframe title="video" class="video-container__iframe" width="425" height="319" src="https://www.youtube.com/embed/5e7hCC0USrw?wmode=transparent&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>


    <section class="features">
        <div class="features__container">
            <div class="features__feature">
                <img src="/fonts/EveryThreeMins.svg" class="features__image" width="102" height="102" alt="We're the busiest">
                <h3 class="features__title">We're the busiest</h3>
                <p class="features__body">Every 3 minutes someone finds a flatmate on SpareRoom. With the biggest selection of
                    ads, you'll find yours.</p>
            </div>
            <div class="features__feature">
                <img src="/fonts/Keys.svg" class="features__image" width="155" height="102" alt="Safety">
                <h3 class="features__title">Safety</h3>
                <p class="features__body">Your safety is our top priority. We have a team of moderators working 7 days a week
                    to check ads and content.</p>
            </div>
            <div class="features__feature">
                <img src="/fonts/Welcome.svg" class="features__image" width="192" height="102" alt="We're all about people">
                <h3 class="features__title">We're all about people</h3>
                <p class="features__body">Everyone's idea of the perfect housemate is different, so search based on what's
                    important to you.</p>
            </div>
        </div>
    </section>
    <article class="about-us zebra mainheader">
        <section class="grid-8">
            <figure>
                <img src="/images/about_spareroom_two_girls.png" alt="Life's better when you share it" class="about-us__image">
            </figure>
            <div>
                <h2>Life's better when you share it</h2>
                <p>
                    Living with the right people beats living on your own any day. When you live with the right people, you
                    don't just share your space - you share your life.
                </p>
                <p>
                    They become more than your flatmates, more than the people ahead of you in the queue for the bathroom.
                    They're your friends.
                </p>
                <p>
                    SpareRoom is all about helping you find those people. The people who make sharing amazing.
                </p>
            </div>
        </section>
        <footer>
            <h2>Find out more about us...</h2><a class="mainLink" title="Why use SpareRoom?" href="why-use-spareroom_1.html">Why use SpareRoom?</a><a class="mainLink" title="How SpareRoom works" href="how-spareroom-works_1.html">How SpareRoom works</a><a class="mainLink" title="How we started" href="how-we-started_1.html">How we started</a>
        </footer>
    </article>

</main>
@endsection

@section('js')
<script src="/js/e0c43c978ea516935f9ded8af409ac54.js"></script>
<script src="/js/6f30ada23b82e07b93ee29b7dce25b42.js"></script>
@endsection
