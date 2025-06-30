<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AdmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         
       
       $faker = Faker::create();

        foreach (range(1, 20) as $i) {
            DB::table('admissions')->insert([
                'name' => $faker->name,
                'father_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('1234567'), 
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        
    }
}
