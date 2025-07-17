<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::get();
        $fake = Factory::create();

        foreach ($posts as $post) {
            
            for ($i = 0; $i <= 3; $i++) {
                Comment::create([
                    'post_id' => $post->id,
                    'comment' => $fake->sentence
                ]);

            }
        }


    }
}
