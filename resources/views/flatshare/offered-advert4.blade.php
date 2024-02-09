@extends('layouts.app')

@section('title', 'Advertise your room for rent STEP 3 of 6')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/5053de057a976a94af2b72c3d738bc3e.css">
<link rel="stylesheet" href="/css/photo_uploads.73493d827894b0af651c.css">
<link rel="stylesheet" href="/css/shared_interests/shared_interests_desktop.95f8609ee352ab1d4574.css">
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
                    <h2>Step 3 of 6</h2>
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
                        <input type="hidden" name="current_step" value="therooms">
                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1707116944">
                        @csrf
                        <input type="hidden" name="draft_advert_id" value="BCxFhSbtBd2BvQ8_zTi6mA">
                        <input type="hidden" name="postcode" value="{{ $property['postcode']}}">
                        <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">
                        <input type="hidden" name="property_type" value="{{ $property['property_type']}}">
                        <input type="hidden" name="advertiser_role" value="{{ $property['advertiser_role']}}">
                        <input type="hidden" name="advertiser_role_other" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="neighbourhood_id" value="{{ $property['neighbourhood_id'] }}">
                        <input type="hidden" name="M_context" value="28">
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

                        <fieldset>
                            <legend>The room</legend>
                            <input type="hidden" name="rooms_for_rent" value="{{ $property['rooms_for_rent'] }}">
                            <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">
                            <input type="hidden" name="roomstatus" value="{{ $property['roomstatus'] }}">
                            
                            <div class="form_row form_row_cost ">
                                <div class="form_label">
                                    Cost of room
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <span class="form_currency_symbol">₦</span>
                                        <input type="number" name="roomprice" size="6" step="any" class="@error('roomprice') is-invalid @enderror" value="{{ old('roomprice') ?? $property['roomprice'] }}">
                                    </span>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomper" value="pw" @if(old('roomper') == 'pw' || $property['roomper'] == 'pw') checked @endif> per week
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomper" value="pcm" @if(old('roomper') == 'pcm' || $property['roomper'] == 'pcm') checked @endif> per calendar month
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_room_size">
                                <div class="form_label">
                                    Size of room
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomtype" value="single" class="@error('roomtype') is-invalid @enderror" @if(old('roomtype') == 'single' || $property['roomtype'] == 'single') checked @endif> Single
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomtype" checked="" value="double" class="@error('roomtype') is-invalid @enderror" @if(old('roomtype') == 'double' || $property['roomtype'] == 'double') checked @endif> Double
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_amenities">
                                <div class="form_label">
                                    Amenities
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="roomensuite" value="Y" @if(old('roomensuite') == 'Y' || $property['roomensuite'] == 'Y') checked @endif> Ensuite
                                        <span class="form_hint">(tick if room has own toilet and/or bath/shower)</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_amenities">
                                <div class="form_label">
                                    Furnishings
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomfurnishings" value="furnished" @if(old('roomfurnishings') == 'furnished' || $property['roomfurnishings'] == 'furnished') checked @endif> Furnished
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomfurnishings" value="unfurnished" @if(old('roomfurnishings') == 'unfurnished' || $property['roomfurnishings'] == 'unfurnished') checked @endif> Unfurnished
                                    </label>
                                </div>
                            </div>


                            <div class="form_row form_row_deposit ">
                                <div class="form_label">
                                    Security deposit
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <span class="form_currency_symbol">₦</span> 
                                        <input type="number" name="roomsecurity_deposit" value="" step="any" min="0" onkeypress="return event.key >= 0 &amp;&amp; event.key <= 9 || event.which >= 48 &amp;&amp; event.which <= 57" class="@error('roomsecurity_deposit') is-invalid @enderror" value="{{ old('roomsecurity_deposit') ?? $property['roomsecurity_deposit'] }}">
                                        <a class="offered-ad__deposit-limit-link">Check deposit limits</a>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_avail_from ">
                                <div class="form_label">
                                    Available from
                                </div>

                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="day_avail">
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}" @if(old('day_avail') == $i || $property['day_avail'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                    <span class="form_input form_select">
                                        <select name="month_avail">
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}" @if(old('month_avail') == $i || $property['month_avail'] == $i) selected @endif>{{ date('M', mktime(0, 0, 0, $i, 10)) }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                    <span class="form_input form_select">
                                        <select name="year_avail">
                                            @for ($i = date('Y'); $i <= date('Y') + 5; $i++)
                                                <option value="{{ $i }}" @if(old('year_avail') == $i || $property['year_avail'] == $i) selected @endif>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_min_term">
                                <div class="form_label">
                                    Minimum stay
                                </div>

                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="min_term">
                                            <option value="0" selected="">No minimum</option>
                                            @for ($i = 1; $i <= 36; $i++)
                                                <option value="{{ $i }}" @if(old('min_term') == $i || $property['min_term'] == $i) selected @endif>{{ $i }} {{ $i > 1 ? 'months' : 'month' }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_max_term">
                                <div class="form_label">
                                    Maximum stay
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="max_term">
                                            <option value="0" selected="">No maximum</option>
                                            @for ($i = 1; $i <= 36; $i++)
                                                <option value="{{ $i }}" @if(old('max_term') == $i || $property['max_term'] == $i) selected @endif>{{ $i }} {{ $i > 1 ? 'months' : 'month' }}</option>
                                            @endfor
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_short_term">
                                <div class="form_label">
                                    Short term lets considered?
                                    <div class="form_hint">
                                        (i.e. 1 week to 3 months)
                                    </div>
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="short_lets_considered" value="Y" @if(old('short_lets_considered') == 'Y' || $property['short_lets_considered'] == 'Y') checked @endif>
                                        Tick for yes
                                    </label>
                                    <span class="form_hint">
                                        *Please specify any rent adjustments in your ad description (step 5).
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_days_avail">
                                <div class="form_label">
                                    Days available
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="days_of_wk_available" id="days_of_wk_available">
                                            <option value="7_days_a_week" @if(old('days_of_wk_available') == '7_days_a_week' || $property['days_of_wk_available'] == '7_days_a_week') selected @endif>
                                                7 days a week
                                            </option>
                                            <option value="mon_to_fri_only" @if(old('days_of_wk_available') == 'mon_to_fri_only' || $property['days_of_wk_available'] == 'mon_to_fri_only') selected @endif>
                                                Mon to Fri only
                                            </option>
                                            <option value="weekends_only" @if(old('days_of_wk_available') == 'weekends_only' || $property['days_of_wk_available'] == 'weekends_only') selected @endif>
                                                Weekends only
                                            </option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_ref_req">
                                <div class="form_label">
                                    References required?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="references_needed" value="Y" @if(old('references_needed') == 'Y' || $property['references_needed'] == 'Y') checked @endif> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="references_needed" checked="" value="N" @if(old('references_needed') == 'N' || $property['references_needed'] == 'N') checked @endif> No
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_bills_inc">
                                <div class="form_label">
                                    Bills included?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="yes" @if(old('bills_inc') == 'yes' || $property['bills_inc'] == 'yes') checked @endif> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="no" @if(old('bills_inc') == 'no' || $property['bills_inc'] == 'no') checked @endif> No
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="some" @if(old('bills_inc') == 'some' || $property['bills_inc'] == 'some') checked @endif> Some
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_broadband">
                                <div class="form_label">
                                    Broadband included?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="broadband" value="Y" @if(old('broadband') == 'Y' || $property['broadband'] == 'Y') checked @endif> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="broadband" value="N" @if(old('broadband') == 'N' || $property['broadband'] == 'N') checked @endif> No
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

                        <input type="hidden" name="occupants" value="{{ $property['occupants'] }}">
                        <input type="hidden" name="campus" value="{{ $property['campus'] }}">
                        <input type="hidden" name="gender" value="{{ $property['gender'] }}">
                        <input type="hidden" name="interests" value="{{ $property['interests'] }}">
                        <input type="hidden" name="lang" value="{{ $property['lang'] }}">
                        <input type="hidden" name="max_age" value="{{ $property['max_age'] }}">
                        <input type="hidden" name="min_age" value="{{ $property['min_age'] }}">
                        <input type="hidden" name="nationality" value="{{ $property['nationality'] }}">
                        <input type="hidden" name="pets" value="{{ $property['pets'] }}">
                        <input type="hidden" name="share_type" value="{{ $property['share_type'] }}">
                        <input type="hidden" name="smoking_current" value="{{ $property['smoking'] }}">
                        <input type="hidden" name="pets_req" value="{{ $property['pets_req'] }}">
                        <input type="hidden" name="share_type_req" value="{{ $property['share_type_req'] }}">
                        <input type="hidden" name="smoking" value="{{ $property['smoking'] }}">
                        <input type="hidden" name="couples" value="{{ $property['couples'] }}">
                        <input type="hidden" name="gender_req" value="{{ $property['gender_req'] }}">
                        <input type="hidden" name="lang_req" value="{{ $property['lang_req'] }}">
                        <input type="hidden" name="max_age_req" value="{{ $property['max_age_req'] }}">
                        <input type="hidden" name="min_age_req" value="{{ $property['min_age_req'] }}">
                        <input type="hidden" name="vegetarians" value="{{ $property['vegetarians'] }}">
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
                        <input type="hidden" name="therooms" value="yes">
                        <input type="hidden" name="thehousehold" value="">
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
{{-- <script src="/js/0049b2402d621d16f4454fa73bc2b916.js"></script> --}}
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
