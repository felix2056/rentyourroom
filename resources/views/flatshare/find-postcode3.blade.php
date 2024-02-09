@extends('layouts.app')

@section('title', 'Advertise your room to let/flat or house share for free. Classifieds, classified advertising. Find
tenants/flatmates/roommates.')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/cdd74c0bc015c838cd67c1ccb7a26d8c.css">

<style>
    .form_error_message { color: red; }
    .form_error { border-color: 2px solid red; }
</style>
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-12-4 " id="mainheader">
        <div>
            <h1>Advertise your room</h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-12-4">
        <div>
            <div class="block block_simple block_offered_listing">
                <div class="block_header">
                    <h2>
                        Step 1 of 6
                    </h2>
                </div>

                <div class="block_content">
                    @if ($errors->any())
                    <p class="msg error">
                        <strong>There was an error with your submission</strong>
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </p>
                    @endif
                    <form method="POST" class="pl_step1" name="place_room_offered_st_1">
                        <fieldset>
                            <legend>
                                Get started with your free ad
                            </legend>

                            <div class="form_row form_row_rooms_for_rent">
                                <div class="form_label">
                                    I have
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select @error('rooms_for_rent') form_error @enderror">
                                        <select name="rooms_for_rent">
                                            @foreach (range(1, 12) as $i)
                                            <option value="{{ $i }}" @if(old('rooms_for_rent') == $i || $property['rooms_for_rent'] == $i) selected @endif>{{ $i }} room for rent</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    @error('rooms_for_rent')
                                    <span class="form_input form_error_message">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_row form_row_property_type">
                                <div class="form_label">
                                    Size and type of property
                                </div>

                                <div class="form_inputs">
                                    <span class="form_input form_select @error('rooms_in_property') form_error @enderror">
                                        <select name="rooms_in_property">
                                            @foreach (range(1, 12) as $i)
                                            <option value="{{ $i }}" @if(old('rooms_in_property') == $i || $property['rooms_in_property'] == $i) selected @endif>{{ $i }} bed</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    @error('rooms_in_property')
                                    <span class="form_input form_error_message">{{ $message }}</span>
                                    @enderror

                                    <span class="form_input form_select form_select_property_type">
                                        <select name="property_type">
                                            <option value disabled>Select</option>
                                            <option value="Flat" @if(old('property_type') == 'Flat' || $property['property_type'] == 'Flat') selected @endif>Flat/Apartment</option>
                                            <option value="House" @if(old('property_type') == 'House' || $property['property_type'] == 'House') selected @endif>House</option>
                                            <option value="Property" @if(old('property_type') == 'Property' || $property['property_type'] == 'Property') selected @endif>Property</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_occupants">
                                <div class="form_label">
                                    There are already
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="occupants">
                                            <option value disabled>Select</option>
                                            @foreach (range(0, 10) as $i)
                                            <option value="{{ $i }}" @if(old('occupants') == $i || $property['occupants'] == $i) selected @endif>{{ $i }}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    occupants in the property
                                </div>
                            </div>

                            <div id="postcodeWrapper" class="form_row form_row_postcode">
                                <div class="form_label">
                                    <span class="form_label__text" data-test-content="Address of property">
                                        Postcode of property
                                    </span>

                                    <span class="form_hint">
                                        (e.g. 101271)
                                    </span>
                                </div>

                                <div class="form_inputs">
                                    <div class="form_input form_text">
                                        <div id="address_lookup" class=" address_lookup" data-address-lookup-service-url="https://address-lookup-service.spareroom.co.uk/api/v1.0" data-address-lookup-service-key="acefa174a62368a592d60e5e8cf234d488d153e0" data-snippet data-retained-street data-retained-postcode data-show-example-address="true">
                                            <div class="address_manual_form">
                                                <div class="autosuggest__manual-field">
                                                    <label class="autosuggest__manual-label" for="manual_address-line_2">Street name</label>
                                                    <input type="text" name="street_name" id="manual_address-line_2" size="35" placeholder="e.g Bode Thomas Street" required="" value="{{ old('street_name') ?? $property['street_name'] }}" class="@error('street_name') form_error @enderror">
                                                    @error('street_name')
                                                    <span class="form_input form_error_message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="autosuggest__manual-field">
                                                    <label class="autosuggest__manual-label" for="manual_address-postcode">Postcode</label>
                                                    <input type="text" name="postcode" id="manual_address-postcode" size="20" placeholder="e.g 101271" required value="{{ old('postcode') ?? $property['postcode'] }}" class="@error('postcode') form_error @enderror">
                                                    @error('postcode')
                                                    <span class="form_input form_error_message">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_row form_row_role ">
                                <div class="form_label">
                                    I am a
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="liveInLandlord" @if(old('advertiser_role') == 'liveInLandlord' || $property['advertiser_role'] == 'liveInLandlord') checked @endif>
                                        Live in landlord
                                        <span class="form_hint">(I own the property and live there)</span>
                                    </label>
                                    <br>

                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="liveOutLandlord" @if(old('advertiser_role') == 'liveOutLandlord' || $property['advertiser_role'] == 'liveOutLandlord') checked @endif>
                                        Live out landlord
                                        <span class="form_hint">(I own the property but don't live there)</span>
                                    </label>
                                    <br>

                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="currentTenant" @if(old('advertiser_role') == 'currentTenant' || $property['advertiser_role'] == 'currentTenant') checked @endif>
                                        Current tenant/flatmate
                                        <span class="form_hint">(I am living in the property)</span>
                                    </label>

                                    <br>

                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="agent" @if(old('advertiser_role') == 'agent' || $property['advertiser_role'] == 'agent') checked @endif>
                                        Agent
                                        <span class="form_hint">(I am advertising on a landlord's behalf)</span>
                                    </label>

                                    <br>

                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="formerFlatmate" @if(old('advertiser_role') == 'formerFlatmate' || $property['advertiser_role'] == 'formerFlatmate') checked @endif>
                                        Former flatmate
                                        <span class="form_hint">(I am moving out and need someone to replace me)</span>
                                    </label>

                                    <br>

                                    <div id="advertiser_role_other" style="display:none;">
                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="other" @if(old('advertiser_role') == 'other' || $property['advertiser_role'] == 'other') checked @endif>
                                            other:
                                            <span class="form_hint"><input type="text" name="advertiser_role_other" value></span>
                                        </label>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="step1__button-wrapper">
                                <div class="step1__facebook-button-wrapper" style="display:none">
                                    <a class="button button--facebook button--wide" id="fb_login" title="Connect with Facebook" data-facebook-connect data-fb-button-disabled="true" href="#">
                                        <div class="button__content">
                                            <span class="button__icon">
                                                <i class="fab fa-facebook"></i>
                                            </span><span class="button__text">Continue with Facebook</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="step1__email-button-wrapper" style="display:none">
                                    <button type="button" class="button button--link">Continue with email</button>
                                </div>

                                <div class="form_row form_row_email">
                                    <div class="form_label">
                                        My email address is <span class="star">*</span>
                                    </div>
                                    <div class="form_inputs">
                                        <span class="form_input form_text">
                                            <input class="step-1__email-input" type="email" name="youremail" value="{{ old('youremail') ?? $property['youremail'] }}" required>
                                        </span>
                                        <input type="hidden" name="emailrequested" value="1">
                                        <div class="form_hint">
                                            (We'll keep this safe and not display it publicly)
                                        </div>
                                    </div>
                                </div>

                                <div class="form_row step1__continue-button-wrapper">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <input type="hidden" name="scp" value="N">
                                        <input type="hidden" name="sale_or_rent" value="rental">
                                        <input type="hidden" name="action" value="lookuppostcode">
                                        <input type="hidden" name="amount" value>
                                        <input type="hidden" name="desc" value="Free Advert">
                                        <input type="hidden" name="M_context" value="28">
                                        <input type="hidden" name="information" value="full">
                                        <input type="hidden" name="current_step" value="theproperty">
                                        @csrf
                                        <div class="form_input form_button">
                                            <button class="button" id="continueButton" type="submit" name="submit">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
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

    <div id="lookup_modal"></div>
    <div id="message_wrap">
        <a href="#" id="close_lookup_modal" title="Close window">&#10799;</a>
        <div id="message">
            <form name="submit_lookup_query">
                <label for="update_query">Type part of an address or postcode to begin: </label>
                <input type="text" name="update_query" id="update_query" data-pc-next data-pc-id placeholder="E.g. '10 Downing Street'">
                <input class="button" type="submit" name="submit_lookup" value="Search">
            </form>
            <p>Please choose from results below:</p>
            <ul id="returned_results"></ul>
        </div>
    </div>
</main>
@endsection

@section('js')
<script>
    SR.init({
        siteId: 1
        , domainId: 1
        , locale: 'en-GB'
        , correctUrl: 'www.spareroom.co.uk'
        , staticServer: 'assets.spareroom.co.uk'
        , appSubdir: 'flatshare'
        , googleMapsClientId: 'gme-flatshareltd'
        , gaCategoryMapEvents: 'Google Maps (09 -11-16)'
        , loginReturnPath: '\x2Fflatshare\x2Ffind\x2Dpostcode3\x2Epl\x3Fdesc\x3DFree\x2BAdvert\x26amount\x3D0\x26scp\x3DN'
        , siteMobile: false
        , facebook: {
            appLocale: 'en_GB'
        , }
    });

    SR.localisations = {};

    SR.facebookConnect.setSettings({
        passthrough: {
            usertype_new: 'haveashare'
        }
    });

</script>

<script>
    _sr.page.post_ad = {
        address_label: "Address of property"
        , postcode_label: "Postcode of property"
        , example_address: "e.g. 44 Linden Grove, London, SE15 3LF"
        , address_not_listed: "My address isn't listed"
        , enter_address_manually: "Enter my address manually"
        , hint_provide: "We won't display your address on your listing."
        , search_by_address: "Back to address search"
        , search_by_postcode: "Back to postcode search"
        , error_address_lookup: "Unable to lookup address"
        , label_line_2: "Street name"
        , label_postcode: "Postcode"
        , placeholder_street_name: "e.g 25 Chadwick Road"
        , placeholder_postcode: "e.g SE15 8PD"
    , };

</script>
<script src="/js/7be1b14bae250f45c8bf967a065ed7d8.js"></script>
<script>
    SR.listing.placeOffered.step1.init();

</script>
<script src="/js/step_one.b9ba42a0a49571b3289b.js"></script>
<link rel="stylesheet" href="/css/step_one.1569dcaf844ba47902b8.css">
@endsection
