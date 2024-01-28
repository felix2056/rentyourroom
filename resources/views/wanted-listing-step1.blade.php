@extends('layouts.app')

@section('title', 'Advertise a room wanted. Roommate/flatmate looking for a share/roommates/flatmates.')

@section('body-id', 'SUBPAGEwanted')
@section('body-class', 'PAGEplacelisting')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/step_one_desktop.cb9f6ebcd1b337a91993.css">
<link rel="stylesheet" href="/css/5053de057a976a94af2b72c3d738bc3e.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-12-4 " id="mainheader">
      <div>
        <h1>

          Post a room wanted ad
        </h1>
      </div>
      <div>&nbsp;</div>
    </div>
    <div class="grid-12-4">
      <div>
        <div class="benefits" style="display:none">
          <div>
            <h3>Find your room faster with a FREE room wanted ad</h3>
            <ul class="bulletlist points fa-ul">
              <li class="bulletlist__text"><i class="fa-li far fa-check-circle"></i>
                <b>Maximise your chances</b> - landlords use room wanted ads to contact tenants
              </li>
              <li class="bulletlist__text"><i class="fa-li far fa-check-circle"></i>
                <b>Don’t miss out!</b> Demand for the best rooms is high
              </li>
              <li class="bulletlist__text"><i class="fa-li far fa-check-circle"></i>
                <b>Keep control</b> - FREE and quick to set up, halt your ad any time you want
              </li>
            </ul>
            <p class="ending-line">Start your room wanted ad today!</p>
          </div>
        </div>
        <div class="block block_simple block_wanted_listing">
          <div class="block_header">
            <h2>Step 1 of 2</h2>
          </div>
          <div class="block_content">

            <form action="/flatshare/wanted_listing_step1.pl" method="GET" class="pl_step1"
              name="place_room_wanted_st_1">
              <fieldset class="form_fieldset_room_and_gender">


                <legend>
                  Get started with your room wanted ad

                </legend>

                <div class="form_row form_row_whos_searching">
                  <div class="form_label">Who's searching?</div>
                  <div class="form_inputs">
                    <label class="form_input form_radio">
                      <input type="radio" name="who_is_searching" CHECKED value="justme">Just me
                    </label><label class="form_input form_radio">
                      <input type="radio" name="who_is_searching" value="partner">Me and a partner
                    </label><label class="form_input form_radio">
                      <input type="radio" name="who_is_searching" value="friend">Me and a friend
                    </label>
                  </div>
                </div>
                <div class="form_row form_row_seekers ">
                  <div class="form_label">Your gender(s)</div>
                  <div class="form_inputs">
                    <label class="form_input form_radio form_radio_single-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="M"> 1 male
                    </label><label class="form_input form_radio form_radio_single-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="F"> 1 female
                    </label><label class="form_input form_radio form_radio_other form_radio_single-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="O"> Other
                    </label>
                    <label class="form_input form_radio form_radio_multi-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="MM" disabled> 2 males
                    </label><label class="form_input form_radio form_radio_multi-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="FF" disabled> 2 females
                    </label><label class="form_input form_radio form_radio_multi-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="FM" disabled> 1 male 1 female
                    </label><label class="form_input form_radio form_radio_other form_radio_multi-seeker">
                      <input type="radio" name="NumberAndSexOfSeekers" value="OO" disabled> Other
                    </label>
                    <span class="tooltip">
                      <span class="tooltip_box">
                        <small class="tooltip_text" id="genderOther">You'll have the opportunity to self-describe in
                          your ad(s) and messages, if you choose to.</small>
                        <span class="tooltip_arrow">&nbsp;</span>
                      </span>
                      <span class="tooltip_item"><i class="fas fa-info-circle"></i></span>
                    </span>
                  </div>
                </div>
                <div class="form_row form_row_looking_for ">
                  <div class="form_label">Room sizes</div>
                  <div class="form_inputs">

                    <label class="form_input form_radio">
                      <input type="radio" name="RoomReq" value="a single or double room"> A single or double room
                    </label><label class="form_input form_radio">
                      <input type="radio" name="RoomReq" value="a double room"> A double room
                    </label>

                  </div>
                </div>
                <input type="hidden" value name="RoomReq" id="roomReqHidden" disabled>

                <div class="form_row form_row_buddyups">
                  <div class="form_label">'Buddy ups'</div>
                  <div class="form_inputs">
                    <label class="form_input form_checkbox">
                      <input type="checkbox" name="interested_meeting_other_seekers" value="Y">
                      I/we are also interested in <em>Buddying up</em>
                    </label>
                    <div class="form_hint">

                      Tick this if you might like to <em>Buddy Up</em> with other room seekers to find a whole flat or
                      house together and start a brand new flat/house share.


                    </div>
                  </div>
                </div>

                <div class="continueWithFb-wrapper">
                  <div class="form_row form_row__facebook-error">
                    <div class="form_inputs">
                      <p class="form_row__facebook-error-message">Please complete all required fields</p>
                    </div>
                  </div>
                  <a class="button button--facebook wanted-step-1__facebook-button" id="fb_login"
                    title="Connect with Facebook" data-facebook-connect data-fb-button-disabled="true" href="#">
                    <div class="button__content">
                      <span class="button__icon">
                        <i class="fab fa-facebook"></i>
                      </span><span class="button__text">Continue with Facebook</span>
                    </div>
                  </a>
                  <a class="wanted-step-1__continue-with-email" id="continue-with-email">Continue with email</a>
                  <div id="continue-with-email-inputs" class="wanted-step-1__email hidden">
                    <div class="form_row form_row_ask_for_email">
                      <div class="form_label">

                        My email address is<span class="star">*</span>

                      </div>
                      <div class="form_inputs">
                        <input class="wanted-step-1__email-input" id="email-input" type="email" name="youremail" value>
                        <input type="hidden" name="emailrequested" value="1">
                      </div>
                    </div>

                    <div class="form_row form_row_buttons">
                      <div class="form_label"></div>
                      <div class="form_inputs">
                        <input type="hidden" name="action" value="wantedstep2">
                        <input type="hidden" name="gs_id" value>
                        <input type="hidden" name="watch" value>
                        <input type="hidden" name="search_id" value>

                        <input type="hidden" name="scp" value="N">
                        <input type="hidden" name="referring_listing" value>
                        <input type="hidden" name="show_interest_in" value>
                        <input type="hidden" name="show_interest_in_type" value>
                        <input type="hidden" name="fromwatchlist" value>
                        <input type="hidden" name="original_search_string" value>
                        <input type="hidden" name="completed_step1" value="true"><button
                          class="button wanted-step-1__continue-button" type="submit" name="submit">next</button>
                      </div>
                    </div>

                  </div>
                </div>

              </fieldset>
            </form>
          </div>
        </div>
        <br><br>
      </div>
      <aside>
        <section>
          <h3>Help topics</h3>
          <ul>
            <li><a href="buddyups.html">What's a buddy up?</a></li>
            <li><a href="single-vs-doubleroom_1.html">What's the difference between a single and double room?</a></li>
          </ul>
        </section>


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
  </main>
@endsection

@section('js')
<script src="/js/wanted.cc7789d0213acc358767.js"></script>
<script src="/js/step_one_desktop.7f6ea6366e36d47bd2c9.js"></script>
<script src="/js/b22cb716d656f1b1df315ccb1b342fe9.js"></script>
<script>
    SR.listing.placeWanted.step1.init();
  </script>
  <script>
    SR.facebookConnect.setSettings({
      passthrough: {
        usertype_new: 'lookingforashare'
      }
    });
  </script>
@endsection