<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\Property;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PropertyController extends Controller
{
    public function state($state)
    {
        return view('state', compact('state'));
    }

    public function neighbourhood($state, $neighbourhood)
    {
        return view('neighbourhood', compact('state', 'neighbourhood'));
    }

    public function show($state, $neighbourhood, $slug)
    {
        $neighbourhood = str_replace('-', ' ', $neighbourhood);

        $property = Property::where('neighbourhood', $neighbourhood)->where(function ($query) use ($slug) {
            $query->where('slug', $slug)->orWhere('id', $slug);
        })->first();
        if (!$property) return abort(404);

        return view('flatshare.show', compact('property'));
    }

    public function search()
    {
        return view('flatshare.search');
    }

    public function whereToLiveWizard()
    {
        return view('flatshare.where-to-live-wizard');
    }

    public function findPostcode3(Request $request)
    {
        $property = Session::get('property');
        // return response()->json($property);

        if ($request->isMethod('post')) {
            $request->validate([
                'rooms_for_rent' => 'required|integer',
                'rooms_in_property' => 'required|integer',
                'postcode' => 'required',
                'property_type' => 'required|in:Flat,House,Property',
                'occupants' => 'required|integer',
                'street_name' => 'required',
                'advertiser_role' => 'required|in:liveInLandlord,liveOutLandlord,currentTenant,agent,formerFlatmate',
                'youremail' => 'required|email',
            ]);

            // update session
            $property['current_step'] = $request->current_step;
            $property['rooms_for_rent'] = $request->rooms_for_rent;
            $property['rooms_in_property'] = $request->rooms_in_property;
            $property['postcode'] = $request->postcode;
            $property['property_type'] = $request->property_type;
            $property['occupants'] = $request->occupants;
            $property['street_name'] = $request->street_name;
            $property['advertiser_role'] = $request->advertiser_role;
            $property['youremail'] = $request->youremail;
            Session::put('property', $property);
            
            return redirect()->route('flatshare.offeredAdvert3');
        }

        if (!$property) Session::put('property', $this->getDefaultPropertyArray());

        return view('flatshare.find-postcode3', compact('property'));
    }

    public function offeredAdvert3(Request $request)
    {
        $property = Session::get('property');
        if (!$property) return redirect()->route('flatshare.findPostcode3');
        
        if ($request->isMethod('post')) {
            $request->validate([
                'neighbourhood' => 'required',
                'no_of_mins' => 'required|integer',
                'no_of_mins_by' => 'required|in:walk,car,bus,tram',
                'station' => 'required',
                'living_room' => 'required|in:shared,own,none',
                'off_street_parking' => 'in:Y,N',
                'garden' => 'in:Y,N',
                'garage' => 'in:Y,N',
                'balcony' => 'in:Y,N',
                'disabled_access' => 'in:Y,N',
            ]);

            // get city
            $city = City::where('name', $request->neighbourhood)->first();
            if (!$city) return redirect()->back()->with('error', 'Invalid neighbourhood');


            // update session
            $property['current_step'] = $request->current_step;
            $property['neighbourhood'] = $request->neighbourhood;
            $property['neighbourhood_id'] = $city->id;
            $property['no_of_mins'] = $request->no_of_mins;
            $property['no_of_mins_by'] = $request->no_of_mins_by;
            $property['station'] = $request->station;
            $property['living_room'] = $request->living_room;
            $property['off_street_parking'] = $request->off_street_parking ? 'Y' : 'N';
            $property['garden'] = $request->garden ? 'Y' : 'N';
            $property['garage'] = $request->garage ? 'Y' : 'N';
            $property['balcony'] = $request->balcony ? 'Y' : 'N';
            $property['disabled_access'] = $request->disabled_access ? 'Y' : 'N';
            Session::put('property', $property);

            return redirect()->route('flatshare.offeredAdvert4');
        }

        return view('flatshare.offered-advert3', compact('property'));
    }

    public function offeredAdvert4(Request $request)
    {
        $property = Session::get('property');
        if (!$property) return redirect()->route('flatshare.findPostcode3');

        if ($request->isMethod('post')) {
            $request->validate([
                'roomprice' => 'required|numeric',
                'roomper' => 'required|in:pw,pcm',
                'roomtype' => 'required|in:single,double,twin,triple,other',
                'roomensuite' => 'in:Y,N',
                'roomfurnishings' => 'required|in:furnished,unfurnished,partFurnished',
                'roomsecurity_deposit' => 'required|numeric',
                'day_avail' => 'required|integer',
                'month_avail' => 'required|integer',
                'year_avail' => 'required|integer',
                'min_term' => 'required|integer',
                'max_term' => 'required|integer',
                'short_lets_considered' => 'in:Y,N',
                'days_of_wk_available' => 'required|in:7_days_a_week,mon_to_fri_only,weekends_only',
                'references_needed' => 'in:Y,N',
                'bills_inc' => 'in:yes,no,some',
                'broadband' => 'in:Y,N',
                'inagreement' => 'in:Y,N',
            ]);

            // update session
            $property['current_step'] = $request->current_step;
            $property['roomprice'] = $request->roomprice;
            $property['roomper'] = $request->roomper;
            $property['roomtype'] = $request->roomtype;
            $property['roomensuite'] = $request->roomensuite ? 'Y' : 'N';
            $property['roomfurnishings'] = $request->roomfurnishings;
            $property['roomsecurity_deposit'] = $request->roomsecurity_deposit;
            $property['day_avail'] = $request->day_avail;
            $property['month_avail'] = $request->month_avail;
            $property['year_avail'] = $request->year_avail;
            $property['min_term'] = $request->min_term;
            $property['max_term'] = $request->max_term;
            $property['short_lets_considered'] = $request->short_lets_considered ? 'Y' : 'N';
            $property['days_of_wk_available'] = $request->days_of_wk_available;
            $property['references_needed'] = $request->references_needed ? 'Y' : 'N';
            $property['bills_inc'] = $request->bills_inc ?? 'no';
            $property['broadband'] = $request->broadband ? 'Y' : 'N';
            $property['inagreement'] = $request->inagreement ? 'Y' : 'N';
            Session::put('property', $property);

            return redirect()->route('flatshare.offeredAdvert5');
        }

        return view('flatshare.offered-advert4', compact('property'));
    }

    public function offeredAdvert5(Request $request)
    {
        $property = Session::get('property');
        if (!$property) return redirect()->route('flatshare.findPostcode3');

        if ($request->isMethod('post')) {
            $request->validate([
                'smoking_current' => 'in:Y,N',
                'gender' => 'in:FFF,FFM,MMF,MMM',
                'share_type' => 'in:ND,S,P,O,M',
                'campus' => 'nullable',
                'pets' => 'in:Y,N',
                'min_age' => 'required|integer',
                'max_age' => 'required|integer',
                'lang' => 'required',
                'smoking' => 'in:Y,N',
                'gender_req' => 'in:N,M,F',
                'share_type_req' => 'in:N,S,P',
                'pets_req' => 'in:N,Y',
                'lang_req' => 'required',
                'min_age_req' => 'required|integer',
                'max_age_req' => 'required|integer',
            ]);

            // update session
            $property['current_step'] = $request->current_step;
            $property['smoking_current'] = $request->smoking_current ? 'Y' : 'N';
            $property['gender'] = $request->gender;
            $property['share_type'] = $request->share_type;
            $property['campus'] = $request->campus;
            $property['pets'] = $request->pets ? 'Y' : 'N';
            $property['min_age'] = $request->min_age;
            $property['max_age'] = $request->max_age;
            $property['lang'] = $request->lang;
            $property['smoking'] = $request->smoking ? 'Y' : 'N';
            $property['gender_req'] = $request->gender_req;
            $property['share_type_req'] = $request->share_type_req;
            $property['pets_req'] = $request->pets_req;
            $property['lang_req'] = $request->lang_req;
            $property['min_age_req'] = $request->min_age_req;
            $property['max_age_req'] = $request->max_age_req;
            Session::put('property', $property);

            return redirect()->route('flatshare.offeredAdvert6');
        }

        return view('flatshare.offered-advert5', compact('property'));
    }

    public function offeredAdvert6(Request $request)
    {
        $property = Session::get('property');
        if (!$property) return redirect()->route('flatshare.findPostcode3');

        if ($request->isMethod('post')) {
            $request->validate([
                'ad_title' => 'required',
                'ad_text' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'display_last_name' => 'in:Y,N',
                'tel' => 'required',
                'display_tel' => 'in:Y,N',
            ]);

            $property['current_step'] = $request->current_step;
            $property['ad_title'] = $request->ad_title;
            $property['ad_text'] = $request->ad_text;
            $property['slug'] = Str::slug($request->ad_title);
            $property['first_name'] = $request->first_name;
            $property['last_name'] = $request->last_name;
            $property['display_last_name'] = $request->display_last_name;
            $property['tel'] = $request->tel;
            $property['display_tel'] = $request->display_tel;
            Session::put('property', $property);

            return redirect()->route('flatshare.offeredAdvert7');
        }

        return view('flatshare.offered-advert6', compact('property'));
    }

    public function offeredAdvert7(Request $request)
    {
        $property = Session::get('property');
        if (!$property) return redirect()->route('flatshare.findPostcode3');

        if ($request->isMethod('post')) {
            if (Auth::check()) {
                $property['user_id'] = Auth::id();
            } else {
                if ($request->login_email && $request->login_password) {
                    $request->validate([
                        'login_email' => 'required|email',
                        'login_password' => 'required',
                    ]);

                    // login user
                    $email = $request->login_email;
                    $password = $request->login_password;

                    $credentials = [
                        'email' => $email,
                        'password' => $password,
                    ];

                    if (auth()->attempt($credentials)) {
                        $property['user_id'] = auth()->id();
                    }
                } elseif ($request->email && $request->email_again && $request->password && $request->password_again) {
                    $request->validate([
                        'email' => 'required|email',
                        'email_again' => 'required|email|same:email',
                        'password' => 'required|min:8',
                        'password_again' => 'required|min:8|same:password',
                    ]);

                    // check if user already exists
                    $user = User::where('email', $request->email)->first();
                    if ($user) return redirect()->back()->with('error', 'User already exists');

                    // register user
                    $user = User::create([
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
                    
                    $property['user_id'] = $user->id;
                } else {
                    return redirect()->back()->with('error', 'Invalid request');
                }
            }

            // save property
            $saveProperty = new Property();
            $saveProperty->ad_title = $property['ad_title'];
            $saveProperty->ad_text = $property['ad_text'];
            $saveProperty->slug = $property['slug'];
            $saveProperty->user_id = $property['user_id'];
            $saveProperty->rooms_for_rent = $property['rooms_for_rent'];
            $saveProperty->rooms_in_property = $property['rooms_in_property'];
            $saveProperty->roomstatus = $property['roomstatus'];
            $saveProperty->roomprice = $property['roomprice'];
            $saveProperty->roomper = $property['roomper'];
            $saveProperty->roomtype = $property['roomtype'];
            $saveProperty->postcode = $property['postcode'];
            $saveProperty->advertiser_role = $property['advertiser_role'];
            $saveProperty->youremail = $property['youremail'];
            $saveProperty->property_type = $property['property_type'];
            // $saveProperty->property_type_more = $property['property_type_more'];
            $saveProperty->occupants = $property['occupants'];
            $saveProperty->street_name = $property['street_name'];
            $saveProperty->neighbourhood = $property['neighbourhood'];
            $saveProperty->neighbourhood_id = $property['neighbourhood_id'];
            $saveProperty->station = $property['station'];
            $saveProperty->no_of_mins = $property['no_of_mins'];
            $saveProperty->no_of_mins_by = $property['no_of_mins_by'];
            $saveProperty->living_room = $property['living_room'];
            $saveProperty->off_street_parking = $property['off_street_parking'];
            $saveProperty->garden = $property['garden'];
            $saveProperty->garage = $property['garage'];
            $saveProperty->balcony = $property['balcony'];
            $saveProperty->disabled_access = $property['disabled_access'];
            $saveProperty->roomensuite = $property['roomensuite'];
            $saveProperty->roomfurnishings = $property['roomfurnishings'];
            $saveProperty->roomsecurity_deposit = $property['roomsecurity_deposit'];
            $saveProperty->day_avail = $property['day_avail'];
            $saveProperty->month_avail = $property['month_avail'];
            $saveProperty->year_avail = $property['year_avail'];
            $saveProperty->min_term = $property['min_term'];
            $saveProperty->max_term = $property['max_term'];
            $saveProperty->smoking_current = $property['smoking_current'];
            $saveProperty->short_lets_considered = $property['short_lets_considered'];
            $saveProperty->days_of_wk_available = $property['days_of_wk_available'];
            $saveProperty->references_needed = $property['references_needed'];
            $saveProperty->bills_inc = $property['bills_inc'];
            $saveProperty->broadband = $property['broadband'];
            $saveProperty->inagreement = $property['inagreement'];
            $saveProperty->gender = $property['gender'];
            $saveProperty->share_type = $property['share_type'];
            $saveProperty->campus = $property['campus'];
            $saveProperty->pets = $property['pets'];
            $saveProperty->min_age = $property['min_age'];
            $saveProperty->max_age = $property['max_age'];
            $saveProperty->lang = $property['lang'];
            $saveProperty->nationality = $property['nationality'];
            $saveProperty->interests = $property['interests'];
            $saveProperty->smoking = $property['smoking'];
            $saveProperty->couples = $property['couples'];
            $saveProperty->vegetarians = $property['vegetarians'];
            $saveProperty->gender_req = $property['gender_req'];
            $saveProperty->share_type_req = $property['share_type_req'];
            $saveProperty->pets_req = $property['pets_req'];
            $saveProperty->lang_req = $property['lang_req'];
            $saveProperty->min_age_req = $property['min_age_req'];
            $saveProperty->max_age_req = $property['max_age_req'];
            $saveProperty->save();

            // clear session
            Session::forget('property');

            return redirect()->route('flatshare.show', ['lagos', $saveProperty->neighbourhood_slug, $saveProperty->slug]);
        }
                

        return view('flatshare.offered-advert7', compact('property'));
    }

    private function getDefaultPropertyArray()
    {
        return [
            'current_step' => 'theproperty',
            'ad_title' => '',
            'ad_text' => '',
            'slug' => '',
            'first_name' => '',
            'last_name' => '',
            'display_last_name' => 'Y',
            'where_heard' => 'Google',
            'rooms_for_rent' => 1,
            'rooms_in_property' => 2,
            'roomstatus' => 'available',
            'roomprice' => null,
            'roomper' => 'pw',
            'roomtype' => 'single',
            'postcode' => '',
            'advertiser_role' => 'liveInLandlord',
            'advertiser_role_other' => '',
            'youremail' => '',
            'tel' => '',
            'display_tel' => 'N',
            'property_type' => 'Flat',
            'property_type_more' => '',
            'occupants' => 0,
            'street_name' => '',
            'neighbourhood' => '',
            'neighbourhood_id' => null,
            'station' => '',
            'no_of_mins' => null,
            'no_of_mins_by' => 'walk',
            'living_room' => false,
            'off_street_parking' => false,
            'garden' => false,
            'garage' => false,
            'balcony' => false,
            'disabled_access' => false,
            'roomensuite' => 'N',
            'roomfurnishings' => 'furnished',
            'roomsecurity_deposit' => null,
            'day_avail' => null,
            'month_avail' => null,
            'year_avail' => null,
            'min_term' => null,
            'max_term' => null,
            'smoking_current' => 'N',
            'short_lets_considered' => 'Y',
            'days_of_wk_available' => '7_days_a_week',
            'references_needed' => 'N',
            'bills_inc' => 'yes',
            'broadband' => 'Y',
            'inagreement' => 'N',
            'gender' => null,
            'share_type' => null,
            'campus' => '',
            'pets' => 'N',
            'min_age' => null,
            'max_age' => null,
            'lang' => '',
            'nationality' => '',
            'interests' => null,
            'smoking' => 'N',
            'couples' => 'N',
            'vegetarians' => 'N',
            'gender_req' => null,
            'share_type_req' => null,
            'pets_req' => null,
            'lang_req' => 'english',
            'min_age_req' => null,
            'max_age_req' => null,
        ];
    }
}
