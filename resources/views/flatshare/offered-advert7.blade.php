@extends('layouts.app')

@section('title', 'Advertise your room for rent STEP 6 of 6')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/5053de057a976a94af2b72c3d738bc3e.css">
<link rel="stylesheet" href="/css/photo_uploads.73493d827894b0af651c.css">
<link rel="stylesheet" href="/css/shared_interests_desktop.95f8609ee352ab1d4574.css">
<link rel="stylesheet" href="/css/offered.83cbf40a69d89e11e681.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-12-4 " id="mainheader">
        <div>
            <h1>
                Advertise your room
            </h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-12-4">
        <div>
            <div class="block block_simple block_offered_listing">
                <div class="block_header">
                    <h2>
                        Step 6 of 6</h2>
                </div>

                <div class="block_content">
                    <div id="deposit_warning_popup"></div>
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

                    <form id="formSteps2" method="POST" class="pl_step2" data-cookie-check="self" name="place_room_offered_st_2">
                        <input type="hidden" name="current_step" value="theaccount">
                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1707251856">
                        @csrf
                        <input type="hidden" name="draft_advert_id" value="BCxFhSbtBd2BvQ8_zTi6mA">

                        <input type="hidden" name="postcode" value="AB10 6DN">
                        <input type="hidden" name="rooms_in_property" value="2">
                        <input type="hidden" name="property_type" value="Flat">

                        <input type="hidden" name="property_type_more" value="">

                        <input type="hidden" name="advertiser_role" value="live in landlord">
                        <input type="hidden" name="advertiser_role_other" value="">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="neighbourhood_id" value="14">
                        <input type="hidden" name="M_context" value="28">
                        <input type="hidden" name="address_uuid" value="">

                        <input type="hidden" name="neighbourhood" value="1">
                        <input type="hidden" name="street_name" value="947 Manchester Road London">

                        <input type="hidden" name="no_of_mins" value="">
                        <input type="hidden" name="no_of_mins_by" value="">
                        <input type="hidden" name="station_id" value="">
                        <input type="hidden" name="living_room" value="shared">


                        <input type="hidden" name="off_street_parking" value="shared">
                        <input type="hidden" name="garden" value="none">
                        <input type="hidden" name="garage" value="none">
                        <input type="hidden" name="balcony" value="none">
                        <input type="hidden" name="disabled_access" value="N">

                        <input type="hidden" name="rooms_for_rent" value="1">
                        <input type="hidden" name="roomcount" value="1">

                        <input type="hidden" name="roomstatus1" value="available">
                        <input type="hidden" name="roomprice1" value="123">
                        <input type="hidden" name="roomper1" value="pw">
                        <input type="hidden" name="roomtype1" value="double">
                        <input type="hidden" name="roomensuite1" value="">


                        <input type="hidden" name="roomfurnishings1" value="furnished">
                        <input type="hidden" name="roomsecurity_deposit1" value="122">

                        <input type="hidden" name="day_avail" value="06">
                        <input type="hidden" name="mon_avail" value="02">
                        <input type="hidden" name="year_avail" value="2024">

                        <input type="hidden" name="min_term" value="2">
                        <input type="hidden" name="max_term" value="3">

                        <input type="hidden" name="short_lets_considered" value="">
                        <input type="hidden" name="days_of_wk_available" value="7 days a week">
                        <input type="hidden" name="references_needed" value="N">

                        <input type="hidden" name="bills_inc" value="Yes">
                        <input type="hidden" name="broadband" value="Y">

                        <input type="hidden" name="occupants" value="1">

                        <input type="hidden" name="campus_id" value="">
                        <input type="hidden" name="gay_lesbian" value="ND">
                        <input type="hidden" name="gender" value="M">
                        <input type="hidden" name="interests" value="">
                        <input type="hidden" name="lang_id" value="26">
                        <input type="hidden" name="max_age" value="NULL">
                        <input type="hidden" name="min_age" value="20">
                        <input type="hidden" name="nationality" value="">
                        <input type="hidden" name="pets" value="Y">
                        <input type="hidden" name="share_type" value="ND">
                        <input type="hidden" name="smoking_current" value="N">

                        <input type="hidden" name="pets_req" value="N">
                        <input type="hidden" name="share_type_req" value="M">
                        <input type="hidden" name="smoking" value="Y">

                        <input type="hidden" name="couples" value="">
                        <input type="hidden" name="gay_lesbian_req" value="">
                        <input type="hidden" name="gender_req" value="N">
                        <input type="hidden" name="lang_id_req" value="26">
                        <input type="hidden" name="max_age_req" value="28">
                        <input type="hidden" name="min_age_req" value="24">
                        <input type="hidden" name="vegetarians" value="">

                        <input type="hidden" name="ad_title" value="{{ $property['ad_title'] }}">
                        <input type="hidden" name="ad_text" value="{{ $property['ad_text'] }}">

                        <input type="hidden" name="first_name" value="{{ $property['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $property['last_name'] }}">
                        <input type="hidden" name="display_last_name" value="{{ $property['display_last_name'] }}">
                        <input type="hidden" name="custom_ref" value="">
                        <input type="hidden" name="tel" value="{{ $property['tel'] }}">
                        <input type="hidden" name="display_tel" value="{{ $property['display_tel'] }}">

                        <fieldset class="pl_login_reg">
                            <input type="hidden" name="is_loggedin" @if (Auth::check()) value="1" @else value="0" @endif>
                            <legend>Login information</legend>

                            <div class="clear"></div>
                            <div class="cols cols2 pl_login__users">
                                <div class="col col_first pl_login_reg_existing">
                                    <h4>
                                        Existing User?
                                    </h4>
                                    <div class="pl_login_reg_fields">
                                        <div class="form_row form_row_email">
                                            <div class="form_label">
                                                Email
                                            </div>
                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="text" placeholder="Email" name="login_email" value="{{ old('login_email') ?? $property['youremail'] }}" class="pl_login__input">
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form_row form_row_password">
                                            <div class="form_label">
                                                Password
                                            </div>

                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="password" name="login_password" class="pl_login__input" value="" placeholder="Password">
                                                </span>
                                                <a href="/flatshare/passwordreminder.pl" rel="nofollow" target="_password" title="Reset your password (opens in new window so your ad won't be lost)" class="block">Forgot password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col col_last pl_login_reg_new">
                                    <h4>
                                        New user?
                                    </h4>
                                    <div class="pl_login_reg_fields">
                                        <div class="form_row form_row_email">
                                            <div class="form_label">
                                                Email
                                            </div>
                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="email" name="email" class="pl_login__input" value="{{ old('email') ?? $property['youremail'] }}" placeholder="Email" autocomplete="email">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form_row form_row_email">
                                            <div class="form_label">
                                                Confirm email
                                            </div>
                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="email" class="pl_login__input" name="email_again" placeholder="Confirm email" autocomplete="email">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form_row form_row_password">
                                            <div class="form_label">

                                                Choose a password

                                            </div>
                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="password" class="pl_login__input" name="password" placeholder="Password">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form_row form_row_password">
                                            <div class="form_label">
                                                Enter password again
                                            </div>

                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="password" class="pl_login__input" name="password_again" placeholder="Confirm password">
                                                </span>
                                            </div>
                                        </div>

                                        <input type="hidden" name="emailnewsletters" value="Y">
                                        <input type="hidden" name="emailtipsandpromotions" value="Y">
                                        <input name="emailspeedflatmating" type="hidden" value="N">
                                        <input type="hidden" name="emailfrom3rdparties" value="N">
                                        
                                        <div class="form_row form_row_hear_about">
                                            <div class="form_label">
                                                Where did you hear about us?
                                            </div>
                                            <div class="form_inputs">
                                                <span class="form_input form_text">
                                                    <input type="text" name="where_heard" class="pl_login__input" value="{{ $property['where_heard'] }}" placeholder="Where did you hear about us?">
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form_row form_row_agreement">
                                            <div class="form_label">
                                                Your agreement with us
                                            </div>

                                            <div class="form_inputs">
                                                <div class="form_input form_checkbox">
                                                    <input type="hidden" name="inagreement" value="Y">
                                                    * By clicking Continue to next step you agree to SpareRoom's <a href="/content/padded/terms-uk">terms</a> and <a href="/content/padded/privacy-uk">privacy policy</a>. We will send you emails as part of the services we provide to you. You can unsubscribe at any time via the website or the link in the emails.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form_row form_row_buttons">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <div class="btn-wrapper">
                                            <div>
                                                <button class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</button>
                                            </div>
                                            <div class="btn-wrapper__back-btn">
                                                <input class="button button--link" id="backButton" type="submit" name="prev_step" value="Back">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <input type="hidden" name="usertype" value="haveashare">
                        <input type="hidden" name="usertype_new" value="haveashare">
                        <input type="hidden" name="ad_type" value="offered">
                        <input type="hidden" name="scp" value="N">
                        <input type="hidden" name="suitableforsharing" value="Y">
                        <input type="hidden" name="sale_or_rent" value="rental">
                        <input type="hidden" name="information" value="full">
                        <input type="hidden" name="theproperty" value="">
                        <input type="hidden" name="therooms" value="">
                        <input type="hidden" name="thehousehold" value="">
                        <input type="hidden" name="theadvert" value="">
                        <input type="hidden" name="theaccount" value="yes">
                        <input type="hidden" name="fees_apply" value="N">
                    </form>
                </div>

                <div class="grecaptcha-container">
                    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
                        <div class="grecaptcha-logo">
                            <iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-dtbq0kdrenhp" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcZa20UAAAAACDnWTi-GfAeYp7feqNmb4GFL5AI&amp;co=aHR0cHM6Ly93d3cuc3BhcmVyb29tLmNvLnVrOjQ0Mw..&amp;hl=en&amp;v=MHBiAvbtvk5Wb2eTZHoP1dUd&amp;size=invisible&amp;cb=etbzit5mj0v5"></iframe>
                        </div>
                        <div class="grecaptcha-error"></div>
                        <textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                    </div>
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
                        Contact us by <a href="/contact.pl" rel="nofollow" title="Contact us by email">email</a> or
                        <br>
                        <i class="far fa-phone"></i>
                        <a href="tel:+441617681162">Call us on 0161 768 1162</a>
                    </p>

                    <p class="need-help__hours">
                        Mon to Fri: 9am – 8.30pm
                        <br>
                        Weekends: 10am – 7.30pm
                    </p>

                    <!-- Start of spareroom Zendesk Widget script -->
                    <script id="ze-snippet" defer="" src="https://static.zdassets.com/ekr/snippet.js?key=02d88f50-babe-4177-82a1-fe426c9353a1"> </script>
                    <!-- End of spareroom Zendesk Widget script -->
                </div>
            </section>
        </aside>
    </div>
</main>
@endsection

@section('js')
<script src="/js/0049b2402d621d16f4454fa73bc2b916.js"></script>
<script>
    SR.listing.placeOffered.step2.init();
</script>
<script src="/js/address_lookup.e448294d96cd8f8153dc.js"></script>
<script src="/js/offered.829f12747b9ee43b9860.js"></script>
<script src="/js/shared_interests.03212489e1fc1defec3d.js"></script>
<style>
    .desktop .address_lookup {
        max-width: 90%;
        flex-direction: column;
    }

</style>
@endsection
