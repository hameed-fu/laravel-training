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
       $students = DB::table('students')->pluck('id')->toArray();
        

        foreach ($students as $i) {
            // 
            DB::table('admissions')->insert([
                'name' => $faker->name,
                'father_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('1234567'), 
                'phone' => $faker->phoneNumber,
                'class' => '5th',
                'student_id' => $i,
                'address' => $faker->address,
                'fee' => rand(100000, 500000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        
    }
}
