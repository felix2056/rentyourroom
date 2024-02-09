@extends('layouts.app')

@section('title', 'Advertise your room for rent STEP 4 of 6')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/5053de057a976a94af2b72c3d738bc3e.css">
<link rel="stylesheet" href="/css/photo_uploads.73493d827894b0af651c.css">
<link rel="stylesheet" href="/css/shared_interests_desktop.95f8609ee352ab1d4574.css">
<link rel="stylesheet" href="/css/offered.83cbf40a69d89e11e681.css">
<style type="text/css" data-fbcssmodules="css:f5053de057a976a94af2b72c3d738bc3eb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
    .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_reposition {
        overflow: hidden;
        position: relative
    }

    .fb_invisible {
        display: none
    }

    .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
    }

    .fb_reset>div {
        overflow: hidden
    }

    @keyframes fb_transform {
        from {
            opacity: 0;
            transform: scale(.95)
        }

        to {
            opacity: 1;
            transform: scale(1)
        }
    }

    .fb_animate {
        animation: fb_transform .3s forwards
    }

    .fb_hidden {
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_reposition {
        overflow: hidden;
        position: relative
    }

    .fb_invisible {
        display: none
    }

    .fb_reset {
        background: none;
        border: 0;
        border-spacing: 0;
        color: #000;
        cursor: auto;
        direction: ltr;
        font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
        font-size: 11px;
        font-style: normal;
        font-variant: normal;
        font-weight: normal;
        letter-spacing: normal;
        line-height: 1;
        margin: 0;
        overflow: visible;
        padding: 0;
        text-align: left;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        visibility: visible;
        white-space: normal;
        word-spacing: normal
    }

    .fb_reset>div {
        overflow: hidden
    }

    @keyframes fb_transform {
        from {
            opacity: 0;
            transform: scale(.95)
        }

        to {
            opacity: 1;
            transform: scale(1)
        }
    }

    .fb_animate {
        animation: fb_transform .3s forwards
    }

    .fb_dialog {
        background: rgba(82, 82, 82, .7);
        position: absolute;
        top: -10000px;
        z-index: 10001
    }

    .fb_dialog_advanced {
        border-radius: 8px;
        padding: 10px
    }

    .fb_dialog_content {
        background: #fff;
        color: #373737
    }

    .fb_dialog_close_icon {
        background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
        cursor: pointer;
        display: block;
        height: 15px;
        position: absolute;
        right: 18px;
        top: 17px;
        width: 15px
    }

    .fb_dialog_mobile .fb_dialog_close_icon {
        left: 5px;
        right: auto;
        top: 5px
    }

    .fb_dialog_padding {
        background-color: transparent;
        position: absolute;
        width: 1px;
        z-index: -1
    }

    .fb_dialog_close_icon:hover {
        background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
    }

    .fb_dialog_close_icon:active {
        background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
    }

    .fb_dialog_iframe {
        line-height: 0
    }

    .fb_dialog_content .dialog_title {
        background: #6d84b4;
        border: 1px solid #365899;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        margin: 0
    }

    .fb_dialog_content .dialog_title>span {
        background: url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
        float: left;
        padding: 5px 0 7px 26px
    }

    body.fb_hidden {
        height: 100%;
        left: 0;
        margin: 0;
        overflow: visible;
        position: absolute;
        top: -10000px;
        transform: none;
        width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading {
        background: url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
        min-height: 100%;
        min-width: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 10001
    }

    .fb_dialog.fb_dialog_mobile.loading.centered {
        background: none;
        height: auto;
        min-height: initial;
        min-width: initial;
        width: auto
    }

    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
        width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
        background: none
    }

    .loading.centered #fb_dialog_loader_close {
        clear: both;
        color: #fff;
        display: block;
        font-size: 18px;
        padding-top: 20px
    }

    #fb-root #fb_dialog_ipad_overlay {
        background: rgba(0, 0, 0, .4);
        bottom: 0;
        left: 0;
        min-height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 10000
    }

    #fb-root #fb_dialog_ipad_overlay.hidden {
        display: none
    }

    .fb_dialog.fb_dialog_mobile.loading iframe {
        visibility: hidden
    }

    .fb_dialog_mobile .fb_dialog_iframe {
        position: sticky;
        top: 0
    }

    .fb_dialog_content .dialog_header {
        background: linear-gradient(from(#738aba), to(#2c4987));
        border-bottom: 1px solid;
        border-color: #043b87;
        box-shadow: white 0 1px 1px -1px inset;
        color: #fff;
        font: bold 14px Helvetica, sans-serif;
        text-overflow: ellipsis;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
        vertical-align: middle;
        white-space: nowrap
    }

    .fb_dialog_content .dialog_header table {
        height: 43px;
        width: 100%
    }

    .fb_dialog_content .dialog_header td.header_left {
        font-size: 12px;
        padding-left: 5px;
        vertical-align: middle;
        width: 60px
    }

    .fb_dialog_content .dialog_header td.header_right {
        font-size: 12px;
        padding-right: 5px;
        vertical-align: middle;
        width: 60px
    }

    .fb_dialog_content .touchable_button {
        background: linear-gradient(from(#4267B2), to(#2a4887));
        background-clip: padding-box;
        border: 1px solid #29487d;
        border-radius: 3px;
        display: inline-block;
        line-height: 18px;
        margin-top: 3px;
        max-width: 85px;
        padding: 4px 12px;
        position: relative
    }

    .fb_dialog_content .dialog_header .touchable_button input {
        background: none;
        border: none;
        color: #fff;
        font: bold 12px Helvetica, sans-serif;
        margin: 2px -12px;
        padding: 2px 6px 3px 6px;
        text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog_content .dialog_header .header_center {
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        text-align: center;
        vertical-align: middle
    }

    .fb_dialog_content .dialog_content {
        background: url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
        border: 1px solid #4a4a4a;
        border-bottom: 0;
        border-top: 0;
        height: 150px
    }

    .fb_dialog_content .dialog_footer {
        background: #f5f6f7;
        border: 1px solid #4a4a4a;
        border-top-color: #ccc;
        height: 40px
    }

    #fb_dialog_loader_close {
        float: left
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
        visibility: hidden
    }

    #fb_dialog_loader_spinner {
        animation: rotateSpinner 1.2s linear infinite;
        background-color: transparent;
        background-image: url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
        background-position: 50% 50%;
        background-repeat: no-repeat;
        height: 24px;
        width: 24px
    }

    @keyframes rotateSpinner {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .fb_iframe_widget {
        display: inline-block;
        position: relative
    }

    .fb_iframe_widget span {
        display: inline-block;
        position: relative;
        text-align: justify
    }

    .fb_iframe_widget iframe {
        position: absolute
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
        max-width: 100%
    }

    .fb_iframe_widget_fluid_desktop iframe {
        min-width: 220px;
        position: relative
    }

    .fb_iframe_widget_lift {
        z-index: 1
    }

    .fb_iframe_widget_fluid {
        display: inline
    }

    .fb_iframe_widget_fluid span {
        width: 100%
    }

    .fb_mpn_mobile_landing_page_slide_out {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_landing_page_slide_out_from_left {
        animation-duration: 200ms;
        animation-name: fb_mpn_landing_page_slide_out_from_left;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_landing_page_slide_up {
        animation-duration: 500ms;
        animation-name: fb_mpn_landing_page_slide_up;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_in {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_in;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_out {
        animation-duration: 300ms;
        animation-name: fb_mpn_bounce_out;
        transition-timing-function: ease-in
    }

    .fb_mpn_mobile_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_mpn_fade_out;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_v2;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_in_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_in_from_left;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_v2 {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_v2;
        transition-timing-function: ease-in
    }

    .fb_customer_chat_bounce_out_from_left {
        animation-duration: 300ms;
        animation-name: fb_bounce_out_from_left;
        transition-timing-function: ease-in
    }

    .fb_invisible_flow {
        display: inherit;
        height: 0;
        overflow-x: hidden;
        width: 0
    }

    @keyframes fb_mpn_landing_page_slide_out {
        0% {
            margin: 0 12px;
            width: 100% - 24px
        }

        60% {
            border-radius: 18px
        }

        100% {
            border-radius: 50%;
            margin: 0 24px;
            width: 60px
        }
    }

    @keyframes fb_mpn_landing_page_slide_out_from_left {
        0% {
            left: 12px;
            width: 100% - 24px
        }

        60% {
            border-radius: 18px
        }

        100% {
            border-radius: 50%;
            left: 12px;
            width: 60px
        }
    }

    @keyframes fb_mpn_landing_page_slide_up {
        0% {
            bottom: 0;
            opacity: 0
        }

        100% {
            bottom: 24px;
            opacity: 1
        }
    }

    @keyframes fb_mpn_bounce_in {
        0% {
            opacity: .5;
            top: 100%
        }

        100% {
            opacity: 1;
            top: 0
        }
    }

    @keyframes fb_mpn_fade_out {
        0% {
            bottom: 30px;
            opacity: 1
        }

        100% {
            bottom: 0;
            opacity: 0
        }
    }

    @keyframes fb_mpn_bounce_out {
        0% {
            opacity: 1;
            top: 0
        }

        100% {
            opacity: .5;
            top: 100%
        }
    }

    @keyframes fb_bounce_in_v2 {
        0% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom right
        }

        50% {
            transform: scale(1.03, 1.03);
            transform-origin: bottom right
        }

        100% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom right
        }
    }

    @keyframes fb_bounce_in_from_left {
        0% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom left
        }

        50% {
            transform: scale(1.03, 1.03);
            transform-origin: bottom left
        }

        100% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom left
        }
    }

    @keyframes fb_bounce_out_v2 {
        0% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom right
        }

        100% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom right
        }
    }

    @keyframes fb_bounce_out_from_left {
        0% {
            opacity: 1;
            transform: scale(1, 1);
            transform-origin: bottom left
        }

        100% {
            opacity: 0;
            transform: scale(0, 0);
            transform-origin: bottom left
        }
    }

    @keyframes slideInFromBottom {
        0% {
            opacity: .1;
            transform: translateY(100%)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

    @keyframes slideInFromBottomDelay {
        0% {
            opacity: 0;
            transform: translateY(100%)
        }

        97% {
            opacity: 0;
            transform: translateY(100%)
        }

        100% {
            opacity: 1;
            transform: translateY(0)
        }
    }

</style>
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
                        Step 4 of 6</h2>
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

                    <form id="formSteps2" method="POST" class="pl_step2" name="place_room_offered_st_2">
                        <input type="hidden" name="current_step" value="thehousehold">
                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1707173134">
                        @csrf
                        <input type="hidden" name="draft_advert_id" value="BCxFhSbtBd2BvQ8_zTi6mA">
                        <input type="hidden" name="postcode" value="{{ $property['postcode']}}">
                        <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">
                        <input type="hidden" name="property_type" value="{{ $property['property_type']}}">
                        <input type="hidden" name="property_type_more" value="">

                        <input type="hidden" name="advertiser_role" value="{{ $property['advertiser_role']}}">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="neighbourhood_id" value="{{ $property['neighbourhood_id']}}">
                        <input type="hidden" name="M_context" value="28">
                        <input type="hidden" name="address_uuid" value="">
                        <input type="hidden" name="neighbourhood" value="{{ $property['neighbourhood'] }}">
                        <input type="hidden" name="street_name" value="{{ $property['street_name'] }}">

                        <input type="hidden" name="no_of_mins" value="{{ $property['no_of_mins']}}">
                        <input type="hidden" name="no_of_mins_by" value="{{ $property['no_of_mins_by'] }}">
                        <input type="hidden" name="station" value="{{ $property['station'] }}">
                        <input type="hidden" name="living_room" value="{{ $property['living_room'] }}">

                        <input type="hidden" name="off_street_parking" value="{{ $property['off_street_parking'] }}">
                        <input type="hidden" name="garden" value="{{ $property['garden'] }}">
                        <input type="hidden" name="garage" value="{{ $property['garage'] }}">
                        <input type="hidden" name="balcony" value="{{ $property['balcony'] }}">
                        <input type="hidden" name="disabled_access" value="{{ $property['disabled_access'] }}">

                        <input type="hidden" name="rooms_for_rent" value="{{ $property['rooms_for_rent'] }}">
                        <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">

                        <input type="hidden" name="roomstatus" value="{{ $property['roomstatus'] }}">
                        <input type="hidden" name="roomprice" value="{{ $property['roomprice'] }}">
                        <input type="hidden" name="roomper" value="{{ $property['roomper'] }}">
                        <input type="hidden" name="roomtype" value="{{ $property['roomtype'] }}">
                        <input type="hidden" name="roomensuite" value="{{ $property['roomensuite'] }}">


                        <input type="hidden" name="roomfurnishings" value="{{ $property['roomfurnishings'] }}">
                        <input type="hidden" name="roomsecurity_deposit" value="{{ $property['roomsecurity_deposit'] }}">

                        <input type="hidden" name="day_avail" value="{{ $property['day_avail'] }}">
                        <input type="hidden" name="month_avail" value="{{ $property['month_avail'] }}">
                        <input type="hidden" name="year_avail" value="{{ $property['year_avail'] }}">

                        <input type="hidden" name="min_term" value="{{ $property['min_term'] }}">
                        <input type="hidden" name="max_term" value="{{ $property['max_term'] }}">
                        <input type="hidden" name="short_lets_considered" value="{{ $property['short_lets_considered'] }}">
                        <input type="hidden" name="days_of_wk_available" value="{{ $property['days_of_wk_available'] }}">
                        <input type="hidden" name="references_needed" value="{{ $property['references_needed'] }}">

                        <input type="hidden" name="bills_inc" value="{{ $property['bills_inc'] }}">
                        <input type="hidden" name="broadband" value="{{ $property['broadband'] }}">

                        <fieldset>
                            <legend>The Existing Flatmates</legend>
                            <input type="hidden" name="occupants" value="{{ $property['occupants'] }}">
                            <div class="form_row form_row_smoking">
                                <div class="form_label">
                                    Smoking
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="smoking_current">
                                            <option value="N" @if(old('smoking_current') == 'N' || $property['smoking_current'] == 'N') selected @endif>No</option>
                                            <option value="Y" @if(old('smoking_current') == 'Y' || $property['smoking_current'] == 'Y') selected @endif>Yes</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_gender ">
                                <div class="form_label">
                                    Gender
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="gender">
                                            <option value="NULL">Select...</option>
                                            <option value="FFF" @if(old('gender') == 'FFF' || $property['gender'] == 'FFF') selected @endif>
                                                3 Females
                                            </option>
                                            <option value="FFM" @if(old('gender') == 'FFF' || $property['gender'] == 'FFM') selected @endif>
                                                2 Females, 1 Male
                                            </option>
                                            <option value="MMF" @if(old('gender') == 'FFF' || $property['gender'] == 'MMF') selected @endif>
                                                2 Males, 1 Female
                                            </option>
                                            <option value="MMM" @if(old('gender') == 'FFF' || $property['gender'] == 'MMM') selected @endif>
                                                3 Males
                                            </option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_occupation">
                                <div class="form_label">
                                    Occupation
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="share_type">
                                            <option value="ND" @if(old('share_type') == 'ND' || $property['share_type'] == 'ND') selected @endif>
                                                Not disclosed
                                            </option>
                                            <option value="S" @if(old('share_type') == 'S' || $property['share_type'] == 'S') selected @endif>
                                                Student
                                            </option>
                                            <option value="P" @if(old('share_type') == 'P' || $property['share_type'] == 'P') selected @endif>
                                                Professional
                                            </option>
                                            <option value="O" @if(old('share_type') == 'O' || $property['share_type'] == 'O') selected @endif>
                                                <param name="" value="">
                                            </option>
                                            <option value="M" @if(old('share_type') == 'M' || $property['share_type'] == 'M') selected @endif>
                                                Mixed
                                            </option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_campus" style="display: none;">
                                <div class="form_label">
                                    If student(s), which university?
                                    <div class="form_hint">
                                        (optional)
                                    </div>
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="campus">
                                            <option value="">Not applicable/not disclosed</option>

                                            <option value="University of Lagos" @if(old('campus') == 'University of Lagos' || $property['campus'] == 'University of Lagos') selected @endif>
                                                University of Lagos (0.35 miles away)
                                            </option>
                                            <option value="Lagos State University" @if(old('campus') == 'Lagos State University' || $property['campus'] == 'Lagos State University') selected @endif>
                                                Lagos State University (2.5 miles away)
                                            </option>
                                            <option value="Yaba College of Technology" @if(old('campus') == 'Yaba College of Technology' || $property['campus'] == 'Yaba College of Technology') selected @endif>
                                                Yaba College of Technology (5.5 miles away)
                                            </option>
                                            <option value="Caleb University" @if(old('campus') == 'Caleb University' || $property['campus'] == 'Caleb University') selected @endif>
                                                Caleb University (10.5 miles away)
                                            </option>
                                            <option value="Pan-Atlantic University" @if(old('campus') == 'Pan-Atlantic University' || $property['campus'] == 'Pan-Atlantic University') selected @endif>
                                                Pan-Atlantic University (12.5 miles away)
                                            </option>
                                            <option value="Lagos Business School" @if(old('campus') == 'Lagos Business School' || $property['campus'] == 'Lagos Business School') selected @endif>
                                                Lagos Business School (12.5 miles away)
                                            </option>
                                            <option value="Babcock University" @if(old('campus') == 'Babcock University ' || $property['campus'] == 'Babcock University') selected @endif>
                                                Babcock University (30 miles away)
                                            </option>
                                            <option value="Redeemer's University" @if(old('campus') == 'Redeemer\'s University' || $property['campus'] == 'Redeemer\'s University') selected @endif>
                                                Redeemer's University (30 miles away)
                                            </option>
                                            <option value="Other" @if(old('campus') == 'Other' || $property['campus'] == 'Other') selected @endif>
                                                Other
                                            </option>
                                        </select>
                                    </span>
                                </div>
                            </div>


                            <div class="form_row form_row_pets">
                                <div class="form_label">
                                    Pets
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="pets">
                                            <option value="N" @if(old('pets') == 'N' || $property['pets'] == 'N') selected @endif>No</option>
                                            <option value="Y" @if(old('pets') == 'Y' || $property['pets'] == 'Y') selected @endif>Yes</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_age">
                                <div class="form_label">
                                    Ages
                                </div>

                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="min_age">
                                            <option value="null">-</option>
                                            @for ($i = 18; $i < 100; $i++) 
                                            <option value="{{ $i }}" @if(old('min_age') == $i || $property['min_age'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                    to
                                    <span class="form_input form_select">
                                        <select name="max_age">
                                            <option value="null">-</option>
                                            @for ($i = 18; $i < 100; $i++)
                                            <option value="{{ $i }}" @if(old('max_age') == $i || $property['max_age'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_language">
                                <div class="form_label">
                                    Language
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="lang">
                                            <option value="english" @if(old('lang') == 'english' || $property['lang'] == 'english') selected @endif>
                                                English
                                            </option>
                                            <option value="french" @if(old('lang') == 'french' || $property['lang'] == 'french') selected @endif>
                                                French
                                            </option>
                                            <option value="hausa" @if(old('lang') == 'hausa' || $property['lang'] == 'hausa') selected @endif>
                                                Hausa
                                            </option>
                                            <option value="igbo" @if(old('lang') == 'igbo' || $property['lang'] == 'igbo') selected @endif>
                                                Igbo
                                            </option>
                                            <option value="yoruba" @if(old('lang') == 'yoruba' || $property['lang'] == 'yoruba') selected @endif>
                                                Yoruba
                                            </option>
                                            <option value="other" @if(old('lang') == 'other' || $property['lang'] == 'other') selected @endif>
                                                Other
                                            </option>
                                            <option value="mixed" @if(old('lang') == 'mixed' || $property['lang'] == 'mixed') selected @endif>
                                                Mixed
                                            </option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_nationality">
                                <div class="form_label">
                                    Nationality
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <span id="nationality-select" data-selected="">
                                            <select name="nationality">
                                                <option value="">Not disclosed</option>
                                                <option value="Afghan">Afghan</option>
                                                <option value="Albanian">Albanian</option>
                                                <option value="Algerian">Algerian</option>
                                                <option value="American">American</option>
                                                <option value="Andorran">Andorran</option>
                                                <option value="Angolan">Angolan</option>
                                                <option value="Anguillan">Anguillan</option>
                                                <option value="Antigua and Barbuda">Citizen of Antigua and Barbuda</option>
                                                <option value="Argentine">Argentine</option>
                                                <option value="Armenian">Armenian</option>
                                                <option value="Australian">Australian</option>
                                                <option value="Austrian">Austrian</option>
                                                <option value="Azerbaijani">Azerbaijani</option>
                                                <option value="Bahamian">Bahamian</option>
                                                <option value="Bahraini">Bahraini</option>
                                                <option value="Bangladeshi">Bangladeshi</option>
                                                <option value="Barbadian">Barbadian</option>
                                                <option value="Belarusian">Belarusian</option>
                                                <option value="Belgian">Belgian</option>
                                                <option value="Belizean">Belizean</option>
                                                <option value="Beninese">Beninese</option>
                                                <option value="Bermudian">Bermudian</option>
                                                <option value="Bhutanese">Bhutanese</option>
                                                <option value="Bolivian">Bolivian</option>
                                                <option value="Bosnia and Herzegovina">Citizen of Bosnia and Herzegovina</option>
                                                <option value="Botswanan">Botswanan</option>
                                                <option value="Brazilian">Brazilian</option>
                                                <option value="British">British</option>
                                                <option value="British Virgin Islander">British Virgin Islander</option>
                                                <option value="Bruneian">Bruneian</option>
                                                <option value="Bulgarian">Bulgarian</option>
                                                <option value="Burkinan">Burkinan</option>
                                                <option value="Burmese">Burmese</option>
                                                <option value="Burundian">Burundian</option>
                                                <option value="Cambodian">Cambodian</option>
                                                <option value="Cameroonian">Cameroonian</option>
                                                <option value="Canadian">Canadian</option>
                                                <option value="Cape Verdean">Cape Verdean</option>
                                                <option value="Cayman Islander">Cayman Islander</option>
                                                <option value="Central African">Central African</option>
                                                <option value="Chadian">Chadian</option>
                                                <option value="Chilean">Chilean</option>
                                                <option value="Chinese">Chinese</option>
                                                <option value="Colombian">Colombian</option>
                                                <option value="Comoran">Comoran</option>
                                                <option value="Congolese (Congo)">Congolese (Congo)</option>
                                                <option value="Congolese (DRC)">Congolese (DRC)</option>
                                                <option value="Cook Islander">Cook Islander</option>
                                                <option value="Costa Rican">Costa Rican</option>
                                                <option value="Croatian">Croatian</option>
                                                <option value="Cuban">Cuban</option>
                                                <option value="Cymraes">Cymraes</option>
                                                <option value="Cymro">Cymro</option>
                                                <option value="Cypriot">Cypriot</option>
                                                <option value="Czech">Czech</option>
                                                <option value="Danish">Danish</option>
                                                <option value="Djiboutian">Djiboutian</option>
                                                <option value="Dominican (Commonwealth)">Dominican (Commonwealth)</option>
                                                <option value="Dominican (Republic)">Dominican (Republic)</option>
                                                <option value="Dutch">Dutch</option>
                                                <option value="East Timorese">East Timorese</option>
                                                <option value="Ecuadorean">Ecuadorean</option>
                                                <option value="Egyptian">Egyptian</option>
                                                <option value="Emirati">Emirati</option>
                                                <option value="English">English</option>
                                                <option value="Equatorial Guinean">Equatorial Guinean</option>
                                                <option value="Eritrean">Eritrean</option>
                                                <option value="Estonian">Estonian</option>
                                                <option value="Ethiopian">Ethiopian</option>
                                                <option value="Faroese">Faroese</option>
                                                <option value="Fijian">Fijian</option>
                                                <option value="Filipino">Filipino</option>
                                                <option value="Finnish">Finnish</option>
                                                <option value="French">French</option>
                                                <option value="Gabonese">Gabonese</option>
                                                <option value="Gambian">Gambian</option>
                                                <option value="Georgian">Georgian</option>
                                                <option value="German">German</option>
                                                <option value="Ghanaian">Ghanaian</option>
                                                <option value="Gibraltarian">Gibraltarian</option>
                                                <option value="Greek">Greek</option>
                                                <option value="Greenlandic">Greenlandic</option>
                                                <option value="Grenadian">Grenadian</option>
                                                <option value="Guamanian">Guamanian</option>
                                                <option value="Guatemalan">Guatemalan</option>
                                                <option value="Guinea-Bissau">Citizen of Guinea-Bissau</option>
                                                <option value="Guinean">Guinean</option>
                                                <option value="Guyanese">Guyanese</option>
                                                <option value="Haitian">Haitian</option>
                                                <option value="Honduran">Honduran</option>
                                                <option value="Hong Konger">Hong Konger</option>
                                                <option value="Hungarian">Hungarian</option>
                                                <option value="Icelandic">Icelandic</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Indonesian">Indonesian</option>
                                                <option value="Iranian">Iranian</option>
                                                <option value="Iraqi">Iraqi</option>
                                                <option value="Irish">Irish</option>
                                                <option value="Israeli">Israeli</option>
                                                <option value="Italian">Italian</option>
                                                <option value="Ivorian">Ivorian</option>
                                                <option value="Jamaican">Jamaican</option>
                                                <option value="Japanese">Japanese</option>
                                                <option value="Jordanian">Jordanian</option>
                                                <option value="Kazakh">Kazakh</option>
                                                <option value="Kenyan">Kenyan</option>
                                                <option value="Kittitian">Kittitian</option>
                                                <option value="Kiribati">Citizen of Kiribati</option>
                                                <option value="Kosovan">Kosovan</option>
                                                <option value="Kuwaiti">Kuwaiti</option>
                                                <option value="Kyrgyz">Kyrgyz</option>
                                                <option value="Lao">Lao</option>
                                                <option value="Latvian">Latvian</option>
                                                <option value="Lebanese">Lebanese</option>
                                                <option value="Liberian">Liberian</option>
                                                <option value="Libyan">Libyan</option>
                                                <option value="Liechtenstein citizen">Liechtenstein citizen</option>
                                                <option value="Lithuanian">Lithuanian</option>
                                                <option value="Luxembourger">Luxembourger</option>
                                                <option value="Macanese">Macanese</option>
                                                <option value="Macedonian">Macedonian</option>
                                                <option value="Malagasy">Malagasy</option>
                                                <option value="Malawian">Malawian</option>
                                                <option value="Malaysian">Malaysian</option>
                                                <option value="Maldivian">Maldivian</option>
                                                <option value="Malian">Malian</option>
                                                <option value="Maltese">Maltese</option>
                                                <option value="Marshallese">Marshallese</option>
                                                <option value="Martiniquais">Martiniquais</option>
                                                <option value="Mauritanian">Mauritanian</option>
                                                <option value="Mauritian">Mauritian</option>
                                                <option value="Mexican">Mexican</option>
                                                <option value="Micronesian">Micronesian</option>
                                                <option value="Moldovan">Moldovan</option>
                                                <option value="Monegasque">Monegasque</option>
                                                <option value="Mongolian">Mongolian</option>
                                                <option value="Montenegrin">Montenegrin</option>
                                                <option value="Montserratian">Montserratian</option>
                                                <option value="Moroccan">Moroccan</option>
                                                <option value="Mosotho">Mosotho</option>
                                                <option value="Mozambican">Mozambican</option>
                                                <option value="Namibian">Namibian</option>
                                                <option value="Nauruan">Nauruan</option>
                                                <option value="Nepalese">Nepalese</option>
                                                <option value="New Zealander">New Zealander</option>
                                                <option value="Nicaraguan">Nicaraguan</option>
                                                <option value="Nigerian">Nigerian</option>
                                                <option value="Nigerien">Nigerien</option>
                                                <option value="Niuean">Niuean</option>
                                                <option value="North Korean">North Korean</option>
                                                <option value="Northern Irish">Northern Irish</option>
                                                <option value="Norwegian">Norwegian</option>
                                                <option value="Omani">Omani</option>
                                                <option value="Pakistani">Pakistani</option>
                                                <option value="Palauan">Palauan</option>
                                                <option value="Palestinian">Palestinian</option>
                                                <option value="Panamanian">Panamanian</option>
                                                <option value="Papua New Guinean">Papua New Guinean</option>
                                                <option value="Paraguayan">Paraguayan</option>
                                                <option value="Peruvian">Peruvian</option>
                                                <option value="Pitcairn Islander">Pitcairn Islander</option>
                                                <option value="Polish">Polish</option>
                                                <option value="Portuguese">Portuguese</option>
                                                <option value="Prydeinig">Prydeinig</option>
                                                <option value="Puerto Rican">Puerto Rican</option>
                                                <option value="Qatari">Qatari</option>
                                                <option value="Romanian">Romanian</option>
                                                <option value="Russian">Russian</option>
                                                <option value="Rwandan">Rwandan</option>
                                                <option value="Salvadorean">Salvadorean</option>
                                                <option value="Sammarinese">Sammarinese</option>
                                                <option value="Samoan">Samoan</option>
                                                <option value="Sao Tomean">Sao Tomean</option>
                                                <option value="Saudi Arabian">Saudi Arabian</option>
                                                <option value="Scottish">Scottish</option>
                                                <option value="Senegalese">Senegalese</option>
                                                <option value="Serbian">Serbian</option>
                                                <option value="Seychelles">Citizen of Seychelles</option>
                                                <option value="Sierra Leonean">Sierra Leonean</option>
                                                <option value="Singaporean">Singaporean</option>
                                                <option value="Slovak">Slovak</option>
                                                <option value="Slovenian">Slovenian</option>
                                                <option value="Solomon Islander">Solomon Islander</option>
                                                <option value="Somali">Somali</option>
                                                <option value="South African">South African</option>
                                                <option value="South Korean">South Korean</option>
                                                <option value="South Sudanese">South Sudanese</option>
                                                <option value="Spanish">Spanish</option>
                                                <option value="Sri Lankan">Sri Lankan</option>
                                                <option value="St Helenian">St Helenian</option>
                                                <option value="St Lucian">St Lucian</option>
                                                <option value="Stateless">Stateless</option>
                                                <option value="Sudanese">Sudanese</option>
                                                <option value="Surinamese">Surinamese</option>
                                                <option value="Swazi">Swazi</option>
                                                <option value="Swedish">Swedish</option>
                                                <option value="Swiss">Swiss</option>
                                                <option value="Syrian">Syrian</option>
                                                <option value="Taiwanese">Taiwanese</option>
                                                <option value="Tajik">Tajik</option>
                                                <option value="Tanzanian">Tanzanian</option>
                                                <option value="Thai">Thai</option>
                                                <option value="Togolese">Togolese</option>
                                                <option value="Tongan">Tongan</option>
                                                <option value="Trinidadian">Trinidadian</option>
                                                <option value="Tristanian">Tristanian</option>
                                                <option value="Tunisian">Tunisian</option>
                                                <option value="Turkish">Turkish</option>
                                                <option value="Turkmen">Turkmen</option>
                                                <option value="Turks and Caicos Islander">Turks and Caicos Islander</option>
                                                <option value="Tuvaluan">Tuvaluan</option>
                                                <option value="Ugandan">Ugandan</option>
                                                <option value="Ukrainian">Ukrainian</option>
                                                <option value="Uruguayan">Uruguayan</option>
                                                <option value="Uzbek">Uzbek</option>
                                                <option value="Vatican citizen">Vatican citizen</option>
                                                <option value="Vanuatu">Citizen of Vanuatu</option>
                                                <option value="Venezuelan">Venezuelan</option>
                                                <option value="Vietnamese">Vietnamese</option>
                                                <option value="Vincentian">Vincentian</option>
                                                <option value="Wallisian">Wallisian</option>
                                                <option value="Welsh">Welsh</option>
                                                <option value="Yemeni">Yemeni</option>
                                                <option value="Zambian">Zambian</option>
                                                <option value="Zimbabwean">Zimbabwean</option>
                                            </select></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_interests">
                                <div class="form_label">
                                    Interests
                                </div>

                                <div class="form_inputs">
                                    <div id="sharedInterests" data-post-ad-type="offered" data-advertiser-role="live in landlord">
                                        <div class="shared-interests">
                                            <h3 class="shared-interests__heading shared-interests__heading--form">Your interests</h3>
                                            <div class="shared-interests__form-elements shared-interests__form-elements--desktop">
                                                <button type="button" class="button button--secondary" tabindex="0" id="shared_interests_button">Add interests</button>
                                            </div>
                                        </div>
                                    </div>

                                    <span class="form_input form_text" style="display: none;">
                                        <input type="text" name="interests" value="" size="48" maxlength="255">
                                    </span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>
                                Preferences For New flatmate
                            </legend>

                            <div class="form_row form_row_smoking">
                                <div class="form_label">
                                    Smoking
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="smoking">
                                            <option value="Y" @if(old('smoking') == 'Y' || $property['smoking'] == 'Y') selected @endif>No Preference</option>
                                            <option value="N" @if(old('smoking') == 'N' || $property['smoking'] == 'N') selected @endif>No</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_gender">
                                <div class="form_label">
                                    Gender
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="gender_req">
                                            <option value="N" @if(old('gender_req') == 'N' || $property['gender_req'] == 'N') selected @endif>No preference</option>
                                            <option value="M" @if(old('gender_req') == 'M' || $property['gender_req'] == 'M') selected @endif>Male</option>
                                            <option value="F" @if(old('gender_req') == 'F' || $property['gender_req'] == 'F') selected @endif>Female</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_occupation">
                                <div class="form_label">
                                    Occupation
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="share_type_req">
                                            <option value="N" @if(old('share_type_req') == 'N' || $property['share_type_req'] == 'N') selected @endif>No preference</option>
                                            <option value="S" @if(old('share_type_req') == 'S' || $property['share_type_req'] == 'S') selected @endif>Student</option>
                                            <option value="P" @if(old('share_type_req') == 'P' || $property['share_type_req'] == 'P') selected @endif>Professional</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_pets">
                                <div class="form_label">
                                    Pets considered
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="pets_req">
                                            <option value="N" @if(old('pets_req') == 'N' || $property['pets_req'] == 'N') selected @endif>No</option>
                                            <option value="Y" @if(old('pets_req') == 'Y' || $property['pets_req'] == 'Y') selected @endif>Yes</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_min_age">
                                <div class="form_label">
                                    Minimum age
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="min_age_req">
                                            <option value="null">-</option>
                                            @for ($i = 18; $i < 100; $i++)
                                            <option value="{{ $i }}" @if(old('min_age_req') == $i || $property['min_age_req'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_max_age">
                                <div class="form_label">
                                    Maximum age
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="max_age_req">
                                            <option value="null">-</option>
                                            @for ($i = 18; $i < 100; $i++)
                                            <option value="{{ $i }}" @if(old('max_age_req') == $i || $property['max_age_req'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_language">
                                <div class="form_label">
                                    Language
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="lang_req">
                                            <option value="english" @if(old('lang_req') == 'english' || $property['lang_req'] == 'english') selected @endif>English</option>
                                            <option value="french" @if(old('lang_req') == 'french' || $property['lang_req'] == 'french') selected @endif>French</option>
                                            <option value="hausa" @if(old('lang_req') == 'hausa' || $property['lang_req'] == 'hausa') selected @endif>Hausa</option>
                                            <option value="igbo" @if(old('lang_req') == 'igbo' || $property['lang_req'] == 'igbo') selected @endif>Igbo</option>
                                            <option value="yoruba" @if(old('lang_req') == 'yoruba' || $property['lang_req'] == 'yoruba') selected @endif>Yoruba</option>
                                            <option value="other" @if(old('lang_req') == 'other' || $property['lang_req'] == 'other') selected @endif>Other</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_couples">
                                <div class="form_label">
                                    Couples welcome?
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input">
                                        <label><input type="radio" name="couples" value="N" @if(old('couples') == 'N' || $property['couples'] == 'N') checked @endif> No </label>
                                        <label><input type="radio" name="couples" value="Y" @if(old('couples') == 'Y' || $property['couples'] == 'Y') checked @endif> Yes </label>
                                    </span>
                                    <div class="form_hint">
                                        Specify any rent adjustments in your ad description on next step
                                    </div>
                                </div>
                            </div>

                            <div class="form_row form_row_misc">
                                <div class="form_label">
                                    Other preferences
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="vegetarians" value="Y" @if(old('vegetarians') == 'Y' || $property['vegetarians'] == 'Y') checked @endif> Vegetarian/vegan preferred
                                    </label>
                                </div>
                            </div>

                            <div class="form_row ">
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
                        </fieldset>

                        <input type="hidden" name="ad_title" value="{{ $property['ad_title'] }}">
                        <input type="hidden" name="ad_text" value="{{ $property['ad_text'] }}">
                        <input type="hidden" name="first_name" value="{{ $property['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $property['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $property['display_last_name'] }}">
                        <input type="hidden" name="custom_ref" value="">
                        <input type="hidden" name="tel" value="">
                        <input type="hidden" name="display_tel" value="N">
                        <input type="hidden" name="login_reg" value="login">
                        <input type="hidden" name="login_email" value="{{ $property['youremail'] }}">
                        <input type="hidden" name="login_password" value="">
                        <input type="hidden" name="email" value="felixdaniel2056@gmail.com">
                        <input type="hidden" name="email_again" value="">
                        <input type="hidden" name="password" value="">
                        <input type="hidden" name="password_again" value="">

                        <input type="hidden" name="emailnotify" value="">
                        <input type="hidden" name="emailnewsletters" value="!emailnewsletters!">
                        <input type="hidden" name="where_heard" value="!where_heard|attr_escape!">

                        <input type="hidden" name="emailspeedflatmating" value="N">
                        <input type="hidden" name="emailfrom3rdparties" value="N">
                        <input type="hidden" name="inagreement" value="Y">

                        <input type="hidden" name="usertype" value="haveashare">
                        <input type="hidden" name="usertype_new" value="haveashare">
                        <input type="hidden" name="ad_type" value="offered">
                        <input type="hidden" name="scp" value="N">
                        <input type="hidden" name="suitableforsharing" value="Y">
                        <input type="hidden" name="sale_or_rent" value="rental">
                        <input type="hidden" name="information" value="full">
                        <input type="hidden" name="theproperty" value="">
                        <input type="hidden" name="therooms" value="">
                        <input type="hidden" name="thehousehold" value="yes">
                        <input type="hidden" name="theadvert" value="">
                        <input type="hidden" name="theaccount" value="">
                        <input type="hidden" name="fees_apply" value="N">
                    </form>
                </div>

                <div class="grecaptcha-container"></div>
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
