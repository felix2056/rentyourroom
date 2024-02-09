@extends('layouts.app')

@section('title', 'Advertise your room for rent STEP 2 of 6')

@section('body-id', 'SUBPAGEroom')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/5053de057a976a94af2b72c3d738bc3e.css">
<link rel="stylesheet" href="/css/photo_uploads.73493d827894b0af651c.css">
<link rel="stylesheet" href="/css/shared_interests/shared_interests_desktop.95f8609ee352ab1d4574.css">
<link rel="stylesheet" href="/css/offered.83cbf40a69d89e11e681.css">
<style type="text/css" data-fbcssmodules="css:f5053de057a976a94af2b72c3d738bc3eb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
    .fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
    .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
    .fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
    .fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style>
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
                        Step 2 of 6</h2>
                </div>

                <div class="block_content">
                    <div id="deposit_warning_popup"></div>
                    @if ($errors->any())
                    <p class="msg error">
                        <strong>There was an error with your submission</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </p>
                    @endif
                    <form id="formSteps2" method="POST" class="pl_step2" name="place_room_offered_st_2">
                        <input type="hidden" name="current_step" value="theproperty">
                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1707113585">
                        @csrf
                        <input type="hidden" name="draft_advert_id" value="BCxFhSbtBd2BvQ8_zTi6mA">

                        <input type="hidden" name="postcode" value="{{ $property['postcode'] }}">
                        <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">
                        <input type="hidden" name="property_type" value="{{ $property['property_type'] }}">

                        <input type="hidden" name="property_type_more" value="{{ $property['property_type_more'] }}">

                        <input type="hidden" name="advertiser_role" value="{{ $property['advertiser_role'] }}">
                        <input type="hidden" name="advertiser_role_other" value="{{ $property['advertiser_role_other'] }}">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="neighbourhood_id" value="{{ $property['neighbourhood_id'] }}">
                        <input type="hidden" name="M_context" value="28">
                        <input type="hidden" name="address_uuid" value="">


                        <fieldset>
                            <legend>More about the property</legend>

                            <!-- <input type="hidden" name="expected_min_price_pw" value="30"> -->
                            <!-- <input type="hidden" name="expected_max_price_pw" value="350"> -->

                            <div class="form_row form_row_area_drop">
                                <div class="form_label">
                                    Area
                                </div>
                                <div class="form_inputs">
                                    <span class="form_input form_select">
                                        <select name="neighbourhood" id="neighbourhood" class="@error('neighbourhood') form_error @enderror">
                                            <option value="">Select area...</option>
                                            @foreach (\App\Models\City::all() as $city)
                                            <option value="{{ $city->name }}" @if(old('neighbourhood') == $city->name || $property['neighbourhood'] == $city->name) selected @endif>{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    @error('neighbourhood')
                                    <span class="form_input form_error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_row form_row_street" style="margin-bottom: -10px;">
                                <div class="form_label">Address of property</div>
                                <div class="form_inputs">
                                    <span class="">
                                        <p class="form_input" style="margin-bottom: 0px; margin-left: 3px;">
                                            {{ $property['street_name'] }}
                                            <p style="padding-bottom: 0px; margin-left: 0px;">{{ $property['postcode'] }}</p>
                                        </p>
                                        {{-- <input type="text" name="street_name" value="{{ old('street_name') ?? $property['street_name'] }}" maxlength="60" style="visibility: hidden; height: 0px; padding: 0px; border: 0px; font-size: 0px;"> --}}
                                    </span>
                                </div>
                            </div>

                            <div class="form_row form_row_transport">
                                <div class="form_label">
                                    Transport
                                </div>
                                <div class="form_inputs">
                                    <select name="no_of_mins">
                                        <option value="" selected="">Select...</option>
                                        <option value="5" @if(old('no_of_mins') == 5 || $property['no_of_mins'] == 5) selected @endif>0-5</option>
                                        <option value="10" @if(old('no_of_mins') == 10 || $property['no_of_mins'] == 10) selected @endif>5-10</option>
                                        <option value="15" @if(old('no_of_mins') == 15 || $property['no_of_mins'] == 15) selected @endif>10-15</option>
                                        <option value="20" @if(old('no_of_mins') == 20 || $property['no_of_mins'] == 20) selected @endif>15-20</option>
                                        <option value="25" @if(old('no_of_mins') == 25 || $property['no_of_mins'] == 25) selected @endif>20-25</option>
                                        <option value="30" @if(old('no_of_mins') == 30 || $property['no_of_mins'] == 30) selected @endif>25-30+</option>
                                    </select> minutes

                                    <select name="no_of_mins_by">
                                        <option value="" selected="">Select...</option>
                                        <option value="walk" @if(old('no_of_mins_by') == 'walk' || $property['no_of_mins_by'] == 'walk') selected @endif>by walk</option>
                                        <option value="car" @if(old('no_of_mins_by') == 'car' || $property['no_of_mins_by'] == 'car') selected @endif>by car</option>
                                        <option value="bus" @if(old('no_of_mins_by') == 'bus' || $property['no_of_mins_by'] == 'bus') selected @endif>by bus</option>
                                        <option value="tram" @if(old('no_of_mins_by') == 'tram' || $property['no_of_mins_by'] == 'tram') selected @endif>by tram</option>
                                    </select>

                                    from
                                    <select name="station">
                                        <option value="" selected="">Select...</option>
                                        <option value="CANNONSTREET">Cannon Street</option>
                                        <option value="BANKMONUMENT">Bank / Monument</option>
                                        <option value="MANSIONHOUSE">Mansion House</option>
                                        <option value="FENCHURCHSTREET">Fenchurch Street</option>
                                        <option value="STPAULS">St. Paul's</option>
                                        <option value="MOORGATE">Moorgate</option>
                                        <option value="LONDONBRIDGE">London Bridge</option>
                                        <option value="LIVERPOOLSTREET">Liverpool Street</option>
                                        <option value="TOWERHILL">Tower Hill</option>
                                        <option value="ALDGATE">Aldgate</option>
                                        <option value="TOWERGATEWAY">Tower Gateway</option>
                                        <option value="BLACKFRIARS">Blackfriars</option>
                                        <option value="CITYTHAMESLINK">City Thameslink</option>
                                        <option value="ALDGATEEAST">Aldgate East</option>
                                        <option value="BARBICAN">Barbican</option>
                                        <option value="BOROUGH">Borough</option>
                                        <option value="SOUTHWARK">Southwark</option>
                                        <option value="FARRINGDON">Farringdon</option>
                                        <option value="SHOREDITCH">Shoreditch High Street</option>
                                        <option value="OLDSTREET">Old Street</option>
                                        <option value="WATERLOOEAST">Waterloo East</option>
                                        <option value="TEMPLE">Temple</option>
                                        <option value="CHANCERYLANE">Chancery Lane</option>
                                        <option value="ELEPHANTCASTLE">Elephant &amp; Castle</option>
                                        <option value="WATERLOO">Waterloo</option>
                                        <option value="LAMBETHNORTH">Lambeth North</option>
                                        <option value="SHADWELL">Shadwell</option>
                                        <option value="WHITECHAPEL">Whitechapel</option>
                                        <option value="BERMONDSEY">Bermondsey</option>
                                        <option value="HOLBORN">Holborn</option>
                                        <option value="WAPPING">Wapping</option>
                                        <option value="HOXTON">Hoxton</option>
                                        <option value="BETHNALGREEN">Bethnal Green Rail</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form_row form_row_living_room">
                                <div class="form_label">
                                    Living room?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="living_room" value="shared" @if(old('living_room') == 'shared' || $property['living_room'] == 'shared') checked @endif> Yes, there is a shared living room
                                        @error('living_room')
                                        <span class="form_input form_error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="living_room" value="own" @if(old('living_room') == 'own' || $property['living_room'] == 'own') checked @endif> Yes, but it's only for my use
                                        @error('living_room')
                                        <span class="form_input form_error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="living_room" value="none" @if(old('living_room') == 'none' || $property['living_room'] == 'none') checked @endif> No, there is no living room
                                        @error('living_room')
                                        <span class="form_input form_error">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                            </div>

                            <div class="form_row form_row_amenities">
                                <div class="form_label">
                                    Amenities
                                </div>
                                <div class="form_inputs">
                                    <div class="cols cols2">
                                        <div class="col col_first">
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="off_street_parking" value="Y" @if(old('off_street_parking') == 'Y' || $property['off_street_parking'] == 'Y') checked @endif> Off-street parking
                                                @error('off_street_parking')
                                                <span class="form_input form_error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="garden" value="Y" @if(old('garden') == 'Y' || $property['garden'] == 'Y') checked @endif> Garden/roof terrace
                                                @error('garden')
                                                <span class="form_input form_error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="garage" value="Y" @if(old('garage') == 'Y' || $property['garage'] == 'Y') checked @endif> Garage
                                                @error('garage')
                                                <span class="form_input form_error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                        <div class="col col_last">
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="balcony" value="Y" @if(old('balcony') == 'Y' || $property['balcony'] == 'Y') checked @endif> Balcony/patio
                                                @error('balcony')
                                                <span class="form_input form_error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="disabled_access" value="Y" @if(old('disabled_access') == 'Y' || $property['disabled_access'] == 'Y') checked @endif> Disabled access
                                                @error('disabled_access')
                                                <span class="form_input form_error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_row ">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <div class="btn-wrapper">
                                        <div>
                                            <button class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</button> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <input type="hidden" name="rooms_for_rent" value="{{ $property['rooms_for_rent'] }}">
                        <input type="hidden" name="rooms_in_property" value="{{ $property['rooms_in_property'] }}">

                        <input type="hidden" name="roomstatus" value="{{ $property['roomstatus'] }}">
                        <input type="hidden" name="roomprice" value="{{ $property['roomprice'] }}">
                        <input type="hidden" name="roomper" value="{{ $property['roomper'] }}">
                        <input type="hidden" name="roomtype" value="{{ $property['roomtype'] }}">
                        <input type="hidden" name="roomensuite" value="{{ $property['roomensuite'] }}">

                        <input type="hidden" name="roomfurnishings" value="{{ $property['roomfurnishings'] }}">
                        <input type="hidden" name="roomsecurity_deposit" value="{{ $property['roomsecurity_deposit'] }}">

                        <input type="hidden" name="day_avail" value="05">
                        <input type="hidden" name="month_avail" value="{{ $property['month_avail'] }}">
                        <input type="hidden" name="year_avail" value="{{ $property['year_avail'] }}">

                        <input type="hidden" name="min_term" value="{{ $property['min_term'] }}">
                        <input type="hidden" name="max_term" value="{{ $property['max_term'] }}">

                        <input type="hidden" name="short_lets_considered" value="{{ $property['short_lets_considered'] }}">
                        <input type="hidden" name="days_of_wk_available" value="{{ $property['days_of_wk_available'] }}">
                        <input type="hidden" name="references_needed" value="{{ $property['references_needed'] }}">
                        <input type="hidden" name="bills_inc" value="{{ $property['bills_inc'] }}">
                        <input type="hidden" name="broadband" value="{{ $property['broadband'] }}">
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
                        <input type="hidden" name="smoking_current" value="{{ $property['smoking_current'] }}">


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
                        <input type="hidden" name="last_name" value="{{ $property['last_name'] }}">
                        <input type="hidden" name="display_last_name" value="{{ $property['display_last_name'] }}">
                        <input type="hidden" name="custom_ref" value="">
                        <input type="hidden" name="tel" value="{{ $property['tel'] }}">
                        <input type="hidden" name="display_tel" value="{{ $property['display_tel'] }}">

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
                        <input type="hidden" name="theproperty" value="yes">
                        <input type="hidden" name="therooms" value="">
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
