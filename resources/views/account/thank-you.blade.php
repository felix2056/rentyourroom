@extends('layouts.app')

@section('title', 'Register on SpareRoom')

@section('body-id', 'SUBPAGEregister')
@section('body-class', 'PAGEregister')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
<link rel="stylesheet" href="/css/reg_profile_modal.ab15c3961726edc32ac2.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Thank you for registering</h1>
        </div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
        <aside>

            <p>&nbsp;</p>
        </aside>
        <div id="maincontent">


            <div id="regSuccessThanks" style="display: block;">
                <p class="msg success">
                    Thank you, you have successfully registered with SpareRoom.
                </p>

                <br>
                <p>
                    <a class="button" href="/">Continue</a>
                </p>
            </div>



            <div id="profileModal" data-upload-session="FD1459C4-C015-11EE-93F0-F717352B6A00" data-usertype="haveashare,lookingforashare"></div>

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
<script>
    SR.user = {
        id: 23073983
        , name: "Daniel Felix"
    };

</script>

<script>
    (function() {
        var forceUpdate = parseInt('', 10);
        var now = Date.now();
        var myNewestProfile = SR.getLocalStorageItem('newest-profile', 'none');

        function getMyProfiles(callback) {
            jQuery.ajax({
                url: '/flatshare/mylistings.pl?format=json&max_per_page=1'
                , dataType: 'json'
                , success: function(data) {
                    callback(data);
                }
            });
        }

        function saveNewestProfile(profile) {
            var newestProfile = {
                date_checked: Date.now()
                , profile: profile
            }
            return SR.setLocalStorageItem('newest-profile', newestProfile);
        }

        function getNewestProfile(profiles) {
            return profiles.sort(function(a, b) {
                return Date.parse(b.date_live_iso8601) - Date.parse(a.date_live_iso8601);
            })[0];
        }

        function processMyProfiles(profiles) {
            var allProfiles;
            if (profiles.myads) {
                // should check they are not deactivated first? possibly not…
                if (profiles.myads.offered && profiles.myads.wanted) {
                    allProfiles = profiles.myads.offered.concat(profiles.myads.wanted);
                } else allProfiles = profiles.myads.offered ? profiles.myads.offered : profiles.myads.wanted;
                var newest = getNewestProfile(allProfiles);
                return saveNewestProfile(newest);
            }
            return false;
        }

        function updateMyNewestProfile() {
            return getMyProfiles(processMyProfiles);
        }
        if (!myNewestProfile || !myNewestProfile.date_checked || now - myNewestProfile.date_checked > 1800000 || forceUpdate) {
            return updateMyNewestProfile();
        }
    }());

</script>

<script src="/js/reg_profile_modal.abaea7d4a273504127ed.js"></script>
@endsection
