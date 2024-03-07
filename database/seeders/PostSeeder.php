<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Post;

// Helpers
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        for ($i = 0; $i < 10; $i++) {
            $title = fake()->sentence();
            $slug = Str::slug($title);
            $post = Post::create([
                'title' => $title,
                'slug' => $slug,
                'content' => fake()->paragraph(),
            ]);
        }
    }
}