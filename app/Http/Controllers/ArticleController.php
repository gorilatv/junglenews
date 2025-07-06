<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
    // Página inicial: lista de artigos
    public function index()
    {
        $articles = Article::latest()->get(); // pega os artigos ordenados do mais novo pro mais antigo
        return view('index', compact('articles'));
    }

    // Página da matéria individual
    public function show($slug)
    {

        $data = Carbon::now();
        return view('site.index', compact('date'));


        // Busca o artigo pelo slug (ex: /reportagem/superman)
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('singlepage.topo.quad.bmaster1.master', compact('article'));
    }


}
