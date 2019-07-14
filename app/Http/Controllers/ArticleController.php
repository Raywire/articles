<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // Secure the resources
    // public function __construct()
    // {
    //   $this->middleware('auth:api');
    // }

    //Secure but exempt index and show page
    // public function __construct()
    // {
    //   $this->middleware('auth:api')->except(['index', 'show']);
    // }

    public function index()
    {
        return Article::paginate();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
