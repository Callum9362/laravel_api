<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleCountController extends Controller
{
    public function index()
    {
        $articles = array();
        $articles['totalArticles'] = Article::all()->count();
        return $articles;
    }
}
