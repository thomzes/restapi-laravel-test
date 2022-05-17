<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return response()->json($article, 200);

    } // end method

    public function show($id)
    {
        $article = Article::find($id);

        if(is_null($article))
        {
            return response()->json("Article not found");
        }else {
            return response()->json($article, 200);
        }

    } //end method






}
