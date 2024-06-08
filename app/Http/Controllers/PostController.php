<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(12);
        return Inertia::render('Index', [
            'posts' => $posts,
            'isAuth' => Auth::check()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $attributes['image_path'] = $path;
        }
        Post::create([
            'title' => $attributes['title'],
            'body' => $attributes['body'],
            'user_id' => auth()->user()->id,
            'image_path' => $attributes['image_path']
        ]);

        return Inertia::location('/');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Create', ['isAuth' => Auth::check()]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return Inertia::render('Show', ['post' => $post, 'isAuth' => Auth::check()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
