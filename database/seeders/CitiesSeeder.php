<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['name' => 'Lagos', 'slug' => 'lagos', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ikeja', 'slug' => 'ikeja', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Lekki', 'slug' => 'lekki', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Victoria Island', 'slug' => 'victoria-island', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ajah', 'slug' => 'ajah', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Surulere', 'slug' => 'surulere', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ikorodu', 'slug' => 'ikorodu', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Yaba', 'slug' => 'yaba', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Epe', 'slug' => 'epe', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Badagry', 'slug' => 'badagry', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Apapa', 'slug' => 'apapa', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Agege', 'slug' => 'agege', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Mushin', 'slug' => 'mushin', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ibeju-Lekki', 'slug' => 'ibeju-lekki', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Oshodi', 'slug' => 'oshodi', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ikoyi', 'slug' => 'ikoyi', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ejigbo', 'slug' => 'ejigbo', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Ketu', 'slug' => 'ketu', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Maryland', 'slug' => 'maryland', 'state' => 'Lagos', 'country' => 'Nigeria'],
            ['name' => 'Bariga', 'slug' => 'bariga', 'state' => 'Lagos', 'country' => 'Nigeria'],
        ];

        foreach ($cities as $city) {
            \App\Models\City::create($city);
        }
    }
}
