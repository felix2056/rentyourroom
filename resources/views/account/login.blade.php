@extends('layouts.app')

@section('title', 'Log in to SpareRoom')

@section('body-id', 'SUBPAGElogin')
@section('body-class', 'PAGElogin')

@section('css')
<link rel="stylesheet" href="/css/f01456b9d062ddc1c7c9542d31c2e330.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main" style="padding-top: 20px;">
    <div>
        <div class="grid-12-4 " id="mainheader">
            <div>
                <h1>Log in</h1>
            </div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-12-4">
            <div id="maincontent">


                <div id="userAuth" class="auth auth-logon" data-user-type data-use-modal data-email data-pass data-log-in-from-url="&#47;" data-csrf-token="6fd25e68c49877941fbef7b9e8f17706bbd26994,4a428f1763c235e3a18321dba036f060e919a7b7,1706275299">



                    <div id="user_auth">
                        <div style="display: flex; justify-content: center; margin: 16px 0 0;">
                            <i class="far fa-spinner fa-pulse fa-4x fa-fw"></i>
                        </div>
                        <h3 style="text-align: center; margin-top: 16px; text-transform: capitalize; font-weight: 400; color: #5E5E5E">
                            loading</h3>
                    </div>
                </div>

            </div>
            <aside>


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
                        <script id="ze-snippet" defer src="js/snippet.js"> </script>
                        <!-- End of spareroom Zendesk Widget script -->
                    </div>
                </section>

            </aside>
        </div>
    </div>
</main>
@endsection

@section('js')
<script>
    SR.settings.loginReturnPath = '\x2F';
    jQuery('.form_row_email input').focus();
</script>
@endsection
