<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Show form to create a new post
    public function create()
    {
        return view('posts.create');
    }

    // Store a new post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;

        // Handle file upload
        if ($request->hasFile('cover_image')) {
            $fileNameToStore = $request->file('cover_image')->store('public/cover_images');
            $post->cover_image = basename($fileNameToStore);
        }

        $post->save();

        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }

    // Show form to edit an existing post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update an existing post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;

        // Handle file upload
        if ($request->hasFile('cover_image')) {
            if ($post->cover_image) {
                Storage::delete('public/cover_images/' . $post->cover_image);
            }
            $fileNameToStore = $request->file('cover_image')->store('public/cover_images');
            $post->cover_image = basename($fileNameToStore);
        }

        $post->save();

        return redirect()->route('posts.edit', $post->id)->with('success', 'Post updated successfully!');
    }

    // Delete an existing post
    public function destroy(Post $post)
    {
        if ($post->cover_image) {
            Storage::delete('public/cover_images/' . $post->cover_image);
        }

        $post->delete();

        return redirect()->route('dashboard')->with('success', 'Post deleted successfully!');
    }
}




