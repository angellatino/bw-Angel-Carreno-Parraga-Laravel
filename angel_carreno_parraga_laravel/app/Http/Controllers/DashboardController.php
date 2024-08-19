<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch posts to be displayed on the dashboard
        $posts = Post::latest()->get();

        // Pass posts data to the view
        return view('dashboard', compact('posts'));
    }
}


