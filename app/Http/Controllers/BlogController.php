<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPage()
    {
        $articles = Article::all();

        return view('blog', [
            'articles' => $articles
        ]);
    }

    public function articlePage($id)
    {
        $article = Article::find($id);

        if(!$article){
            return abort(404);
        }

        return view('article', [
            "article" => $article
        ]);
    }
}
