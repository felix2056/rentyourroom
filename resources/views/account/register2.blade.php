@extends('layouts.app')

@section('title', 'Register on SpareRoom')

@section('body-id', 'SUBPAGEregister')
@section('body-class', 'PAGEregister')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/email_domain_spellcheck.475758e876da713ed83d.css">
<link rel="stylesheet" href="/css/reg_profile_modal.ab15c3961726edc32ac2.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Complete your basic profile (recommended)</h1>
        </div>
        <div>&nbsp;</div>
    </div>

    <div class="grid-4-8-4">
        <aside>
            <p>&nbsp;</p>
        </aside>

        <div id="maincontent">
            <div id="regSuccessThanks" style="display: none;">
                <p class="msg success">
                    Thank you, you have successfully registered with SpareRoom.
                </p>

                <br>
                <p>
                    <a class="button" href="/">Continue</a>
                </p>
            </div>

            <div id="profileModal" data-upload-session="FD1459C4-C015-11EE-93F0-F717352B6A00" data-usertype="haveashare,lookingforashare">
                <form id="basicProfileForm" class="profile-form  profile-form--in-page">
                    @csrf

                    @if (Auth::user()->haveashare)
                    <p class="profile-form__title">About your place for rent</p>
                    <fieldset class="form-group form-group--no-validation form-group--advertiser-role">
                        <legend class="form-group__title form-group__title--light">I am a</legend>
                        <span class="form-group__radio">
                            <input name="advertiser_role" type="radio" id="liveInLandlord" value="live in landlord">
                            <label for="liveInLandlord">Live in landlord<span class="form-group__advertiser-role-text">(I own the property and live there)</span></label>
                        </span>
                        <span class="form-group__radio">
                            <input name="advertiser_role" type="radio" id="liveOutLandlord" value="live out landlord">
                            <label for="liveOutLandlord">Live out landlord<span class="form-group__advertiser-role-text">(I own the property but don't live there)</span></label>
                        </span>
                        <span class="form-group__radio">
                            <input name="advertiser_role" type="radio" id="currentTenant" value="current flatmate">
                            <label for="currentTenant">Current tenant/flatmate<span class="form-group__advertiser-role-text">(I am living in the property)</span></label>
                        </span>
                        <span class="form-group__radio">
                            <input name="advertiser_role" type="radio" id="agent" value="agent">
                            <label for="agent">Agent<span class="form-group__advertiser-role-text">(I am advertising on a landlord's behalf)</span></label>
                        </span>
                        <span class="form-group__radio">
                            <input name="advertiser_role" type="radio" id="formerFlatmate" value="former flatmate">
                            <label for="formerFlatmate">Former flatmate<span class="form-group__advertiser-role-text">(I am moving out and need someone to replace me)</span></label>
                        </span>
                    </fieldset>
                    @endif

                    @if (Auth::user()->lookingforashare)
                    <p class="profile-form__title">About your search for a place</p>
                    <fieldset class="form-group from-group--move-in-date">
                        <legend class="form-group__title">Preferred move in date <span class="form-group__label-hint">(optional)</span></legend>
                        <label class="sr-only" for="moveInDate">Preferred move in date (optional)</label>
                        <input id="moveInDate" type="date" name="date_available" class="form-group__date-input @error('date_available') is-invalid @enderror" pattern="\d{4}-\d{2}-\d{2}" min="2024-01-31" placeholder="dd-mm-yyy" value="{{ old('date_available') }}" autocomplete="date_available" autofocus>
                        <p class="form-group__date-error" aria-live="assertive"></p>
                    </fieldset>

                    <fieldset class="form-group from-group--rental-period">
                        <legend class="form-group__title">Minimum rental period</legend>
                        <span class="form-group__select">
                            <label class="sr-only" for="minTerm">Minimum period accommodation required for</label>
                            <select name="min_term" id="minTerm" class="@error('min_term') is-invalid @enderror" value="{{ old('min_term') }}" required autocomplete="min_term" autofocus>
                                <option value="0">No minimum</option>
                                <option value="1">1 month</option>
                                <option value="2">2 months</option>
                                <option value="3">3 months</option>
                                <option value="4">4 months</option>
                                <option value="5">5 months</option>
                                <option value="6">6 months</option>
                                <option value="7">7 months</option>
                                <option value="8">8 months</option>
                                <option value="9">9 months</option>
                                <option value="10">10 months</option>
                                <option value="11">11 months</option>
                                <option value="12">1 year</option>
                                <option value="15">1 year 3 months</option>
                                <option value="18">1 year 6 months</option>
                                <option value="21">1 year 9 months</option>
                                <option value="24">2 years</option>
                            </select>
                            <div class="form-group__select-icon">
                                <i class="far fa-chevron-down" aria-hidden="true"></i>
                            </div>
                        </span>
                        
                        <span class="form-group__linking-text">to</span>
                        <span class="form-group__select">
                            <label class="sr-only" for="maxTerm">Maximum period accommodation required for</label>
                            <select name="max_term" id="maxTerm" class="@error('max_term') is-invalid @enderror" value="{{ old('max_term') }}" required autocomplete="max_term" autofocus>
                                <option value="0">No maximum</option>
                                <option value="1">1 month</option>
                                <option value="2">2 months</option>
                                <option value="3">3 months</option>
                                <option value="4">4 months</option>
                                <option value="5">5 months</option>
                                <option value="6">6 months</option>
                                <option value="7">7 months</option>
                                <option value="8">8 months</option>
                                <option value="9">9 months</option>
                                <option value="10">10 months</option>
                                <option value="11">11 months</option>
                                <option value="12">1 year</option>
                                <option value="15">1 year 3 months</option>
                                <option value="18">1 year 6 months</option>
                                <option value="21">1 year 9 months</option>
                                <option value="24">2 years</option>
                                <option value="36">3 Years</option>
                            </select>
                            <div class="form-group__select-icon">
                                <i class="far fa-chevron-down" aria-hidden="true"></i>
                            </div>
                        </span>
                    </fieldset>
                    @endif

                    <p class="profile-form__title">About you</p>
                    <fieldset class="form-group form-group--no-validation form-group--photo">
                        <legend class="form-group__title">Your profile photo</legend>
                        <div class="photo-placeholder">
                            <span class="photo-placeholder__icon" aria-hidden="true">
                                <i class="far fa-user"></i>
                            </span>
                        </div>

                        <button class="button button--secondary dz-clickable" id="dzClickable" type="button">Add photo</button>
                        <div class="filepicker dropzone">
                            <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                        </div>
                        <p class="form-group__date-error" aria-live="assertive"></p>
                    </fieldset>
                    
                    <fieldset class="form-group form-group--no-validation">
                        <legend class="form-group__title">Occupation</legend>
                        <span class="form-group__radio">
                            <input name="occupation" type="radio" id="professional" value="professional">
                            <label for="professional">Professional</label>
                        </span>
                        <span class="form-group__radio">
                            <input name="occupation" type="radio" id="student" value="student">
                            <label for="student">Student</label>
                        </span>
                        <span class="form-group__radio">
                            <input name="occupation" type="radio" id="otherOccupation" value="other">
                            <label for="otherOccupation">Other</label>
                        </span>
                    </fieldset>

                    <div class="profile-form__buttons">
                        <button type="button" class="button button--link" aria-label="Skip completing your basic profile">Skip</button>
                        <button type="submit" class="button" id="submitButton">Continue</button>
                    </div>
                    <p class="profile-form__error " aria-live="assertive"></p>
                </form>
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
{{-- <script src="/js/reg_profile_modal.abaea7d4a273504127ed.js"></script> --}}
<script src="/js/a5cd844c47c7d9043148a380477de8b2.js"></script>
<script>
	SR.settings.loginReturnPath = '\x2F';
	SR.register.init({ confirmEmail: 0 });
</script>
@endsection
