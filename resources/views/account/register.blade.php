@extends('layouts.app')

@section('title', 'Register on SpareRoom')

@section('body-id', 'SUBPAGEregister')
@section('body-class', 'PAGEregister')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/da91be6ab654368394f6dee2282611f9.css">
<link rel="stylesheet" href="/css/email_domain_spellcheck.475758e876da713ed83d.css">
<link rel="stylesheet" href="/css/registration.1019abfa0ff3ef71feb0.css">
<link rel="stylesheet" href="/css/dob_on_registration.be7543cdc8581f4e5122.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Register now for free </h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-4-8-4">
        <aside>
            <p>Register now to:</p>
            <ul>
                <li>Contact ads</li>
                <li>Post ads</li>
                <li>Save your searches</li>
                <li>Save ads</li>
                <li>And lots more..</li>
            </ul>
        </aside>

        <div id="maincontent">
            <div class="block block_simple block_register">
                <div class="block_header">
                    <h3>Register</h3>
                </div>

                <form class="block_content block_areas forms-new-rules" action="{{ route('account.register') }}" method="POST" name="registration" data-cookie-check="self">
                    <div class="block_area register_fb">
                        <h2 class="register_intro">Register using Facebook</h2>
                        <div class="form_label"></div>
                        <div class="form_inputs">
                            <span class="form_input form_button">
                                <a class="button button--facebook" id="fb_login" title="Connect with Facebook" data-facebook-connect href="#">
                                    <div class="button__content">
                                        <span class="button__icon">
                                            <i class="fab fa-facebook"></i>
                                        </span><span class="button__text">Register using Facebook</span>
                                    </div>
                                </a> </span>
                            <p class="register_fb_notice">
                                (we'll never post on your timeline without your permission)
                            </p>
                        </div>
                        <span class="register_or">OR</span>
                    </div>

                    <div class="block_area register">
                        <fieldset>
                            <h2 class="register_intro">Register with your email</h2>

                            <div class="form_row form_row_first_name">
                                <div class="form_label">First name</div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <input type="text" name="first_name" size="25" maxlength="50" value autocomplete="given-name" required>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_last_name">
                                <div class="form_label">Last name</div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <input type="text" name="last_name" size="25" maxlength="50" value autocomplete="family-name" required>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_email">
                                <div class="form_label">Email address</div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <input type="email" name="email" size="30" maxlength="254" value id="emailfield" autocomplete="email" required>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_password">
                                <div class="form_label">Password</div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <input type="password" name="password" size="16" id="passwordinput" value required>
                                    </span>
                                </div>
                            </div>
                            <div class="form_row form_row_password_confirm">
                                <div class="form_label">Confirm password</div>
                                <div class="form_inputs">
                                    <span class="form_input form_text">
                                        <input type="password" name="password_again" size="16" value required>
                                    </span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="form_row form_row_gender">
                            <div class="form_label">Gender</div>
                            <div class="form_inputs">
                                <label class="form_input form_radio">
                                    <input type="radio" name="gender" value="F" required>
                                    Female
                                </label>
                                <label class="form_input form_radio">
                                    <input type="radio" name="gender" VALUE="M">
                                    Male
                                </label>
                                <label class="form_input form_radio form_radio_other">
                                    <input type="radio" name="gender" VALUE="O" aria-describedby="genderOther">
                                    Other
                                </label>
                                <span class="tooltip">
                                    <span class="tooltip_box">
                                        <small class="tooltip_text" id="genderOther">You'll have the opportunity to self-describe in your
                                            ad(s) and messages, if you choose to.</small>
                                        <span class="tooltip_arrow">&nbsp;</span>
                                    </span>
                                    <span class="tooltip_item"><i class="fas fa-info-circle"></i></span>
                                </span>
                            </div>
                        </fieldset>

                        <fieldset class="form_row form_row_date_of_birth">
                            <div class="form_label">Date of birth</div>
                            <div class="form_inputs">
                                <p class="form_row_dob_hint">You must be 18 or over to use SpareRoom</p>


                                <label class="form_input_label"><span class="form_input_label_text">Day <span class="sr-only">of
                                            birth</span></span><input type="text" maxlength="2" id="dofb_day" placeholder="DD" required autocomplete="bday-day">
                                </label>
                                <label class="form_input_label form_input_label--month"><span class="form_input_label_text">Month
                                        <span class="sr-only">of birth</span></span><input type="text" maxlength="2" id="dofb_month" placeholder="MM" required autocomplete="bday-month"></label>

                                <label class="form_input_label"><span class="form_input_label_text">Year <span class="sr-only">of
                                            birth</span></span>
                                    <input class="form_input_dob_year" type="text" maxlength="4" id="dofb_year" placeholder="YYYY" required autocomplete="bday-year">
                                </label>
                                <p aria-live="assertive" class="form_row_dob_invalid"></p>
                                <input type="hidden" value="-" name="dofb_day">
                                <input type="hidden" value="-" name="dofb_mon">
                                <input type="hidden" value="-" name="dofb_year">
                            </div>
                        </fieldset>

                        <fieldset class="form_row form_row_user_type">
                            <div class="form_label">Tick those which apply to you</div>
                            <div class="form_inputs">
                                <label class="form_checkbox">
                                    <input type="checkbox" name="usertype_new" value="lookingforashare">
                                    I am looking for a flat or house share
                                </label>
                                <label class="form_checkbox">
                                    <input type="checkbox" name="usertype_new" value="haveashare">
                                    I have a flat or house share
                                </label>
                                <label class="form_checkbox">
                                    <input type="checkbox" name="usertype_new" value="makeashare">
                                    I'd like to find people to form a new share
                                </label>
                                <input type="hidden" name="usertype_selection" value="manual">
                            </div>
                        </fieldset>


                        <input type="hidden" name="emailnewsletters" value="Y">
                        <input type="hidden" name="emailtipsandpromotions" value="Y">
                        <input type="hidden" name="emailspeedflatmating" value="N">
                        <input type="hidden" name="emailfrom3rdparties" value="N">
                        <div class="form_row form_row_hear_about">
                            <div class="form_label">Where did you hear about us?</div>
                            <div class="form_inputs">
                                <span class="form_input form_text">
                                    <input type="text" name="where_heard" size="30" value>
                                </span>
                            </div>
                        </div>
                        <div class="form_row form_row_buttons">
                            <div class="form_input form_button">
                                <button class="register-button button" id="registerbutton" type="submit" name="submit">Register
                                    now</button>
                            </div>
                        </div>
                        <div class="form_row form_row_agreement">

                            <div class="form_inputs">
                                <div class="form_input form_checkbox">
                                    <input type="hidden" name="inagreement" value="Y">
                                    * By clicking Register now you agree to SpareRoom's <a href="terms-uk_1.html">terms</a> and <a href="privacy-uk_1.html">privacy policy</a>. We will send you emails as part of the services we
                                    provide to you. You can unsubscribe at any time via the website or the link in the emails.
                                </div>
                            </div>
                        </div>
                        <p class="grecaptcha-terms">This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Privacy
                                Policy</a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a> apply.</p>
                        <input type="hidden" name="templateoveride" value>
                        <input type="hidden" name="event_id" value>
                        <input type="hidden" name="area_id" value>
                        <input type="hidden" name="setup_basicprofile" value>
                        <input type="hidden" name="per" value>
                        <input type="hidden" name="loginfrom" value>

                        <input type="hidden" name="facebook_app_version" value>
                        <input type="hidden" name="loginfrom_url" value="&#47;">
                        <input type="hidden" name="flatshare_id" value>
                        <input type="hidden" name="search_id" value>
                        <input type="hidden" name="gs_id" value>
                        <input type="hidden" name="min_rent" value>
                        <input type="hidden" name="max_rent" value>
                        <input type="hidden" name="postcode" value>
                        <input type="hidden" name="offset" value>
                        <input type="hidden" name="sort_by" value>
                        <input type="hidden" name="flatshare_type" value>
                        <input type="hidden" name="action" value="newuser">
                        <input type="hidden" name="csrf_token" value="5cd46801f5e47d71c09326d0901dbc7b20016a01,7944b97e52be3f067eaef0b2d8da3b1d72caa422,1706275299">
                        <input type="hidden" name="iso_language" value>
                    </div>
                    <div class="grecaptcha-container"></div>
                </form>
            </div>


        </div>
        <aside>

            <div id="testimonials">
                <blockquote>
                    <p class="quote">On day 2, I found 3 adverts of interest, met all three and by last night had found 3 very
                        different rooms and met some absolutely lovely people!</p>
                    <p class="author">&#126; AMB</p>
                </blockquote>
                <blockquote>
                    <p class="quote">I found a lodger in only three days...Great service thank you.</p>
                    <p class="author">&#126; Marc B</p>
                </blockquote>
            </div>

            <h3>Your privacy</h3>
            <p>
                We NEVER pass on your details to third parties nor send unsolicited email ('spam'). We are committed to your
                privacy and adhere strictly to the Data Protection act. See <a href="privacy-uk.html" target="termswin">our
                    privacy policy</a>.
            </p>




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
<script src="/js/api.js"></script>
<script src="/js/registration.4d194a2e012fe093aad7.js"></script>
<script src="/js/dob_on_registration.4c9483e8b125584c92ad.js"></script>
<script src="/js/a5cd844c47c7d9043148a380477de8b2.js"></script>
<script>
    SR.settings.loginReturnPath = '\x2F';
    SR.register.init({ confirmEmail: 0 });
</script>
@endsection
