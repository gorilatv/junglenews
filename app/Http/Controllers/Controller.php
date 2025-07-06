<?php

namespace App\Http\Controllers;

use App\Models\Article;

abstract class Controller
{
    public function show($slug)
{
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('singlepage.topo.quad.bmaster1.master', compact('article'));
}
}
