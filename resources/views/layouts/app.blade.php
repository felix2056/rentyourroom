<!DOCTYPE html>
<!--[if lte IE 7 ]>
<html class="desktop uk ie ie7 logged_out no-js" lang="en-GB">
<![endif]-->
<!--[if IE 8 ]>
<html class="desktop uk ie ie8 logged_out no-js" lang="en-GB">
<![endif]-->
<!--[if IE 9 ]>
<html class="desktop uk ie ie9 logged_out no-js" lang="en-GB">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]> -->
<html class="desktop uk logged_out no-js" lang="en-GB">
<!-- <![endif]-->

<head>
    <style>
        .hidden-overlay {
            display: none
        }

    </style>
    <meta charset="iso-8859-1">
    <meta name="language" content="en-GB">
    <meta name="author" content="SpareRoom">
    <meta name="robots" content="all,index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1">
    <meta name="description" content="Find a flatshare or flatmate fast! 1000s of rooms for rent in flatshares across Nigeria, Manchester, Birmingham, Bristol, Leeds, Edinburgh, Glasgow and the rest of the Nigeria. Advertise for free! As seen on TV.">
    <meta name="keywords" content="flatshare,flat share, house share, house share, flat share, house share, houseshare, roommate, shared accommodation, rooms to let, room to let, rooms to let, rent room, room for rent, rooms to rent, rooms for rent, housemates, flatshares, flatmates, flatshare, student accommodation, Spare Room">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <script>
        var _rollbarConfig = {
            accessToken: '7f5c6331ec8a4bcdb17c0275d8f67283'
            , captureUncaught: true
            , captureUnhandledRejections: true
            , hostSafeList: ['spareroom.co.uk', 'spareroom.com']
            , ignoreDuplicateErrors: true
            , payload: {
                environment: 'production-uk'
                , client: {
                    javascript: {
                        source_map_enabled: true
                        , code_version: '1.0'
                    }
                },

            }
        };
        // Rollbar Snippet
        ! function(r) {
            var e = {};

            function o(n) {
                if (e[n]) return e[n].exports;
                var t = e[n] = {
                    i: n
                    , l: !1
                    , exports: {}
                };
                return r[n].call(t.exports, t, t.exports, o), t.l = !0, t.exports
            }
            o.m = r, o.c = e, o.d = function(r, e, n) {
                o.o(r, e) || Object.defineProperty(r, e, {
                    enumerable: !0
                    , get: n
                })
            }, o.r = function(r) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(r, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(r, "__esModule", {
                    value: !0
                })
            }, o.t = function(r, e) {
                if (1 & e && (r = o(r)), 8 & e) return r;
                if (4 & e && "object" == typeof r && r && r.__esModule) return r;
                var n = Object.create(null);
                if (o.r(n), Object.defineProperty(n, "default", {
                        enumerable: !0
                        , value: r
                    }), 2 & e && "string" != typeof r)
                    for (var t in r) o.d(n, t, function(e) {
                        return r[e]
                    }.bind(null, t));
                return n
            }, o.n = function(r) {
                var e = r && r.__esModule ? function() {
                    return r.default
                } : function() {
                    return r
                };
                return o.d(e, "a", e), e
            }, o.o = function(r, e) {
                return Object.prototype.hasOwnProperty.call(r, e)
            }, o.p = "", o(o.s = 0)
        }([function(r, e, o) {
            "use strict";
            var n = o(1)
                , t = o(4);
            _rollbarConfig = _rollbarConfig || {}, _rollbarConfig.rollbarJsUrl = _rollbarConfig.rollbarJsUrl || "https://cdn.rollbar.com/rollbarjs/refs/tags/v2.20.0/rollbar.min.js", _rollbarConfig.async = void 0 === _rollbarConfig.async || _rollbarConfig.async;
            var a = n.setupShim(window, _rollbarConfig)
                , l = t(_rollbarConfig);
            window.rollbar = n.Rollbar, a.loadFull(window, document, !_rollbarConfig.async, _rollbarConfig, l)
        }, function(r, e, o) {
            "use strict";
            var n = o(2);

            function t(r) {
                return function() {
                    try {
                        return r.apply(this, arguments)
                    } catch (r) {
                        try {
                            console.error("[Rollbar]: Internal error", r)
                        } catch (r) {}
                    }
                }
            }
            var a = 0;

            function l(r, e) {
                this.options = r, this._rollbarOldOnError = null;
                var o = a++;
                this.shimId = function() {
                    return o
                }, "undefined" != typeof window && window._rollbarShims && (window._rollbarShims[o] = {
                    handler: e
                    , messages: []
                })
            }
            var i = o(3)
                , s = function(r, e) {
                    return new l(r, e)
                }
                , d = function(r) {
                    return new i(s, r)
                };

            function c(r) {
                return t((function() {
                    var e = this
                        , o = Array.prototype.slice.call(arguments, 0)
                        , n = {
                            shim: e
                            , method: r
                            , args: o
                            , ts: new Date
                        };
                    window._rollbarShims[this.shimId()].messages.push(n)
                }))
            }
            l.prototype.loadFull = function(r, e, o, n, a) {
                var l = !1
                    , i = e.createElement("script")
                    , s = e.getElementsByTagName("script")[0]
                    , d = s.parentNode;
                i.crossOrigin = "", i.src = n.rollbarJsUrl, o || (i.async = !0), i.onload = i.onreadystatechange = t((function() {
                    if (!(l || this.readyState && "loaded" !== this.readyState && "complete" !== this.readyState)) {
                        i.onload = i.onreadystatechange = null;
                        try {
                            d.removeChild(i)
                        } catch (r) {}
                        l = !0
                            , function() {
                                var e;
                                if (void 0 === r._rollbarDidLoad) {
                                    e = new Error("rollbar.js did not load");
                                    for (var o, n, t, l, i = 0; o = r._rollbarShims[i++];)
                                        for (o = o.messages || []; n = o.shift();)
                                            for (t = n.args || [], i = 0; i < t.length; ++i)
                                                if ("function" == typeof(l = t[i])) {
                                                    l(e);
                                                    break
                                                }
                                }
                                "function" == typeof a && a(e)
                            }()
                    }
                })), d.insertBefore(i, s)
            }, l.prototype.wrap = function(r, e, o) {
                try {
                    var n;
                    if (n = "function" == typeof e ? e : function() {
                            return e || {}
                        }, "function" != typeof r) return r;
                    if (r._isWrap) return r;
                    if (!r._rollbar_wrapped && (r._rollbar_wrapped = function() {
                            o && "function" == typeof o && o.apply(this, arguments);
                            try {
                                return r.apply(this, arguments)
                            } catch (o) {
                                var e = o;
                                throw e && ("string" == typeof e && (e = new String(e)), e._rollbarContext = n() || {}, e._rollbarContext._wrappedSource = r.toString(), window._rollbarWrappedError = e), e
                            }
                        }, r._rollbar_wrapped._isWrap = !0, r.hasOwnProperty))
                        for (var t in r) r.hasOwnProperty(t) && (r._rollbar_wrapped[t] = r[t]);
                    return r._rollbar_wrapped
                } catch (e) {
                    return r
                }
            };
            for (var u = "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","), p = 0; p < u.length; ++p) l.prototype[u[p]] = c(u[p]);
            r.exports = {
                setupShim: function(r, e) {
                    if (r) {
                        var o = e.globalAlias || "Rollbar";
                        if ("object" == typeof r[o]) return r[o];
                        r._rollbarShims = {}, r._rollbarWrappedError = null;
                        var a = new d(e);
                        return t((function() {
                            e.captureUncaught && (a._rollbarOldOnError = r.onerror, n.captureUncaughtExceptions(r, a, !0), e.wrapGlobalEventHandlers && n.wrapGlobals(r, a, !0)), e.captureUnhandledRejections && n.captureUnhandledRejections(r, a, !0);
                            var t = e.autoInstrument;
                            return !1 !== e.enabled && (void 0 === t || !0 === t || "object" == typeof t && t.network) && r.addEventListener && (r.addEventListener("load", a.captureLoad.bind(a)), r.addEventListener("DOMContentLoaded", a.captureDomContentLoaded.bind(a))), r[o] = a, a
                        }))()
                    }
                }
                , Rollbar: d
            }
        }, function(r, e, o) {
            "use strict";

            function n(r, e, o, n) {
                r._rollbarWrappedError && (n[4] || (n[4] = r._rollbarWrappedError), n[5] || (n[5] = r._rollbarWrappedError._rollbarContext), r._rollbarWrappedError = null);
                var t = e.handleUncaughtException.apply(e, n);
                o && o.apply(r, n), "anonymous" === t && (e.anonymousErrorsPending += 1)
            }

            function t(r, e, o) {
                if (e.hasOwnProperty && e.hasOwnProperty("addEventListener")) {
                    for (var n = e.addEventListener; n._rollbarOldAdd && n.belongsToShim;) n = n._rollbarOldAdd;
                    var t = function(e, o, t) {
                        n.call(this, e, r.wrap(o), t)
                    };
                    t._rollbarOldAdd = n, t.belongsToShim = o, e.addEventListener = t;
                    for (var a = e.removeEventListener; a._rollbarOldRemove && a.belongsToShim;) a = a._rollbarOldRemove;
                    var l = function(r, e, o) {
                        a.call(this, r, e && e._rollbar_wrapped || e, o)
                    };
                    l._rollbarOldRemove = a, l.belongsToShim = o, e.removeEventListener = l
                }
            }
            r.exports = {
                captureUncaughtExceptions: function(r, e, o) {
                    if (r) {
                        var t;
                        if ("function" == typeof e._rollbarOldOnError) t = e._rollbarOldOnError;
                        else if (r.onerror) {
                            for (t = r.onerror; t._rollbarOldOnError;) t = t._rollbarOldOnError;
                            e._rollbarOldOnError = t
                        }
                        e.handleAnonymousErrors();
                        var a = function() {
                            var o = Array.prototype.slice.call(arguments, 0);
                            n(r, e, t, o)
                        };
                        o && (a._rollbarOldOnError = t), r.onerror = a
                    }
                }
                , captureUnhandledRejections: function(r, e, o) {
                    if (r) {
                        "function" == typeof r._rollbarURH && r._rollbarURH.belongsToShim && r.removeEventListener("unhandledrejection", r._rollbarURH);
                        var n = function(r) {
                            var o, n, t;
                            try {
                                o = r.reason
                            } catch (r) {
                                o = void 0
                            }
                            try {
                                n = r.promise
                            } catch (r) {
                                n = "[unhandledrejection] error getting `promise` from event"
                            }
                            try {
                                t = r.detail, !o && t && (o = t.reason, n = t.promise)
                            } catch (r) {}
                            o || (o = "[unhandledrejection] error getting `reason` from event"), e && e.handleUnhandledRejection && e.handleUnhandledRejection(o, n)
                        };
                        n.belongsToShim = o, r._rollbarURH = n, r.addEventListener("unhandledrejection", n)
                    }
                }
                , wrapGlobals: function(r, e, o) {
                    if (r) {
                        var n, a, l = "EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");
                        for (n = 0; n < l.length; ++n) r[a = l[n]] && r[a].prototype && t(e, r[a].prototype, o)
                    }
                }
            }
        }, function(r, e, o) {
            "use strict";

            function n(r, e) {
                this.impl = r(e, this), this.options = e
                    , function(r) {
                        for (var e = function(r) {
                                return function() {
                                    var e = Array.prototype.slice.call(arguments, 0);
                                    if (this.impl[r]) return this.impl[r].apply(this.impl, e)
                                }
                            }, o = "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleAnonymousErrors,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","), n = 0; n < o.length; n++) r[o[n]] = e(o[n])
                    }(n.prototype)
            }
            n.prototype._swapAndProcessMessages = function(r, e) {
                var o, n, t;
                for (this.impl = r(this.options); o = e.shift();) n = o.method, t = o.args, this[n] && "function" == typeof this[n] && ("captureDomContentLoaded" === n || "captureLoad" === n ? this[n].apply(this, [t[0], o.ts]) : this[n].apply(this, t));
                return this
            }, r.exports = n
        }, function(r, e, o) {
            "use strict";
            r.exports = function(r) {
                return function(e) {
                    if (!e && !window._rollbarInitialized) {
                        for (var o, n, t = (r = r || {}).globalAlias || "Rollbar", a = window.rollbar, l = function(r) {
                                return new a(r)
                            }, i = 0; o = window._rollbarShims[i++];) n || (n = o.handler), o.handler._swapAndProcessMessages(l, o.messages);
                        window[t] = n, window._rollbarInitialized = !0
                    }
                }
            }
        }]);
        // End Rollbar Snippet

    </script>

    <script nomodule src="/js/polyfill.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>
        window.jQuery || document.write("<script src='\/\/assets.spareroom.co.uk\/js\/common\/jquery\/jquery-1.12.0.min.js'><\/script>");
    </script>
    <script>jQuery.noConflict();</script>
    
    <script>
        if (typeof NodeList.prototype.forEach !== "function") {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }

    </script>

    <script>
        'use strict'

        var _sr = {};
        _sr.session = {

            loggedin: false
            , user_known: false
            , session_id: ''
            , session_key: ''
            , language: navigator.language.split('-')[0]
        };





        _sr.commerce = {
            purchased: {}
            , products: {
                personal: [{
                    id: '1003'
                    , name: '4 week saver'
                    , duration: '4 weeks'
                    , price: '25.99'
                    , original_price: '29.99'
                    , selling_points: {
                        bold: [
                            '93p per day'
                            , 'Pause your upgrade (once per 4 week saver)'
                            , 'The stress-free option - give yourself plenty of time'
                        ]
                        , early_bird: [
                            '93p per day'
                            , 'Pause your upgrade (once per 4 week saver)'
                            , 'The stress-free option - give yourself plenty of time'
                        ]
                    , }
                , }, {
                    id: '1002'
                    , name: '2 weeks'
                    , duration: '2 weeks'
                    , price: '21.99'
                    , selling_points: {
                        bold: [
                            '£1.57 per day'
                            , '74% of people fill their room within 2 weeks'
                        ]
                        , early_bird: [
                            '£1.57 per day'
                            , '78% of people find a place within 2 weeks'
                        ]
                    , }
                , }, {
                    id: '1001'
                    , name: '1 week'
                    , duration: '1 week'
                    , price: '11.99'
                    , selling_points: {
                        bold: [
                            '£1.71 per day'
                            , '40% of people fill their room within 7 days'
                        ]
                        , early_bird: [
                            '£1.71 per day'
                            , '41% of people find somewhere within 7 days'
                        ]
                    , }
                , }, {
                    id: '463'
                    , name: '6 months'
                    , duration: '6 months'
                    , price: '99'
                    , selling_points: {
                        bold: [
                            '54p per day'
                            , 'Great value'
                        ]
                        , early_bird: [
                            '54p per day'
                            , 'Great value'
                        ]
                    }
                , }, {
                    id: '466'
                    , name: '1 year'
                    , duration: '1 year'
                    , price: '139'
                    , selling_points: {
                        bold: [
                            '38p per day'
                            , 'Best value'
                        ]
                        , early_bird: [
                            '38p per day'
                            , 'Best value'
                        ]
                    }
                , }]
                , pro: []
            , }
            , payment_providers: [

                {
                    name: 'paypal'
                    , url: 'https://www.paypal.com/cgi-bin/webscr'
                    , use_sandbox: '0'
                },


                {
                    name: 'paypal_rest'
                    , url: 'https://www.paypal.com/cgi-bin/webscr'
                    , use_sandbox: '0'
                },


                {
                    name: 'stripe'
                    , url: 'https://orders.spareroom.co.uk/stripe/charge'
                    , publishable_key: 'pk_live_ULPe0T07QEa1nYw9b9i6QFCs'
                },


                {
                    name: 'worldpay'
                    , url: 'https://secure.worldpay.com/wcc/purchase'
                    , use_sandbox: '0'
                },

            ]
            , miscellaneous: {
                context: ''
                , instId: '137527'
            , }
            , discounts: {}
            , checkout_cart: {
                cart_id: ''
                , product_description: 'Upgrade (inc Early Bird Access)'
                , items: []
            , }
            , context: {
                context: 'global'
                , discounts_available: false
                , platform: 'desktop'
                , product_type: 'bold'
                , departments: [
                    'Pro Monthly'
                    , 'Pro Annual'
                    , 'Multi Ads Annual'
                    , 'Personal'
                , ]
            }
        , };
        _sr.page = {
            loginReturnPath: '\x2F'
            , room_stats: "83,036"
        , };

        function getSegments() {

            var segments = [
                , 
                , 
                , 
                , 
                , 
                , 
                , 
            , ];
            var filtered = segments.filter(
                function(item) {
                    return item != undefined
                });
            return filtered.join();
        }
        _sr.customer = {

        };

        _sr.affiliate = {
            id: ''
            , category: ''
        , };

        _sr.messaging = {
            label_colours: [{
                    font: '#000000'
                    , hex: '#14C8F6'
                    , rgb: 'rgb(20,200,246)'
                    , description: 'Light Blue'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#999999'
                    , rgb: 'rgb(153,153,153)'
                    , description: 'Grey'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#000000'
                    , rgb: 'rgb(0,0,0)'
                    , description: 'Black'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#EA321B'
                    , rgb: 'rgb(234,50,27)'
                    , description: 'Red'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#00b67a'
                    , rgb: 'rgb(0,84,128)'
                    , description: 'Navy Blue'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#4BA72F'
                    , rgb: 'rgb(75,167,47)'
                    , description: 'Forest Green'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#97198B'
                    , rgb: 'rgb(151,25,139)'
                    , description: 'Purple'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#FF9600'
                    , rgb: 'rgb(255,150,0)'
                    , description: 'Orange'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#6398B4'
                    , rgb: 'rgb(99,152,180)'
                    , description: 'Sea Blue'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#00D845'
                    , rgb: 'rgb(0,216,69)'
                    , description: 'Lime Green'
                }
                , {
                    font: '#FFFFFF'
                    , hex: '#FF00BF'
                    , rgb: 'rgb(255,0,191)'
                    , description: 'Hot Pink'
                }
                , {
                    font: '#000000'
                    , hex: '#F4C95A'
                    , rgb: 'rgb(244,201,90)'
                    , description: 'Yellow'
                }
            , ]
        };
        _sr.localisations = {
            profile: {
                ads_from_user: "Ads from"
                , ads_from_this_user: "ads from this user"
                , age: "Age"
                , available: "Available"
                , available_now: "Available now"
                , female: "female"
                , from: "from"
                , to: "to"
                , gender: "Gender"
                , have_a_share: "I have a flat or house to share or rent"
                , last_active: "Last active"
                , loading: "loading"
                , looking_for_a_share: "I am looking for a flat or house share"
                , make_a_share: "I'd like to find people to form a new share"
                , male: "male"
                , member_since: "Member since"
                , move_date: "Move date"
                , occupation: "Occupation"
                , other: "other"
                , no_profile_found: "Sorry, no profile could be found for this user."
                , see_all: "See all"
                , term: "Term"
                , unable_to_display_ads: "Unable to display this user’s ads"
                , unknown: "Unknown"
                , unknown_error: "Sorry, an unknown error occurred."
                , upgraded: "Upgraded"
                , verified: "Verified"
                , pcm: "pcm"
                , pw: "pw"
            }
            , modal: {
                close: "Close"
                , dialog_window: "dialog window"
            , }
            , social: {
                share: "share"
            }
            , my_ads: {
                thank_you_for_feedback: "Thank you for your feedback"
                , ad_deactivated: "Your ad has been deactivated."
            }
            , search_results: {
                flatmates: "flatmates"
                , flatshares: "flatshares"
            }
            , upgrade: {
                four_week_title: "4 week saver"
                , four_week_desc: "28 Day extra listing"
                , three_month_title: "3 months"
                , three_month_desc: "3 months extra listing"
                , six_month_title: "6 months"
                , six_month_desc: "6 Month extra listing"
                , one_year_title: "1 year"
                , one_year_desc: "1 Year extra listing"
                , see_example: "See example"
                , bold_advertising: "Bold Advertising"
                , how_your_ad_will_look: "How your upgraded ad will look in the search results - enhanced for better visibility"
                , how_your_ad_currently_appears: "How your ad currently appears in the search results"
                , post_a_bold_ad: "Post a Bold Ad"
                , upgrade_now: "Upgrade now"
                , upgrade_and_send_message: "Upgrade and send message"
                , choose_your_upgrade: "Choose your upgrade"
                , enter_card_details: "Enter card details"
                , pay_securely: "Pay securely"
                , or: "or"
                , pay: "Pay"
                , making_payment: "Making payment"
                , make_payment: "Make payment"
                , sorry_something_went_wrong: "Sorry. Something went wrong."
                , extra_listings: "Extra listings"
                , none_selected: "None selected"
                , or_see_our: "Or go Pro with"
                , multi_listing_bundles: "Multi Listing Bundles"
                , with_advert_boosts: "inc free boosts"
                , each: "each"
                , small_print_1_year: "£34/£39 each with the 1 year upgrade"
                , small_print_6_months: "£24/£29 each with the 6 month upgrade"
                , small_print_3_months: "£24/£29 each with the 3 month upgrade"
                , small_print_4_weeks: "£14/£19 each with the 4 week saver"
                , small_print_na: "Only available on 4 week, 6 month or 1 year upgrades"
                , not_a_subscription: "This is not a subscription"
                , off: "off"
                , renew_today: "Renew today for a"
                , discount: "discount"
                , upgrade_failure: "Upgrade failure"
                , payment_not_authorised: "Your payment was not authorised. Please check your card details or use a different card."
                , upgrade_error: "Upgrade error"
                , upgrade_error_msg: "Sorry, we had a problem processing your payment. Please contact Customer Services on"
                , upgrade_applied: "Upgrade applied"
                , upgrade_applied_msg: "Thank you. Your payment was successful and your upgrade has been applied. Manage your ads below or post a new one."
                , most_popular: "Most popular"
                , promo_code_accepted: "Promo code accepted"
                , promo_code: "Promo code"
                , early_renewal: "Early renewal"
                , early_renewal_applied: "Early renewal applied"
                , enter_promo_code: "Enter promo code"
                , coupon_notfound_expired: "Sorry, coupon code either was not found or has expired."
                , code_notvalid_expired: "Code not valid or has expired"
                , redeem_code: "Redeem code"
                , i_have_a_promo_code: "I have a promo code"
                , close: "Close"
                , your_ad_renewed: "Your ad has been renewed"
                , need_more_than_one_live_ad: "Need more than 1 live ad?"
                , view_our_multi_ad_packages: "View our Multi Ad packages"
                , there_has_been_an_error: "Sorry, there has been an error"
                , enquiry: "enquiry"
                , enquiries: "enquiries"
            },

            auth: {
                login: "Log in"
                , continue_with_facebook: "Continue with Facebook"
                , login_with_facebook: "Log in with Facebook"
                , register_with_facebook: "Register with Facebook"
                , register_via_email: "Register via email"
                , or: "OR"
                , email: "Email"
                , password: "Password"
                , remember_me: "Remember me"
                , not_registered_join_us: "Not registered? Join us FREE"
                , forgot_your_password: "Forgot your password?"
            , },

        };


        _sr.site = {
            asset_server: 'https:///v2',

            autocomplete_min_chars: 3
            , id: 1
            , country: 'GB'
            , currency: 'GBP'
            , currency_symbol: "£"
            , currency_symbol_pence: "p"
            , domain: 'spareroom.co.uk'
            , domain_id: '1'
            , domain_name: 'www.spareroom.co.uk'
            , offered_detail_url: '/flatshare/flatshare_detail.pl'
            , photos_domain: 'photos2.spareroom.co.uk'
            , photos_path: '/images/flatshare/listings'
            , sub_dir: 'flatshare'
            , static_files_server: 'https://assets.spareroom.co.uk'
            , base_url: 'https://www.spareroom.co.uk'
            , mobile: ''
            , my_account_directory: '/content/myaccount/myaccount-index/'
            , phone_number: '0161 768 1162'
            , phone_number_international: '+441617681162'
            , recaptcha_v2_site_key: '6LeSuHoUAAAAACke6m17h4SpcETSFZ4EOUVhufDl'
            , recaptcha_v3_site_key: '6LcZa20UAAAAACDnWTi-GfAeYp7feqNmb4GFL5AI'
            , cs_email: 'customerservices@spareroom.co.uk'
            , loginReturnPath: '\x2F'
            , registered_users: '12'
        , };

        _sr.config = {
            facebook: {
                app_locale: 'en_GB'
                , app_id: '5097577709'
            , }
            , worldpay: {
                api_url: 'https://secure.worldpay.com/wcc/purchase'
                , use_sandbox: '0'
            }
            , paypal: {
                api_url: 'https://www.paypal.com/cgi-bin/webscr'
                , use_sandbox: '0'
            },

            stripe: {
                publishable_key: 'pk_live_ULPe0T07QEa1nYw9b9i6QFCs'
            },

            features: {
                apple_maps_desktop_detail: true
                , apple_maps_mobile_detail: true
                , apple_maps_desktop_search: true
                , apple_maps_mobile_search: true
                , use_apple_maps_viewings_desktop: true
                , use_apple_maps_viewings_mobile: true
                , featured_ads_auto_top_up: true
                , winter_sale: false
                , notes_thread_view: true
                , arrange_viewings: false
                , blocking_reg_prompt: true
                , one_minute_reg_prompt: true
                , extra_listings: true
                , promo_banner: true
                , case_study_banner: false
                , facebook_login_active: true
                , apple_google_pay: true
            , }
        , };

        _sr.action = {};
        _sr.ecommerce = {};
        _sr.experiments = {
            "reg_form_hide_password_mobile": "T4IUjvWyTqibovhVbeSe5Q"
            , "reg_form_hide_password_desktop": "JIdE8UJ-QPi5xbCMLtvF9Q"
            , "desktop_srp_cards": "sVuR3k4_QUOZGCuCpWtz_A"
            , "mobile_upgrade_chat": "OXiqPFC-RMOHbrNX4p8A6Q"
            , "post_ad_top_button_replacement_mobile": "fihcMN2sRbapKFHgVJs5ng"
            , "offered_ad_promo_mobile_logged_in": "dCxr8dwHRRSPDjP74b6eXA"
            , "seeker_upgrades_with_success_guarantee_mobile": "ZiaYnInCTe6Da_wXOqgAuw"
            , "homepage_upgrade_panel_mobile": "2rF3Ln1ETK201QJlZRTGGw"
            , "video_upload_chunk_size": "2048kb"
            , "apple_google_payment_desktop": "U-aDgXnXTUeX116_cniR1w"
            , "success_guarantee": "54dI_KDxS4GlsmMZu4YXmQ"
            , "reg_popup_ad_details_page_copy_change_desktop": "m1gY42nVTzyuO6K8oNH6Sw"
            , "mob_post_ad_free_bold_step_bullet_pts_V4": "0Adl-FxrQnC0ZV1rHjGXPQ"
            , "removal_of_reg_popup_for_paid_users_mob_v2": "HdGakdk3TAegQCI9MjbBkQ"
            , "blocking_reg_popup_close_button_5_views_mobile": "5cr-axReQAKmy0CFt18XtA"
            , "account_upgrade_panel_status_desktop": "8vVSsxS4SKGTeYwXcFeDsA"
            , "shared_interests_mobile": "fDJe_XnHSQCZtUFf49TCpg"
            , "spotlight_desktop": "YUSUVCekS8KZGb4HIAyR7Q"
            , "spotlight_mobile": "M_JA7DrvSgu8s4W6KqGW9w"
            , "reg_form_show_password_desktop": "Uv90p_BhTxOShP2pvf4k-g"
            , "homepage_upgrade_panel_desktop": "NlkGRQm-TAmqZKLN-eQeMg"
            , "shared_interests_desktop": "YyS0uYtGRv-Es0sQ9FRBIw"
            , "address_lookup_desktop": "x887H7SFQTSFJQv-o0cp5A"
            , "photo_upload_chunk_size": 220000
            , "desktop_srp_cards_more_info": "ctvHya9iTTqs57ydHRKyKQ"
            , "wanted_promo_panel_3_variations_desktop": "VHZ08BF2TFGqEubqGLkcpQ"
            , "post_ad_hidden_nav_mobile": "0642PEjNQPerkiXcFdJN5A"
            , "account_upgrade_panel_status_mobile": "zaSfiC6nRruPEcGYAFH1cQ"
            , "removal_of_reg_popup_for_paid_users_mob": "oaQ-Wl44RjqmxfANuxabJg"
            , "wanted_promo_panel_3_variations_mobile": "TlYrZJvFTM-jBSmSXIDecA"
            , "address_lookup_mobile": "kvhI6X-yQC2mx3SZbfqPnQ"
            , "post_ad_hidden_nav_desktop": "9K8JylP_TWiSpL9U71kgXw"
            , "offered_ad_promo_desktop_logged_in": "IXp83-ThRDSbvPa9n7Mjgw"
            , "apple_google_payment": "_5NQFVynTASVJZKVQkK-fg"
            , "reg_form_show_password_mobile": "TuNiHUuxQdCQoNans-q84Q"
        };
        _sr.ab_tests = {
            "active_experiments": {}
            , "browser_ident": "ruyg-iD7NWVzLojAekMzNw"
        };

    </script>

    <script>
        window.dataLayer = window._sr ? [window._sr] : [];
        // Register Google Optimize Callback
        // We unfortunately need this here to avoid compatibility issues with older browsers
        function registerOptimizeCallback() {
            function gtag() {
                window.dataLayer.push(arguments);
            }
            if (
                window.dataLayer &&
                !!window.dataLayer.filter(function(event) {
                    return event.event == 'optimize.callback';
                })
            ) {
                gtag('event', 'optimize.callback', {
                    callback: function(value, name) {
                        return registerUserExperiments({
                            id: name
                            , variation: value
                            , first_seen: new Date().toISOString()
                        });
                    }
                });
            }
        };
        // Store experiments in local storage
        // StackJS will handle posting to an API when the user is logged in
        function registerUserExperiments(experiment) {
            try {
                var experimentStorage = JSON.parse(localStorage.getItem('experiment-variation')) || [];
                if (!experimentStorage.filter(function(item) {
                        return item.id == experiment.id;
                    }).length) {
                    experiment.recorded = false;
                    experimentStorage.push(experiment);
                }
                localStorage.setItem('experiment-variation', JSON.stringify(experimentStorage));
            } catch (error) {
                // LocalStorage not available
            }
        };
        registerOptimizeCallback();

    </script>

    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon-precomposed.png">
    <link rel="android-touch-icon" href="/images/android-touch-icon.png">
    <title>SpareRoom for flatshare, house share, flat share &amp; rooms for rent</title>
    <link rel="canonical" href="https://www.spareroom.co.uk/">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.spareroom.co.uk/">
    <link rel="preload" href="/v2/fonts/quicksand/quicksand-v22-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/fontawesome/fa-regular-400.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="preload" as="image" media="(min-width: 769px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/966w.webp?v=1">
    <link rel="preload" as="image" media="(min-width: 676px) and (max-width: 768px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/768w.webp?v=1">
    <link rel="preload" as="image" media="(min-width: 481px) and (max-width: 675px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/675w.webp?v=1">
    <link rel="preload" as="image" media="(min-width: 416px) and (max-width: 480px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/480w.webp?v=1">
    <link rel="preload" as="image" media="(min-width: 376px) and (max-width: 415px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/415w.webp?v=1">
    <link rel="preload" as="image" media="(min-width: 321px) and (max-width: 375px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/375w.webp?v=1">
    <link rel="preload" as="image" media="(max-width: 320px)" href="/v2/img/spareroom/landingpages/heroes/home_hero/320w.webp?v=1">
    
    <link rel="stylesheet" href="/css/style_stack.944f970e8a6e618e8a0d.css">
    <link rel="stylesheet" href="/css/stack.013c9c379bf310fb1b98.css">
    <link rel="stylesheet" href="/css/fontawesome.725c435367860a677ba0.css">
    <link rel="stylesheet" href="/css/index.b8d0d9a4feb7052ed8ce.css">

    @yield('css')

    <meta name="medium" content="image">
    <link rel="image_src" href="https://assets.spareroom.co.uk/img/spareroom/v4/icons/sr_og_icon.png">
    <meta property="og:type" content="website">
    <meta property="og:title" content="RentYourRoom - Nigeria's No. 1 flatsharing site">
    <meta property="og:site_name" content="RentYourRoom">
    <meta property="fb:admins" content="713189111">
    <meta property="fb:app_id" content="5097577709">
    <meta property="og:description" content="Search for a room to rent or find a flatmate the fast, safe and easy way - we have thousands of ads all across the Nigeria.">
    <meta property="og:url" content="https://www.rentyourroom.net">
    <meta property="og:image" content="/images/SpareRoom_sq_share.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">

    <meta property="og:locale:alternate" content="en_GB">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="RentYourRoom">
    <meta name="twitter:creator" content="RentYourRoom">
    <meta name="twitter:title" content="RentYourRoom - Nigeria's No. 1 flatsharing site">
    <meta name="twitter:description" content="Search for a room to rent or find a flatmate the fast, safe and easy way - we have thousands of ads all across Nigeria.">
    <meta name="twitter:image" content="https://assets.spareroom.co.uk/img/logos/SpareRoom_sq_share.png?v=1">
</head>

<body id="@yield('body-id')" class="@yield('body-class')">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFTS7MZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    @yield('styles')

    <header class="wrap base-header" data-overlay-name="search-box">
        <div id="flash-messaging"></div>
        <div class="base-header__wrap"><a href="#spareroom" class="base-header__skip-link">Skip to content</a><a id="top" href="#top" class="trans-all-1s hidden" hidden>top</a>
            <div class="brand-header" id="header">
                <div class="brand-header__content">
                    <div class="brand-header__logo-wrapper">
                        <a href="{{ route('index') }}" id="homeLogo" class="brand-header__logo-link" data-ga-event-category="Home Links" data-ga-event-action="clicked" data-ga-event-label="header-SR-logo">
                            @if (rand(0, 1) == 1)
                                <img src="/images/logo/logo-white.png" class="svg brand-header__logo" alt="RentYourRoom Logo" width="248" height="51.66" importance="high">
                            @else
                                <img src="/images/logo/logo-green.png" class="svg brand-header__logo" alt="RentYourRoom Logo" width="248" height="51.66" importance="high">
                            @endif
                            {{-- <img src="/fonts/SpareRoom_header_logo.svg" class="svg brand-header__logo" alt="SpareRoom Logo" width="248" height="51.66" importance="high"> --}}
                        </a>
                    </div>
                    <div class="brand-header__middle-modals">
                        <div class="locale-choice" data-overlay-close-exempt="true">
                            <button aria-expanded="false" aria-controls="countryChoiceNav" aria-label="You are on the Nigeria site. Change country." class="locale-choice__click" data-overlay-target="country-code" data-overlay-type="dropDown">
                                <img src="/fonts/NGN.svg" class="svg locale-choice__flag" alt="en-GB" width="21" height="15">
                                <span class="locale-choice__code">Nigeria</span>
                                <i class="far fa-chevron-down locale-choice__caret-down"></i>
                            </button>
                            <aside id="countryChoiceNav" class="locale-choice__modal hidden-overlay" data-overlay-name="country-code">
                                <form class="locale-choice__form" method="post" action="/" id="country_id_form">
                                    <fieldset>
                                        <legend class="locale-choice__legend">In which country are you looking?</legend>
                                        <label class="locale-choice__label">
                                            <input type="radio" name="country_id" value="1" data-website="https://www.spareroom.co.uk/" class="locale-choice__radio" checked>Nigeria
                                        </label>
                                        <label class="locale-choice__label">
                                            <input type="radio" name="country_id" value="2" data-website="https://www.spareroom.com/roommates" class="locale-choice__radio">US
                                        </label>
                                    </fieldset>
                                    <button type="submit" class="button button--wide">Save</button>
                                </form>
                            </aside>
                        </div>
                    </div>

                    <div class="authentication-links authentication-links--buttons">
                        <div class="authentication-links__register-link">
                            <a class="button" href="{{ route('account.register') }}" id="registerButtonNav" title="Create an account">Register</a>
                        </div>
                        <div class="authentication-links__sign-in-link">
                            <a href="{{ route('account.login') }}" id="loginButtonNav" class="button button--action show-user-auth-popup">Log in</a>
                        </div>
                    </div>
                    <div id="authenticationLinks" class="authentication-links">
                        <a id="registerLinkNav" class="authentication-links__register-link" href="{{ route('account.register') }}" title="Create an account">Register</a>
                        <a id="loginLinkNav" href="{{ route('account.login') }}" class="authentication-links__sign-in-link show-user-auth-popup">
                            Log in
                        </a>
                    </div>
                </div>
            </div>


            <nav id="navBar" class="nav-bar">
                <div class="nav-bar__menus">
                    <ul class="nav-bar__menu nav-bar__menu--left">
                        <li class="nav-bar__menu-item">
                            <a href="{{ route('flatshare.search') }}" id="searchNav" title="Search SpareRoom for a property or tenant" class="nav-bar__link nav-bar__link--search">
                                <span class="nav-bar__link-text">Search</span>
                            </a>
                        </li>

                        <li class="nav-bar__menu-item">
                            <a href="{{ route('browse') }}" id="browseNav" title="Rooms for rent in your area" class="nav-bar__link nav-bar__link--browse">
                                <span class="nav-bar__link-text">Browse</span>
                            </a>
                        </li>


                        <li class="nav-bar__menu-item">
                            <a href="{{ route('postAd') }}" id="postAdNav" title="Place your wanted or need property ad for free" class="nav-bar__link nav-bar__link--placeAd">
                                <span class="nav-bar__link-text">Post ad</span>
                            </a>
                        </li>

                        <li class="nav-bar__menu-item">
                            <a href="{{ route('account.index') }}" id="myAccountNav" title="Your SpareRoom account area" class="nav-bar__link nav-bar__link--myAccount">
                                <span class="nav-bar__link-text">Account</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-bar__menu nav-bar__menu--right">

                        <li class="nav-bar__menu-item">
                            <a href="{{ route('aboutSpareroom') }}" id="aboutUsNav" title="About us" class="nav-bar__link nav-bar__link--aboutUs">
                                <span class="nav-bar__link-text">About us</span>
                            </a>
                        </li>


                        <li class="nav-bar__menu-item">
                            <a href="{{ route('infoAndAdvice') }}" id="infoAndAdviceNav" title="Info and advice overview" class="nav-bar__link nav-bar__link--info">
                                <span class="nav-bar__link-text">Info & advice</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer id="site-footer" class="base-footer">
        <div class="footer__full-upper-rows">
            <div class="footer__row footer__row--row-1">
                <div class="footer__column">
                    <strong class="footer__column-header">New to sharing</strong>
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a class="footer__link-flatsharing-faq footer__link" title="Flatsharing FAQ" href="flatsharing-faq.html">Why flatshare?</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-rent-a-room footer__link" title="Earn &pound;7,500 tax free by renting a room" href="rent-a-room-scheme.html">The Rent a Room
                                scheme</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-lodger footer__link" title="The benefits of taking in a lodger" href="lodger.html">Guide to taking in a lodger</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-rent-by-room footer__link" title="Rent by the room" href="rentingbytheroom.html">Landlord's guide to renting by the room</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-shared-home-insurance footer__link" title="Flat Share Home Contents and Shared House Contents Insurance" href="shared-house-contents-insurance.html">Shared Home Insurance</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-rental-agreements footer__link" title="Download Rental Agreements, inc AST (assured shorthold) and lodger agreements" href="tenancy-agreements.html">Tenancy Agreements</a> </li>
                    </ul>
                </div>
                <div class="footer__column footer__column--about-us">
                    <strong class="footer__column-header">About us</strong>
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a class="footer__link-about-us footer__link" title="Find out more about us" href="about-spareroom.html">About <span class="footer__link-text--full">SpareRoom</span><span class="footer__link-text--short">us</span></a>
                        </li>
                        <li class="footer__column-list-item"><a class="footer__link-why-use footer__link" href="why-use-spareroom.html">Why use SpareRoom?</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-how-works footer__link" title="How to use SpareRoom" href="how-spareroom-works.html">How SpareRoom Works</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-blog footer__link" title="SpareRoom's blog" href="https://blog.spareroom.co.uk">Blog</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-terms footer__link" title="SpareRoom's terms" href="terms-uk.html">Terms and conditions</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-privacy footer__link" title="SpareRoom's privacy" href="privacy-uk.html">Privacy policy</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-code-of-practice-for-agents footer__link" href="code-of-practice-for-agents.html">Code of practice for agents</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-discrimination footer__link" title="Discrimination in flatshare ads" href="discrimination.html">Discrimination</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-accessibility-statement footer__link" href="accessibility-statement.html">Accessibility statement</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-jobs footer__link" title="Work at SpareRoom" href="jobs.html">Jobs</a> </li>
                    </ul>
                </div>
                <div class="footer__column footer__column--our-services">
                    <strong class="footer__column-header">Our services</strong>
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a class="footer__link-advertise-room footer__link" title="Advertise your room to let" href="listing-options.html">Advertise a room</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-room-wanted footer__link" href="wanted_listing_step1.pl">Post a room wanted ad</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-whole-property footer__link" title="Advertise your whole property to a group of sharers" href="scp-options.html">Advertise a whole
                                property</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-student-accommodation footer__link" title="Student accommodation and student flatshare" href="student-accommodation.html">Student
                                Accommodation</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-weekday-lets footer__link" title="Find / Advertise rooms from Monday to Friday" href="monday-to-friday.html">Monday to Friday
                                lets</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-lgbt-flatshare footer__link" title="Lesbian, gay, bisexual and transgender flatshares" href="lgbt-flatshare.html">LGBT Flatshares</a>
                        </li>
                        <li class="footer__column-list-item"><a class="footer__link-roommate-finder footer__link" title="Search our flatmate/roommate profiles" href="roommates.html">Roommate finder</a> </li>
                    </ul>
                </div>
                <div class="footer__column footer__column--contact">
                    <strong class="footer__column-header">Contact us | Need help?</strong>
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a class="footer__link-contact-us footer__link" href="contact.pl">Contact us</a> </li>
                        <li class="footer__column-list-item">Mon to Fri: 9am &ndash; 8.30pm<br>Weekends: 10am &ndash; 7.30pm </li>
                        <li class="footer__column-list-item"><a class="footer__link-faq footer__link" title="SpareRoom FAQ" href="faq.html">FAQ</a> </li>
                        <li class="footer__column-list-item"><a class="footer__link-flatsharing-press footer__link" href="press.html">Press <span class="footer__link-text--full">Office</span></a> </li>
                        <li class="footer__column-list-item">
                            <span>Follow us:</span>
                            <a class="footer__link-instagram footer__link-social footer__link" href="https://www.instagram.com/SpareRoomuk"><span class="footer__link-social-text">Follow SpareRoom on
                                    Instagram</span><i aria-hidden="true" class="fab fa-instagram"></i></a><a class="footer__link-youtube footer__link-social footer__link" href="https://www.youtube.com/user/spareroom/?sub_confirmation=1"><span class="footer__link-social-text">SpareRoom YouTube channel</span><i aria-hidden="true" class="fab fa-youtube"></i></a><a class="footer__link-twitter footer__link-social footer__link" href="https://www.twitter.com/SpareRoomUK"><span class="footer__link-social-text">Follow SpareRoom on
                                    Twitter</span><i aria-hidden="true" class="fab fa-twitter"></i></a><a class="footer__link-facebook footer__link-social footer__link" href="https://www.facebook.com/spareroom"><span class="footer__link-social-text">SpareRoom on
                                    Facebook</span><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__row footer__row--row-2">
                <div class="footer__column footer__column--city-links-header">
                    <strong class="footer__column-header">Top flatsharing cities:</strong>
                </div>
                <div class="footer__column footer__column--city-links">
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a class=" footer__link" title="Nigeria flatshare house share and flatmates" href="london.html">Nigeria</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Belfast flatshare house share and flatmates" href="belfast.html">Belfast</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Birmingham flatshare house share and flatmates" href="birmingham.html">Birmingham</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Brighton flatshare house share and flatmates" href="brighton.html">Brighton</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Bristol flatshare house share and flatmates" href="bristol.html">Bristol</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Cambridge flatshare house share and flatmates" href="cambridge.html">Cambridge</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Cardiff flatshare house share and flatmates" href="cardiff.html">Cardiff</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Edinburgh flatshare house share and flatmates" href="edinburgh.html">Edinburgh</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Glasgow flatshare house share and flatmates" href="glasgow.html">Glasgow</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Leeds flatshare house share and flatmates" href="leeds.html">Leeds</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Manchester flatshare house share and flatmates" href="manchester.html">Manchester</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="Northampton flatshare house share and flatmates" href="northampton.html">Northampton</a> </li>
                        <li class="footer__column-list-item"><a class=" footer__link" title="More towns & cities flatshare house share and flatmates" href="uk.html">More towns & cities</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__row footer__row--row-3">
                <div class="footer__column">
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a href="https://www.speedflatmating.co.uk" class="footer__link" title="The original flatmate finding event">
                                <div class="footer__logo-wrapper"><img src="/fonts/SpeedFlatmating_white_new.svg" class="svg footer__logo footer__logo--sfm" alt="SpeedFlatmating logo" width="164" height="20" loading="lazy"></div>Find a room or meet potential flatmates face to face. Events held every week in
                                Nigeria and Manchester. Find out more.
                            </a> </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a href="https://blog.spareroom.co.uk/lodgers-a-victory-in-the-2015-budget/" class="footer__link" title="A Victory in the 2015 Budget">
                                <div class="footer__logo-wrapper"><img src="/fonts/RaiseTheRoof_white.svg" class="svg footer__logo footer__logo--raise-the-roof" alt="Raise the Roof logo" width="180" height="45" loading="lazy"></div>Our successful 6 year campaign means a better deal for homeowners
                                and renters. Find out more.
                            </a> </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a href="liverentfree.html" class="footer__link" title="A chance to win live rent free for a month">
                                <div class="footer__logo-wrapper"><img src="/fonts/LiveRentFree_white.svg" class="svg footer__logo footer__logo--lrf" alt="Live Rent Free logo" width="164" height="20" loading="lazy"></div>Enter for the chance to win a month's rent. Held every month.
                            </a> </li>
                    </ul>
                </div>
                <div class="footer__column">
                    <ul class="footer__column-list">
                        <li class="footer__column-list-item"><a href="https://www.spareroom.com/roommates" class="footer__link" title="Find a room for rent or roommate in the US">
                                <div class="footer__logo-wrapper"><img src="/fonts/SpareRoom_white_US.svg" class="svg footer__logo footer__logo--spareroom" alt="SpareRoom logo in white" width="183" height="23" loading="lazy"></div>Need a room or roommate in New York, San Francisco or Los Angeles?
                                Visit our US site.
                            </a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__small-row"><a class="footer__link-app footer__small-link" title="Get the SpareRoom iPhone and Android app here" href="apps.html">Get the app</a><a class="footer__link-contact-us footer__small-link" href="contact.pl">Contact us</a><a class="footer__link-about-us footer__small-link" title="Find out more about us" href="about-spareroom.html">About <span class="footer__link-text--full">SpareRoom</span><span class="footer__link-text--short">us</span></a><a class="footer__link-terms footer__small-link" title="SpareRoom's terms" href="terms-uk.html">Terms and conditions</a><a class="footer__link-privacy footer__small-link" title="SpareRoom's privacy" href="privacy-uk.html">Privacy
                policy</a><a class="footer__link-flatsharing-press footer__small-link" href="press.html">Press <span class="footer__link-text--full">Office</span></a><a class="footer__link-discrimination footer__small-link" title="Discrimination in flatshare ads" href="discrimination.html">Discrimination</a><a class="footer__link-accessibility-statement footer__small-link" href="accessibility-statement.html">Accessibility statement</a><a class="footer__link-jobs footer__small-link" title="Work at SpareRoom" href="jobs.html">Jobs</a></div>
        <div class="footer__bottom-row">
            <div class="footer__bottom-row-apps"><a class="footer__link footer__link-text--full" title="SpareRoom app details" data-ga-event-category="Apps promo" data-ga-event-action="clicked" data-ga-event-label="footer-app-page" href="apps.html"><strong>SpareRoom apps</strong> (free)</a><a class="footer__link" title="SpareRoom iOS app download on Apple Store" data-ga-event-category="Apps promo" data-ga-event-action="clicked" data-ga-event-label="footer-ios-store" href="https://itunes.apple.com/app/apple-store/id400181250?pt=450238&amp;ct=uk-desktop-universal-footer&amp;at=1001lnJ5&amp;mt=8&amp;ls=1"><strong><i class="fab fa-apple footer__link-app-icon"></i> iOS app</strong></a><a class="footer__link" title="SpareRoom Android app download on Google Play" data-ga-event-category="Apps promo" data-ga-event-action="clicked" data-ga-event-label="footer-google-play" href="https://play.google.com/store/apps/details?id=com.spareroom.spareroomuk&amp;referrer%3Dutm_source%3Ddesktop-footer%26utm_medium%3Dlink"><strong><i class="fab fa-android footer__link-app-icon"></i> Android app</strong></a></div>
            <div class="footer__bottom-row-cookies">
                <div class="footer__link">
                    <button id="ot-sdk-btn" style="display: none;" class="button button--link optanon-toggle-display">Cookie Settings</button>
                </div>
            </div>
            <div class="footer__bottom-row-copyright">
                &copy;1999&ndash;2024 Flatshare Ltd.
            </div>
        </div>
    </footer>

    @yield('scripts')
    
    <div class="overlay-mask" id="overlay-mask"></div>
    <div id="profileViewer"></div>

    <div tabindex="1" role="dialog" id="userAuth" class="auth hidden-overlay" data-use-modal="true" data-email data-pass data-log-in-from-url="%2F" data-show-sign-in data-csrf-token="8b546c167501def0c00d6a4627dbf9e472a27393,aad94713dea584b6c02d29524d6cdcc72be57a3d,1706275293">
        <div id="user_auth">
            <div style="display: flex; justify-content: center; margin: 16px 0 0;">
                <i class="far fa-spinner fa-pulse fa-4x fa-fw"></i>
            </div>
            <h3 style="text-align: center; margin-top: 16px; text-transform: capitalize; font-weight: 400; color: #5E5E5E">
                loading</h3>
        </div>
    </div>


    <div id="show-reg-reminder-popup" data-overlay-target="reg-reminder-popup" data-overlay-type="popUp"></div>
    <div id="reg_popup" class="popreg hidden-overlay" data-overlay-name="reg-reminder-popup">
        <button class="popreg__regclose reg_close" id="reg_close" data-overlay-close="reg-reminder-popup">
            <i class="far fa-times popreg__close-icon"></i>
        </button>
        <img src="/fonts/SpareRoom_header_logo.svg" class="popreg__logo" alt="SpareRoom Logo in white" width="205" height="42.7">

        <h2 class="heading heading--sub">Register for FREE</h2>
        <ul class="popreg__list">
            <li class="popreg__list-item">Post a free ad</li>
            <li class="popreg__list-item">Contact ads</li>
            <li class="popreg__list-item">Save ads and searches</li>
        </ul>
        <form class="popreg__form" action="{{ route('account.register') }}" method="POST" name="registration" data-cookie-check="self">
            <a class="button button--facebook button--large" id="fb_login-reg-promp" title="Connect with Facebook" data-facebook-connect href="#">
                <div class="button__content">
                    <span class="button__icon">
                        <i class="fab fa-facebook"></i>
                    </span><span class="button__text">Register with Facebook</span>
                </div>
            </a> <a class="button button--secondary button--large" id="reg-prompt-register" name="register" href="{{ route('account.login') }}">
                <span class="button__text">Register via email</span>
            </a>
            <button id="reg_remind_me_later" class="button button--action button--large" data-overlay-close="reg-reminder-popup">
                <span class="button__text">Remind me later</span>
            </button>
            <span class="popreg__login">Already have an account?&nbsp;<a href="{{ route('account.login') }}" id="reg_login" class="popreg__login-anchor">Log in</a></span>
        </form>
    </div>

    <script src="/js/vendor.f2dccfeb215b65664509.js" defer></script>
    <script src="/js/stack.228b798cea39248f7d3e.js" defer></script>
    <script src="/js/index.d419a7426368fb812a5e.js" defer></script>
    
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime()
                , event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0]
                , j = d.createElement(s)
                , dl = l != 'dataLayer' ? '&l=' + l : '';
            j.defer = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WFTS7MZ');

    </script>
    <!-- End Google Tag Manager -->

    <script src="/js/6f30ada23b82e07b93ee29b7dce25b42.js"></script>
    <script>
        SR.init({
        siteId: 1,
        domainId: 1,
        locale: 'en-GB',
        correctUrl: 'www.spareroom.co.uk',
        staticServer: 'assets.spareroom.co.uk',
        appSubdir: 'flatshare',
        googleMapsClientId: 'gme-flatshareltd',
        gaCategoryMapEvents: 'Google Maps (09 -11-16)',
        loginReturnPath: '\x2Fcontent\x2Fmyaccount\x2Fmyaccount\x2Dindex\x2F',
        siteMobile: false,
        facebook: {
            appLocale: 'en_GB',
        }
        });

        SR.localisations = {};

        SR.facebookConnect.setSettings({
        appConfig: { appId: '5097577709' }
        });

        SR.tracking.init();
        SR.checkCookies.init();
        SR.saveSearchToLocalStorage.init();
        SR.spareroom.init();
    </script>

    @yield('js')
</body>

</html>
