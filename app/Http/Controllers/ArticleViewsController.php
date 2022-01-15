<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleViewsController extends Controller
{
    public function index()
    {
        $maxCount = Article::max('view_count');
        return Article::where('view_count', $maxCount)->get();
    }
}
