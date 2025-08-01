<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

         
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
            ]);
        }
        
    }
}
