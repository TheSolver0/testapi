<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id','desc')->get();

        return view('index',compact('articles'));
    }

    public function articlestore()
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
