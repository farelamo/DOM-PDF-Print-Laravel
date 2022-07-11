<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 10; $i++) { 
            User::create([
                'name'      => $faker->name,
                'email'     => $faker->email,
                'password'  => Hash::make('12345'),
            ]);
        }
    }
}
