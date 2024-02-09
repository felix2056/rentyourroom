<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $users = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'test@example.com',
                'password' => bcrypt('password'),
                'gender' => 'M',
                'dofb_day' => 1,
                'dofb_month' => 1,
                'dofb_year' => 1990,
                'lookingforashare' => 1,
                'haveashare' => 0,
                'makeashare' => 0,
                'where_heard' => 'Google',
                'advertiser_role' => 'liveOutLandlord',
                'date_available' => '2024-03-01',
                'min_term' => 3,
                'max_term' => 12,
                'occupation' => 'Professional',
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
