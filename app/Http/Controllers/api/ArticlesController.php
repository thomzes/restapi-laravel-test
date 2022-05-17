<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return response()->json($article, 200);


    }









}
