<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'admin',
            'email'=>'admin@gmail.com',
            'address'=>'semesta',
            'phone'=>'12345678',
            'password'=>Hash::make('admin1234'),
            'role'=>'Admin'
        ]);
    }
}
