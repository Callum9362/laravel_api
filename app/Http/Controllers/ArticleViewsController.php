<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleViewsController extends Controller
{
    public function index()
    {
        dd(Article::where('view_count')->max('view_count')->get());
        return Article::max('view_count');
    }
}
