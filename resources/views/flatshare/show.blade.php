@extends('layouts.app')

@section('title', 'Info & Advice Overview')

@section('body-id', 'SUBPAGEdetails')
@section('body-class', 'PAGElistings mode_details_page')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/57ce87311c39360de88e5eee646813b3.css">
<link rel="stylesheet" href="/css/detail_desktop.6c6d34397872027a15ce.css">
<link rel="stylesheet" href="/css/3ae1a8fd92dbc39e0d4b46efb7893ee6.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-12" id="mainheader">
        <div id="listing_heading">
            <p id="back_to_search_results">
                <a href="/flatshare/lagos" class="back_link">Back to search results</a>
            </p>

            <h1>
                {{ $property->ad_title }}
            </h1>
        </div>
    </div>

    <div class="listing listing--property layoutrow">
        <div class="bold_listing">
            <div class="">
                <div class="page-tabs page-tabs--bold">
                    <a class="page-tabs__tab page-tabs__tab--active" data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="tab-ad-details" href="/flatshare/flatshare_detail.pl?flatshare_id=16440164&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow">
                        <h2 class="page-tabs__h2"><i class="far fa-list-alt page-tabs__icon"></i>Ad details</h2>
                    </a><a class="page-tabs__tab " data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="tab-contact" href="/flatshare/flatshare_detail.pl?flatshare_id=16440164&amp;mode=contact&amp;submode=byemail&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;upgrade_required=1&amp;" title="Email advertiser" rel="nofollow"><span class="page-tabs__h2"><i class="far fa-envelope page-tabs__icon"></i>Message</span></a><a class="page-tabs__tab " data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="tab-tel" href="/flatshare/flatshare_detail.pl?flatshare_id=16440164&amp;mode=contact&amp;submode=bytel&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;upgrade_required=1&amp;" title="Phone advertiser" rel="nofollow"><span class="page-tabs__h2"><i class="far fa-phone page-tabs__icon"></i>Call</span></a>
                </div>

                <div class="block block_simple detail_page_tab_content">
                    <div class=" detail_page_tab_content_inner">
                        <div id="listing_header" class="listing-header">

                            <ul id="listing_tools" class="listing-tools">

                                <li class="unsuitable">
                                    <a href="/flatshare/shortlist.pl?function=unsuitable&amp;flatshare_id=16440164&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=" title="To save time later, hide this ad" rel="nofollow">Hide ad</a>
                                </li>
                                <li class="save">
                                    <a href="/flatshare/shortlist.pl?function=add&amp;flatshare_id=16440164&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=" rel="nofollow">Save</a>
                                </li>

                                <li>
                                    Share
                                    <div id="share" class="share" data-advert-id="16440164" data-flatshare-type="offered" data-social-share-title="double rooms Birmingham ( B8 )" data-social-share-utm="advert_share">
                                        <div class="share__container">
                                            <div class="share-button"><a href="https://api.whatsapp.com/send?text=double rooms Birmingham ( B8 )https%3A%2F%2Fwww.spareroom.co.uk%2F16440164%3Futm_source%3DwhatsApp%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button__button share-button__button--whatsApp" title="whatsApp share">
                                                    <div class="share-button__icon"><i class="fab fa-whatsapp"></i></div>
                                                </a></div>
                                            <div class="share-button"><a href="fb-messenger://share?link=https%3A%2F%2Fwww.spareroom.co.uk%2F16440164%3Futm_source%3Dmessenger%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button__button share-button__button--messenger" title="messenger share">
                                                    <div class="share-button__icon"><i class="fab fa-facebook-messenger"></i></div>
                                                </a></div>
                                            <div class="share-button"><a href="/flatshare/tellafriend.pl?advert_id=16440164&amp;flatshare_type=offered" class="share-button__button share-button__button--email" title="email share">
                                                    <div class="share-button__icon"><i class="far fa-envelope"></i></div>
                                                </a></div>
                                            <div class="share-button"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.spareroom.co.uk%2F16440164%3Futm_source%3Dfacebook%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button__button share-button__button--facebook" title="facebook share">
                                                    <div class="share-button__icon"><i class="fab fa-facebook-f"></i></div>
                                                </a></div>
                                            <div class="share-button"><a href="http://twitter.com/share?text=double rooms Birmingham ( B8 )&amp;url=https%3A%2F%2Fwww.spareroom.co.uk%2F16440164%3Futm_source%3Dtwitter%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button__button share-button__button--twitter" title="twitter share">
                                                    <div class="share-button__icon"><i class="fab fa-twitter"></i></div>
                                                </a></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <p id="listing_ref" class="listing-ref">
                                <span class="boosted_listing">
                                    Ad ref# {{ $property->id }}
                                </span>
                            </p>
                        </div>

                        <!-- main col section -->
                        <div class="listing__content grid-8-4-4">
                            <div class="property-intro">
                                <div class="photo-gallery">
                                    <dl class="photo-gallery__main-image-wrapper landscape">
                                        <dt class="photo-gallery__main-image-dt">
                                            <a href="{{ $property->featured_image }}" title="Photo 1" data-src="{{ $property->featured_image }}" data-number="1" data-caption="Photo 1" data-title="{{ $property->ad_title }}" data-subtitle="House share - B8" data-price="{{ $property->currency_roomprice }}" data-per="pw" data-pricepre="" target="_blank" class="photo-gallery__thumbnail-link">
                                                <img class="photo-gallery__main-image" src="{{ $property->featured_image }}" alt="Photo 1">
                                            </a>
                                        </dt>
                                        <dd class="caption sr-only"></dd>
                                    </dl>

                                    <div class="photo-gallery__thumbnails photo-gallery__thumbnails--has-photos">
                                        @foreach ($property->images as $image)
                                        <a href="{{ $image->path }}" title="{{ $image->name }}" data-src="{{ $image->path }}" data-number="{{ $image->position }}" data-caption="{{ $image->caption }}" data-title="{{ $property->ad_title }}" data-subtitle="House share - B8" data-price="£1" data-per="pw" data-pricepre="" target="_blank" class="photo-gallery__thumbnail-link">
                                            <img src="https://photos2.spareroom.co.uk/images/flatshare/listings/square/85/96/85966782.jpg" alt="Photo 2">
                                        </a>
                                        @endforeach
                                    </div>
                                </div>

                                <p class="detaildesc">{{ $property->ad_text }}</p>
                            </div>
                            
                            <div class="property-details">
                                <section class="feature feature--details">
                                    <ul class="key-features">
                                        <li class="key-features__feature">House share</li>
                                        <li class="key-features__feature">{{ $property->neighbourhood }}</li>
                                        <li class="key-features__feature">B8 <small class="key-features__area-info"></small></li>
                                    </ul>
                                </section>

                                <section class="feature feature--price_room_only">
                                    <ul class="room-list">
                                        @for ($i = 0; $i < $property->rooms_for_rent; $i++)
                                        <li class="room-list__room">
                                            <strong class="room-list__price">{{ $property->currency_roomprice }} {{ $property->roomper }}</strong>
                                            <small>({{ $property->roomtype }})</small>
                                        </li>
                                        @endfor
                                    </ul>
                                </section>

                                <section class="feature feature--map">
                                    <a href="#map" data-overlay-target="detail-map-popup" data-overlay-type="popUp" class="ir view_on_map_v4 map_link" title="Open a map view of the property"></a>
                                    <div data-overlay-name="detail-map-popup" "="" class=" property-map">
                                        <div id="map"></div>
                                    </div>
                                </section>

                                <section class="feature feature--availability">
                                    <h3 class="feature__heading">Availability</h3>
                                    <dl class="feature-list">
                                        <dt class="feature-list__key">Available</dt>
                                        <dd class="feature-list__value">{{ $property->roomstatus }}</dd>
                                        <dt class="feature-list__key">Minimum term</dt>
                                        <dd class="feature-list__value">{{ $property->min_term }}</dd>
                                        <dt class="feature-list__key">Maximum term</dt>
                                        <dd class="feature-list__value">{{ $property->max_term }}</dd>
                                    </dl>

                                    @if ($property->short_lets_considered == 'Y')
                                    <ul class="feature-list">
                                        <li>Short lets considered</li>
                                    </ul>
                                    @endif
                                </section>

                                <section class="feature feature--extra-cost">
                                    <h3 class="feature__heading">Extra cost</h3>
                                    <dl class="feature-list">
                                        @if ($property->roomsecurity_deposit > 0)
                                        @for ($i = 0; $i < $property->rooms_for_rent; $i++)
                                        <dt class="feature-list__key">Deposit<br>(Room {{ $i + 1 }})</dt>
                                        <dd class="feature-list__value">{{ $property->currency_roomsecurity_deposit }}</dd>
                                        @endfor
                                        @endif

                                        @if ($property->bills_inc)
                                        <dt class="feature-list__key">Bills included?</dt>
                                        <dd class="feature-list__value">{{ ucfirst($property->bills_inc) }}</dd>
                                        @endif
                                    </dl>
                                </section>

                                <section class="feature feature--amenities">
                                    <h3 class="feature__heading">Amenities</h3>
                                    <dl class="feature-list">
                                        <dt class="feature-list__key">Furnishings</dt>
                                        <dd class="feature-list__value">{{ ucfirst($property->roomfurnishings) }}</dd>

                                        <dt class="feature-list__key">Parking</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->off_street_parking == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Garage</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->garage == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Garden/terrace</dt>
                                        <dd class="feature-list__value">
                                            <span class="tick">
                                                @if ($property->garden == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Balcony/patio</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->balcony == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Disabled access</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->disabled_access == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Living room</dt>
                                        <dd class="feature-list__value">
                                            <span class="tick">{{ ucfirst($property->living_room) }}</span>
                                        </dd>

                                        <dt class="feature-list__key">Broadband included</dt>
                                        <dd class="feature-list__value">
                                            <span class="tick">
                                                @if ($property->broadband == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>
                                    </dl>
                                </section>

                                <section class="feature feature--household-preferences">
                                    <h3 class="feature__heading">New housemate preferences</h3>
                                    <dl class="feature-list">
                                        <dt class="feature-list__key">Couples OK?</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->couples == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Smoking OK?</dt>
                                        <dd class="feature-list__value">
                                            <span class="tick">
                                                @if ($property->smoking == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Pets OK?</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->pets == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Occupation</dt>
                                        <dd class="feature-list__value">
                                            @if ($property->share_type_req == 'N') Don't mind
                                            @elseif ($property->share_type_req == 'S') Student
                                            @elseif ($property->share_type_req == 'P') Professional
                                            @endif
                                        </dd>

                                        <dt class="feature-list__key">References?</dt>
                                        <dd class="feature-list__value">
                                            <span class="cross">
                                                @if ($property->references_needed == 'Y') Yes @else No @endif
                                            </span>
                                        </dd>

                                        <dt class="feature-list__key">Gender</dt>
                                        <dd class="feature-list__value">
                                            @if ($property->gender_ref == 'N') No preference
                                            @elseif ($property->gender_ref == 'M') Male only
                                            @elseif ($property->gender_ref == 'F') Female only
                                            @endif
                                        </dd>
                                    </dl>
                                </section>
                            </div>

                            <aside>
                                <div class="block block_bubble block_contact contact_the_advertiser">
                                    <div class="block_header">
                                        <h3>
                                            Contact <span>the advertiser</span>
                                        </h3>
                                    </div>
                                    <div class="block_content block_areas">

                                        <div class="block_area block_area_first">
                                            <div itemscope="" itemtype="http://schema.org/Person" class="advertiser-info">
                                                <div class="profile-photo__wrap profile-photo__show-viewer  advert-details__profile-photo-wrap" id="" data-tracking-profile-is="theirs">
                                                    <button type="button" class="profile-photo__img-wrap profile-photo__img-wrap--btn" data-profile-modal="user-profile" data-uuid="0keBf07iChILf9ThhFaEhQ">
                                                        <img class="profile-photo advert-details__profile-photo" alt="Photograph of Bridge Housing UK" src="https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif" onerror="this.src='https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif'; this.onerror=null; " width="100" height="100">
                                                        <span class="sr-only">View the profile of Bridge Housing UK</span>
                                                    </button>
                                                    <strong class="profile-photo__name" itemprop="name">Bridge Housing UK</strong>
                                                </div>

                                                <em>live out landlord</em>

                                                <p class="response-small">
                                                    <span class="last-online light-grey">Last active:</span>
                                                    <span class="last-online">just now</span>


                                                    <span class="last-online vertical-bar"> | </span>
                                                    <span class="last-online light-grey">Response rate:</span>
                                                    <span class="last-online">Average</span>
                                                </p>
                                            </div>

                                            <ul class="contact_methods">
                                                <li class="emailadvertiser"><a class="button button--wide" data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="contact-box-email" href="/flatshare/flatshare_detail.pl?flatshare_id=16440164&amp;mode=contact&amp;submode=byemail&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;upgrade_required=1&amp;" title="Email advertiser" rel="nofollow"><span><i class="far fa-envelope"></i>&nbsp;&nbsp;Message</span></a> </li>

                                                <li class="phoneadvertiser"><a class="button button--wide button--secondary" data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="contact-box-tel" href="/flatshare/flatshare_detail.pl?flatshare_id=16440164&amp;mode=contact&amp;submode=bytel&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;upgrade_required=1&amp;" title="Phone advertiser" rel="nofollow"><span><i class="far fa-phone"></i>&nbsp;&nbsp;Call</span></a> </li>

                                            </ul>
                                        </div> <!-- end block_area -->

                                        <div class="block_area hurry">
                                            <p class="hurry__text">
                                                In a hurry?<a class="bluebuttontextlink" title="Show interest - you'll appear in the advertiser's list of Who's Interested in their ad" data-ga-event-category="Listing Details" data-ga-event-action="clicked" data-ga-event-label="show-interest-offered" href="/flatshare/shortlist.pl?function=add&amp;context=interest&amp;flatshare_id=16440164&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=" rel="nofollow"> Show interest </a>and we will send the advertiser your profile
                                            </p>
                                        </div>

                                        <div class="block_area block_area_last"></div>
                                    </div>
                                </div>

                                <section class="tip-box tip-box--desktop">
                                    <header class="tip-box__header">
                                        <h3 class="tip-box__heading"><i class="far fa-shield-alt tip-box__icon"></i>Stay safe</h3>
                                    </header>
                                    <div class="tip-box__div">
                                        <div class="tip-box__tips">
                                            <strong>TIP: </strong>Always view before you pay any money
                                            <div class="tip-box__links">

                                                <a href="/content/info-tenants/safety-tips-for-room-seekers/">See more</a>

                                                <button class="button button--link report-ad-link report-ad-modal-link"><span class="report-ad-link__icon"><i class="far fa-exclamation-triangle" aria-hidden="true"></i></span>Report this ad</button>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="block block_simple other_listings features">
                                    <div class="block_header">
                                        <h3>
                                            More from the same advertiser
                                        </h3>
                                    </div>
                                    <ul class="block_content block_areas">

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16440221&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported Accommodation Birmingham </span></a>
                                            <span class="feature-list__item-text">Yardley
                                                from £1
                                                pw
                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16819614&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported Accommodation Available </span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £40
                                                pcm


                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16764841&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Rooms Birmingham </span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £40
                                                pcm


                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=17127837&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported Accommodation </span></a>
                                            <span class="feature-list__item-text">King's Norton

                                                from £40
                                                pcm


                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16765328&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Birmingham Rooms</span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £40
                                                pcm


                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16605039&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported accommodation Birmingham</span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £10

                                                pw

                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16462356&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported Accommodation Birmingham </span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £5
                                                pcm


                                            </span>
                                        </li>

                                        <li class="block_area">
                                            <a href="/flatshare/flatshare_detail.pl?flatshare_id=16462349&amp;mode=details&amp;flatshare_type=offered&amp;search_id=&amp;search_results=%2Fflatshare%2Fbirmingham&amp;city_id=16&amp;featured=&amp;alert_id=&amp;alert_type=&amp;" title="View ad details" rel="nofollow"><span>Supported Accommodation Birmingham </span></a>
                                            <span class="feature-list__item-text">Birmingham

                                                from £5
                                                pcm


                                            </span>
                                        </li>

                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block block_simple report_listing">
        <div class="block_content">
            <h3>Report this ad</h3>
            <div class="cols cols2">
                <div class="col col_first">
                    <p>
                        We have staff moderating our ads 7 days per week, to keep quality high.
                        Please help us in our job and <button class="button button--link report-ad-modal-link">let us know</button>
                        if there is any problem with this ad, for example:

                    </p>
                </div>
                <div class="col col_last">
                    <ul class="bulletlist">
                        <li>The photos are not of the room advertised</li>
                        <li>The description is misleading</li>
                        <li>The ad is generic rather than for a specific available room</li>



                        <li>The advertiser is not




                            a live out landlord


                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js')
<script src="/js/e0c43c978ea516935f9ded8af409ac54.js"></script>
<script src="/js/afd4a6fe3a2092398169fed73c7980e1.js"></script>
<script src="/js/detail_desktop.c80dbb82273b2a855031.js"></script>
<style>
    .desktop .address_lookup {
        max-width: 90%;
        flex-direction: column;
    }

</style>
@endsection
