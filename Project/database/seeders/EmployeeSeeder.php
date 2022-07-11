<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Employees;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 10; $i++) { 
            Employees::create([
                'user_id'    => $i,
                'alamat'     => $faker->address,
                'telepon'    => $faker->phoneNumber,
                'pekerjaan'  => 'karyawan',
            ]);
        }
    }
}
