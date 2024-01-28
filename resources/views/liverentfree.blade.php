@extends('layouts.app')

@section('title', 'Live Rent Free')

@section('body-id', '')
@section('body-class', '')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/live_rent_free.009c0a4f5acf5460cbd3.css">
<script>
    jQuery(document).ready(function ($) {
      var $twitterButtonShare,
        $facebookButtonShare,
        $emailButtonShare,
        $smsButtonShare,
        smsHref,
        $whatsAppButtonShare;
      var smsOperator = (Modernizr.ios === true) ? '&' : '?';
      var encodeReturnUrlFacebook = encodeURIComponent('https://www.spareroom.co.uk/liverentfree/?utm_source=facebook&utm_medium=social_share&utm_campaign=liverentfree_share');
      var encodeReturnUrlTwitter = encodeURIComponent('https://www.spareroom.co.uk/liverentfree/?utm_source=twitter&utm_medium=social_share&utm_campaign=liverentfree_share');
      $facebookButtonShare = $("<a />", {
        class: "facebookButtonShare",
        name: "link",
        href: "https://www.facebook.com/sharer/sharer.php?u=" + encodeReturnUrlFacebook + "&title=" + encodeURIComponent("Live Rent Free with SpareRoom!"),
        text: "Share",
        target: "_blank"
      });
      $twitterButtonShare = $("<a />", {
        class: "twitterButtonShare",
        name: "link",
        href: "https://twitter.com/intent/tweet?status=" + encodeURIComponent("Live Rent Free with SpareRoom! ") + encodeReturnUrlTwitter,
        text: "Tweet",
        target: "_blank"
      });
      $emailButtonShare = $("<a />", {
        class: "emailButtonShare",
        name: "link",
        href: "mailto:?subject=" + encodeURIComponent("Live Rent Free with SpareRoom!") + "&body=" + encodeURIComponent("Enter SpareRoom's monthly draw for your chance to get your rent paid! https://www.spareroom.co.uk/liverentfree/?utm_source=email&utm_medium=social_share&utm_campaign=liverentfree_share"),
        text: "Email a friend"
      });
      $('#social_buttons_share').append(
        $facebookButtonShare,
        $twitterButtonShare,
        $emailButtonShare,
        $smsButtonShare,
        $whatsAppButtonShare
      );
      $('a.twitterButtonShare, a.facebookButtonShare').on('click', function (e) {
        e.preventDefault();
        var winH = 450,
          winW = 550,
          wLeft = window.screenLeft ? window.screenLeft : window.screenX,
          wTop = window.screenTop ? window.screenTop : window.screenY,
          positionL = wLeft + (window.innerWidth / 2) - (winW / 2),
          positionT = wTop + (window.innerHeight / 2) - (winH / 2);
        window.open($(this).attr('href'), 'socialWin', 'height=' + winH + ', width=' + winW + ', top=' + positionT + ', left=' + positionL + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
      });
    });
  </script>
@endsection

@section('content')
<main id="spareroom" class="lrf wrap wrap--main">
    <img src="/fonts/LiveRentFree.svg" class="svg lrf__logo lrf-logo--welcome" alt="LiveRentFree Logo">
    <div class="lrf__hero">
      <div class="full-image">
        <img src="/fonts/LRF_hero_text.svg" class="svg lrf__hero-text" alt="Every month we pay someone's rent!">
      </div>
    </div>
    <h2 class="lrf__competitions-header">

      So far we've given away:</h2>
    <h2 class="lrf__competitions-total-raised" id="lrf-total-raised"></h2>
    <div class="lrf__button">
      <a class="button button--facebook button--large" id="fb_login" title="Connect with Facebook" data-facebook-connect
        href="#">
        <div class="button__content">
          <span class="button__icon">
            <i class="fab fa-facebook"></i>
          </span><span class="button__text">Continue with Facebook</span>
        </div>
      </a>
      <p class="lrf__fb-privacy-statement">
        We take your privacy seriously. We won’t post anything to Facebook. See the <a href="terms-uk.html"
          class="lrf__fb-privacy-statement-link">terms and conditions</a>
      </p>
      <span class="heading heading--sub"> OR </span>
      <button class="button button--action button--large show-user-auth-popup">Continue with Email</button>
      <a class="lrf__coupon-link">I have an extra entries code</a>
    </div>
  </main>
@endsection

@section('scripts')
<span id="lrf-formatted-total-raised" style="display: none;">&pound;162,579.53!</span>
<script>
    var totalRaisedNode = document.getElementById('lrf-total-raised');
    if (totalRaisedNode) {
      var total = parseInt('162579.53', 10);
      if (total) {
        var currentlyHTML = '&pound;';
        var accumulator = 0;
        var increment = Math.round(total / 750) || 1;
        var interval = setInterval(function () {
          if (accumulator <= total - increment) {
            accumulator += increment;
            totalRaisedNode.innerHTML = currentlyHTML + accumulator.toLocaleString('en');
          } else {
            clearInterval(interval);
            totalRaisedNode.innerHTML = document.getElementById('lrf-formatted-total-raised').innerHTML;
          }
        }, 1);
      } else {
        totalRaisedNode.innerHTML = document.getElementById('lrf-formatted-total-raised').innerHTML;
      }
    }
  </script>
@endsection

@section('js')
<script src="/js/live_rent_free.f713a298f631af6edb55.js"></script>
  <script>
    SR.facebookConnect.setSettings({
      appConfig: { appId: '5097577709' },
      passthrough: {
        usertype_optional: 1
      }
    });
  </script>

  <script>
    (function ($) {
      $(document).ready(function () {
        var viralLink = document.querySelector('#uniqueReferralAddress');
        if (viralLink) {
          var linkLength = viralLink.value.length;
          viralLink.addEventListener('click', function (event) {
            setTimeout(function () {
              event.target.setSelectionRange(0, linkLength);
            }, 1)
          })
        }
      });
    })(jQuery);
  </script>
@endsection