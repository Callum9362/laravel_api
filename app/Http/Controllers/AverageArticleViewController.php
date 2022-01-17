<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class AverageArticleViewController extends Controller
{
    public function index()
    {
        $averageCount = array();
        $averageCount['average_views'] = Article::avg('view_count');
        return $averageCount;
    }
}
