@extends('layouts.app')

@section('title', 'Earn £800 from your spare room | SpareRoom')

@section('body-id', '')
@section('body-class', '')

@section('css')
<link rel="stylesheet" href="/css/a43379f4c07065fcc3753228db1f29b8.css">
@endsection

@section('content')
<main id="spareroom">
    <div id="landing" class="landing-tube-ad">
        <header class="landing-header">
            <div class="landing__logo">
                <img src="/fonts/SpareRoom_en-US.svg" class="svg " alt="SpareRoom Logo">
            </div>
        </header>
        <section id="landing-hero" class="landing-hero" style="background-image: url(&#x27;images/tube-campaign-low-res.jpg&#x27;); background-size: cover;">
            <div class="full-image" data-place-name="tube" style="background-image: url(&#x27;images/tube-campaign.jpg&#x27;);">
            </div>
            <div class="landing-hero__content">
                <div class="landing-hero__heading">
                    <img src="/fonts/tube_ad_landing_page_desktop.svg" class="svg tube_ad_landing_page_desktop" alt="Got a spare room?">
                </div>
                <div class="landing-hero__body">
                    <p class="landing-hero__paragraph">By taking in a lodger you can earn some much-needed extra cash. What’s
                        more, with the severe shortage of rooms in Nigeria right now, you’ll be helping ease the housing crisis
                        too!</p>
                </div>
                <a class="button button--large landing-hero__button" title="Post a FREE ad now" href="find-postcode3.pl">Post
                    a FREE ad now</a>
            </div>
        </section>
        <section class="form-and-review">
            <div class="form-guide">
                <div class="form-guide__intro">
                    <h2 class="form-guide__heading">Download our free guide?</h2>
                    <p class="form-guide__intro">Just sign up to our free lodger tips and advice newsletter and we’ll email you
                        your free guide.</p>
                </div>


                <form method="post" action="/autoresponder.pl" name="autoresponder">
                    <input type="hidden" name="list_id" value="3">
                    <input type="hidden" name="function" value="signup">
                    <input type="hidden" name="template" value="autoresponder_simple">
                    <input type="hidden" name="file" value="tube-landing">
                    <ol>
                        <li class="form_row">
                            <label for="firstn" class="form_label">Name:</label>
                            <input class="input-autoresponder" type="text" style="width:100%;max-width:355px" name="first_name" value id="firstn">
                        </li>

                        <li class="form_row">
                            <label for="email" class="form_label">Email&#42;:</label>
                            <input class="input-autoresponder" type="email" style="width:100%;max-width:355px" name="email" value id="email">
                        </li>



                        <li class="form_row">
                            <label class="form_label" for="I_am">I am:</label>
                            <select class="select-question" name="1st_pre_qualifying_response" id="I_am" style="width:100%; max-width:355px" onChange="if(this.options[this.selectedIndex].dataset.answertype=='freeform'){document.getElementById('freeformresponse').style.display='block';document.getElementById('freeformresponse').focus();}else{document.getElementById('freeformresponse').style.display='none';}">
                                <option value SELECTED>
                                    Choose an option
                                </option>

                                <option value="17" data-answertype="fixed">
                                    Thinking about getting a lodger
                                </option>

                                <option value="18" data-answertype="fixed">
                                    Preparing to get my first lodger
                                </option>

                                <option value="19" data-answertype="fixed">
                                    Already a lodger landlord/have had a lodger before
                                </option>

                                <option value="20" data-answertype="freeform">
                                    Other - none of the above
                                </option>

                            </select>
                            <input type="text" id="freeformresponse" style="display:none;" size="25" name="1st_pre_qualifying_response_freeform" value>
                        </li>

                        <li class="form_row">
                            <input class="button button--secondary button--large" type="submit" name="sup" value="Sign up for the free guide">
                            <p class="note">&#42;We take your privacy <em>very</em> seriously. Your data will never be sold or
                                shared with anyone. See our <a href="terms-uk.html">terms</a> &amp; <a href="privacy-uk.html">privacy</a>. You can unsubscribe easily anytime</p>
                        </li>
                    </ol>
                </form>
            </div>
            <div class="trustpilot-review">
                <div class="review">
                    <img class="review__stars" src="/fonts/stars_trustpilot.svg" alt="trustpilot 5 stars">
                    <p class="review__copy">“We received our first enquiry just over an hour after making our listing live. This
                        perspective tenant viewed the property in less than 24 and was exactly the type of tenant we were
                        after.<br>Thank you SpareRoom”
                    </p>
                    <p class="review__name">- Denise</p>
                </div>
                <div class="review">
                    <img class="review__stars" src="https://assets.spareroom.co.uk/img/spareroom/landingpages/trustpilot/stars_trustpilot.svg" alt="trustpilot 5 stars">
                    <p class="review__copy">“Plenty of response. I have found the perfect tenant.”</p>
                    <p class="review__name">- Jackie</p>
                </div>
            </div>
        </section>
        <section class="trustpilot" id="cityLandingTrustPilotContainer">
            <style>
                .trustpilot-widget {
                    min-height: 140px;
                    min-width: 100%;
                }

            </style>
            <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6ffb0d04a076446a9af" data-businessunit-id="48e90eea000064000503c7fe" data-style-height="140px" data-style-width="100%" data-theme="light" data-stars="4,5">
                <a href="https://www.trustpilot.com/review/spareroom.com" target="_blank"></a>
            </div>
            <script type="text/javascript" src="js/tp.widget.bootstrap.min.js" defer></script>
        </section>
    </div>
</main>
@endsection

@section('js')
<script src="/js/afd4a6fe3a2092398169fed73c7980e1.js"></script>
<script src="/js/tube_ad.6885ea43da5419dc26f6.js"></script>
@endsection
