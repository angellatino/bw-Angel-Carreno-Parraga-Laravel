<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class PostController extends Controller
{
    public function __construct()
    {
        // Apply auth middleware to all methods except index and show
        $this->middleware('auth')->except(['index', 'show']);
        
        // Apply admin middleware to methods that require admin access
        $this->middleware('admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image'
        ]);

        $path = $request->file('cover_image')?->store('images', 'public');

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'cover_image' => $path,
            'published_at' => now()
        ]);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image'
        ]);

        $path = $request->file('cover_image')?->store('images', 'public');

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'cover_image' => $path
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}


