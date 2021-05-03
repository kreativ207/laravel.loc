<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->only(['title', 'body']);

        $article = Article::create([
            'title' => $data['title'],
            'body' => $data['body'],
        ]);

        if($article){
            return redirect()->back();
        }
    }

    public function destroy(Request $request)
    {
        $article = Article::find($request->id);

        if(!$article) {
            return abort(404);
        }

        $article->delete();
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $article = Article::find($request->id);
        if(!$article) {
            return abort(404);
        }

        $data = $request->only(['title', 'body', 'id']);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return redirect()->route('blog');
//        return redirect()->to('/blog');
    }
}
