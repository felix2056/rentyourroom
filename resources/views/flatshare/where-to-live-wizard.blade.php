@extends('layouts.app')

@section('title', 'Where to Live Wizard')

@section('body-id', 'SUBPAGEwtlwizard')
@section('body-class', 'PAGElistings')

@section('css')
<link rel="stylesheet" href="/css/77350867d40e0deebcb2156b43e65c1e.css">
@endsection

@section('content')
<main id="spareroom" class="wrap wrap--main">
    <div class="grid-12-4" id="mainheader">
        <div class="cols cols4" id="listing_heading">
            <div class="col col3 col_first">
                <h1 class="no_h1_underline">Where to Live Wizard (beta)</h1>
            </div>
            <div class="col col_last" id="social_buttons">
                <div id="facebook_like_button">
                    <iframe src="//www.facebook.com/v3.2/plugins/like.php?href=https%3A%2F%2Fwww.spareroom.co.uk%2Fflatshare%2F{{ route('flatshare.whereToLiveWizard') }}&amp;send=false&amp;layout=button_count&amp;width=94&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=5097577709" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:94px; height:21px;" allowTransparency="true"></iframe>
                </div>
                <div id="tweet_button">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.spareroom.co.uk/flatshare/{{ route('flatshare.whereToLiveWizard') }}" data-count="none">Tweet</a>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");

                    </script>
                </div>
            </div>
        </div>
    </div>
    <div id="maincontent">
        <p>
            Nigeria is a BIG place and more closely resembles a collection of small towns and villages than one whole city.
            Half the battle in finding somewhere to live in Nigeria, is knowing where to look. Narrowing down your options is
            crucial, if you don't want to spend a lot of time and money travelling - it can take well over an hour to get
            from one side of Nigeria to the other! Using feedback from advertisers living in the areas, the Where to Live
            Wizard aims to point you in the right direction based on criteria that is important to you.
        </p>

        <div class="wtlw-question">
            <h2 class="wtlw-heading wtlw-heading-standard">1. Please choose between 2 and 5 qualities you look for in an
                area</h2>

            <p class="msg error">
                <strong>Please select between 2 and 5 characteristics</strong>
            </p>

            <form action="/flatshare/{{ route('flatshare.whereToLiveWizard') }}" method="post" class="tagger">
                <div id="qualities" class="tagger_tags wtlw-qualities">

                    <p class="tagger_tag tag_id_1">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_1" id="tag_1" value="1">
                        <label for="tag_1">Alternative</label>
                    </p>

                    <p class="tagger_tag tag_id_2">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_2" id="tag_2" value="1">
                        <label for="tag_2">Bohemian</label>
                    </p>

                    <p class="tagger_tag tag_id_3">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_3" id="tag_3" value="1">
                        <label for="tag_3">Central</label>
                    </p>

                    <p class="tagger_tag tag_id_4">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_4" id="tag_4" value="1">
                        <label for="tag_4">Chilled</label>
                    </p>

                    <p class="tagger_tag tag_id_7">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_7" id="tag_7" value="1">
                        <label for="tag_7">Commuterbelt</label>
                    </p>

                    <p class="tagger_tag tag_id_8">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_8" id="tag_8" value="1">
                        <label for="tag_8">Cosmopolitan</label>
                    </p>

                    <p class="tagger_tag tag_id_9">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_9" id="tag_9" value="1">
                        <label for="tag_9">Cosy</label>
                    </p>

                    <p class="tagger_tag tag_id_10">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_10" id="tag_10" value="1">
                        <label for="tag_10">Cultured</label>
                    </p>

                    <p class="tagger_tag tag_id_11">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_11" id="tag_11" value="1">
                        <label for="tag_11">Family friendly</label>
                    </p>

                    <p class="tagger_tag tag_id_12">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_12" id="tag_12" value="1">
                        <label for="tag_12">Fashionable</label>
                    </p>

                    <p class="tagger_tag tag_id_13">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_13" id="tag_13" value="1">
                        <label for="tag_13">Friendly</label>
                    </p>

                    <p class="tagger_tag tag_id_14">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_14" id="tag_14" value="1">
                        <label for="tag_14">Fun</label>
                    </p>

                    <p class="tagger_tag tag_id_15">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_15" id="tag_15" value="1">
                        <label for="tag_15">Gay</label>
                    </p>

                    <p class="tagger_tag tag_id_16">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_16" id="tag_16" value="1">
                        <label for="tag_16">Good for Bars</label>
                    </p>

                    <p class="tagger_tag tag_id_20">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_20" id="tag_20" value="1">
                        <label for="tag_20">Good for Eating out</label>
                    </p>

                    <p class="tagger_tag tag_id_17">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_17" id="tag_17" value="1">
                        <label for="tag_17">Good for Market(s)</label>
                    </p>

                    <p class="tagger_tag tag_id_18">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_18" id="tag_18" value="1">
                        <label for="tag_18">Good for Nightlife</label>
                    </p>

                    <p class="tagger_tag tag_id_19">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_19" id="tag_19" value="1">
                        <label for="tag_19">Good for Pubs</label>
                    </p>

                    <p class="tagger_tag tag_id_21">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_21" id="tag_21" value="1">
                        <label for="tag_21">Good for Shopping</label>
                    </p>

                    <p class="tagger_tag tag_id_22">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_22" id="tag_22" value="1">
                        <label for="tag_22">Happening</label>
                    </p>

                    <p class="tagger_tag tag_id_23">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_23" id="tag_23" value="1">
                        <label for="tag_23">Hilly</label>
                    </p>

                    <p class="tagger_tag tag_id_24">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_24" id="tag_24" value="1">
                        <label for="tag_24">Historic</label>
                    </p>

                    <p class="tagger_tag tag_id_25">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_25" id="tag_25" value="1">
                        <label for="tag_25">Leafy</label>
                    </p>

                    <p class="tagger_tag tag_id_26">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_26" id="tag_26" value="1">
                        <label for="tag_26">Lively</label>
                    </p>

                    <p class="tagger_tag tag_id_27">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_27" id="tag_27" value="1">
                        <label for="tag_27">Modern</label>
                    </p>

                    <p class="tagger_tag tag_id_28">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_28" id="tag_28" value="1">
                        <label for="tag_28">Multicultural</label>
                    </p>

                    <p class="tagger_tag tag_id_29">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_29" id="tag_29" value="1">
                        <label for="tag_29">Picturesque</label>
                    </p>

                    <p class="tagger_tag tag_id_30">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_30" id="tag_30" value="1">
                        <label for="tag_30">Posh</label>
                    </p>

                    <p class="tagger_tag tag_id_32">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_32" id="tag_32" value="1">
                        <label for="tag_32">Quiet</label>
                    </p>

                    <p class="tagger_tag tag_id_33">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_33" id="tag_33" value="1">
                        <label for="tag_33">Quirky</label>
                    </p>

                    <p class="tagger_tag tag_id_39">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_39" id="tag_39" value="1">
                        <label for="tag_39">Safe</label>
                    </p>

                    <p class="tagger_tag tag_id_40">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_40" id="tag_40" value="1">
                        <label for="tag_40">Studenty</label>
                    </p>

                    <p class="tagger_tag tag_id_41">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_41" id="tag_41" value="1">
                        <label for="tag_41">Suburban</label>
                    </p>

                    <p class="tagger_tag tag_id_43">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_43" id="tag_43" value="1">
                        <label for="tag_43">Underrated</label>
                    </p>

                    <p class="tagger_tag tag_id_44">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_44" id="tag_44" value="1">
                        <label for="tag_44">Undiscovered</label>
                    </p>

                    <p class="tagger_tag tag_id_45">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_45" id="tag_45" value="1">
                        <label for="tag_45">Unpretentious</label>
                    </p>

                    <p class="tagger_tag tag_id_46">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_46" id="tag_46" value="1">
                        <label for="tag_46">Up and coming</label>
                    </p>

                    <p class="tagger_tag tag_id_47">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_47" id="tag_47" value="1">
                        <label for="tag_47">Urban</label>
                    </p>

                    <p class="tagger_tag tag_id_48">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_48" id="tag_48" value="1">
                        <label for="tag_48">Villagey</label>
                    </p>

                    <p class="tagger_tag tag_id_49">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_49" id="tag_49" value="1">
                        <label for="tag_49">Waterside</label>
                    </p>

                    <p class="tagger_tag tag_id_50">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_50" id="tag_50" value="1">
                        <label for="tag_50">Well-connected</label>
                    </p>

                    <p class="tagger_tag tag_id_51">
                        <input class="wtlw-checkbox" type="checkbox" name="tag_51" id="tag_51" value="1">
                        <label for="tag_51">Young</label>
                    </p>

                </div>
                <div class="tagger_budget">
                    <h2 class="wtlw-heading wtlw-heading-standard">2. Please enter the maximum you can pay in rent (including
                        bills)</h2>
                    <p class="wtlw-question-budget">&pound;<select class="wtlw-question-budget-select" name="budget">
                            <option value SELECTED>Select...</option>
                            <option>250</option>
                            <option>300</option>
                            <option>350</option>
                            <option>400</option>
                            <option>450</option>
                            <option>500</option>
                            <option>550</option>
                            <option>600</option>
                            <option>650</option>
                            <option>700</option>
                            <option>750</option>
                            <option>800</option>
                            <option>850</option>
                            <option>900</option>
                            <option>950</option>
                            <option>1000</option>
                            <option>1050</option>
                            <option>1100</option>
                            <option>1150</option>
                            <option value="1200">1200+</option>
                        </select>
                        per calendar month
                        <input type="hidden" name="per" value="pcm">
                    </p>
                </div>
                <div class="buttons">
                    <input type="hidden" name="action" value="tell_me_where_to_live">
                    <button class="button wtlw-question-submit" type="submit" name="submit">Go</button>
                </div>
            </form>
        </div>

    </div>
</main>
@endsection

@section('js')

@endsection
