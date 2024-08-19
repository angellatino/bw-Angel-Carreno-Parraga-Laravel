<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Fetch posts from the database
        $posts = Post::latest()->get(); // Adjust as needed, e.g., for pagination

        // Pass posts to the view
        return view('welcome', compact('posts'));
    }
}
