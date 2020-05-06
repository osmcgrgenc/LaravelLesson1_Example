<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //

    public function show($id)
    {
        $article = Articles::find($id);
        $articles = Articles::all();
        return view('article.show', [
            'article' =>$article,
            'articles' =>$articles,
        ]);
    }
    public function index()
    {
        $articles = Articles::all();
        return view('article.index', [
            'articles' =>$articles,
        ]);
    }
}
