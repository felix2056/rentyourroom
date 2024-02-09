<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = [
            [
                'user_id' => \App\Models\User::inRandomOrder()->first()->id,
                'ad_title' => 'A room in a shared apartment',
                'ad_text' => 'A room in a shared apartment. The room is furnished and has an ensuite bathroom. The apartment is located in a serene environment and is close to the university.',
                'rooms_for_rent' => 4,
                'rooms_in_property' => 6,
                'roomstatus' => 'available',
                'roomprice' => 20000,
                'roomper' => 'pw',
                'roomtype' => 'single',
                'postcode' => '100101',
                'advertiser_role' => 'liveOutLandlord',
                'youremail' => 'test@example.com',
                'property_type' => 'Flat',
                'occupants' => 1,
                'street_name' => 'Admiralty Way',
                'neighbourhood' => \App\Models\City::find(3)->name,
                'neighbourhood_id' => 3,
                'station' => 'Lekki Phase 1',
                'no_of_mins' => 5,
                'no_of_mins_by' => 'walk',
                'living_room' => 'shared',
                'off_street_parking' => 'Y',
                'garden' => 'N',
                'garage' => 'N',
                'balcony' => 'Y',
                'disabled_access' => 'N',
                'roomensuite' => 'Y',
                'roomfurnishings' => 'furnished',
                'roomsecurity_deposit' => 20000,
                'day_avail' => 1,
                'month_avail' => 3,
                'year_avail' => 2024,
                'min_term' => 3,
                'max_term' => 12,
                'smoking_current' => 'N',
                'short_lets_considered' => 'Y',
                'days_of_wk_available' => '7_days_a_week',
                'references_needed' => 'N',
                'bills_inc' => 'yes',
                'broadband' => 'Y',
                'inagreement' => 'Y',
                'gender' => 'FFM',
                'share_type' => 'ND',
                'campus' => 'University of Lagos',
                'pets' => 'N',
                'min_age' => 18,
                'max_age' => 35,
                'lang' => 'English',
                'nationality' => 'Nigerian',
                'smoking' => 'N',
                'couples' => 'N',
                'vegetarians' => 'N',
                'gender_req' => 'N',
                'share_type_req' => 'N',
                'pets_req' => 'N',
                'lang_req' => 'English',
                'min_age_req' => 18,
                'max_age_req' => 35,
            ]
        ];

        foreach ($properties as $property) {
            \App\Models\Property::create($property);
        }
    }
}
