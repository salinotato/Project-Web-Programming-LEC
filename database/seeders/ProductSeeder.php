<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory AS Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'ProductName' => "Yangko",
            'ProductImage' => "yangko.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 25000,
            'CitiesID' => 5,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Bakpia",
            'ProductImage' => "bakpia.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 35000,
            'CitiesID' => 5,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Belut",
            'ProductImage' => "belut.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 20000,
            'CitiesID' => 3,
            'isDelete' => 0
        ]);
        
        Product::create([
            'ProductName' => "Bolu Meranti",
            'ProductImage' => "bolu-meranti.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 50000,
            'CitiesID' => 2,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Gudeg",
            'ProductImage' => "gudeg.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 15000,
            'CitiesID' => 5,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Wedang Uwuh",
            'ProductImage' => "wedang-uwuh.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 8000,
            'CitiesID' => 5,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Peyek Tumpuk",
            'ProductImage' => "peyek-tumpuk.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 10000,
            'CitiesID' => 4,
            'isDelete' => 0
        ]);

        Product::create([
            'ProductName' => "Kacang Disco",
            'ProductImage' => "kacang-disco.png",
            'ProductDescription'=> "lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet.",
            'ProductPrice' => 7500,
            'CitiesID' => 2,
            'isDelete' => 0
        ]);
    }
}
