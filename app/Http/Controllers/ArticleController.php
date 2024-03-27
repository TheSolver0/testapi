<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id','desc')->get();

        // return view('index',compact('articles'));
        return response()->json($articles, 200);;
    }

    public function createArticle()
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $post = Post::create([
            'name' => $request->name,
            'auteur' => $user->id,
        ]);
    }

}
