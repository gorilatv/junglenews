<?php

namespace App\Http\Controllers;

use App\Models\Post;

class NoticiaController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('singlepage.show', compact('post'));
    }
}
