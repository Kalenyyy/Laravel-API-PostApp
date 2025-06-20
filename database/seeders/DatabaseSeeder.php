<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(5)->create()->each(function ($post) {
            Comment::factory(rand(2, 4))->create([
                'post_id' => $post->id,
            ]);
        });
    }
}
