<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CartSeeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\HistorySeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\HistoryListSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CitySeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            ItemSeeder::class,
            HistoryListSeeder::class,
            HistorySeeder::class,
        ]);
    }
}
