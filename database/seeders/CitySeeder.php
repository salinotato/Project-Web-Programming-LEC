<?php

namespace Database\Seeders;

use App\Models\City;
use Faker\Factory AS Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        City::create([
            'CityName'=>"DKI Jakarta",
        ]);
        City::create([
            'CityName'=>"Surabaya",
        ]);
        City::create([
            'CityName'=>"Bandung",
        ]);
        City::create([
            'CityName'=>"Medan",
        ]);
        City::create([
            'CityName'=>"Yogyakarta",
        ]);
        
    }
}
