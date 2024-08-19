<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        $userId = 1; // Set this to a valid user ID

        Post::create([
            'title' => 'Liverpool Eyeing Star Forward from Bundesliga',
            'content' => 'Liverpool FC is reportedly interested in signing a top forward from the Bundesliga...',
            'cover_image' => 'path_to_image.jpg',
            'published_at' => now(),
            'user_id' => $userId, // Set the user ID here
        ]);
    
        Post::create([
            'title' => 'Manchester United to Make Move for French Midfielder',
            'content' => 'Manchester United is set to make a big-money move for a French midfielder...',
            'cover_image' => 'path_to_image.jpg',
            'published_at' => now(),
            'user_id' => $userId, // Set the user ID here
        ]);

        // Add more posts if needed
    }
}
