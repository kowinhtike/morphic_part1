<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user->image()->create(['url'=>'user_image1.jpg']);
        $user->image()->create(['url'=>'user_image2.jpg']);
        $user->image()->create(['url'=>'user_image3.jpg']);

        $post = Post::create(['title' => 'My First Post', 'content' => 'This is my first post.']);
        $post->image()->create(['url'=>'post_image1.jpg']);
        $post->image()->create(['url'=>'post_image2.jpg']);
        $post->image()->create(['url'=>'post_image3.jpg']);
    }
}
