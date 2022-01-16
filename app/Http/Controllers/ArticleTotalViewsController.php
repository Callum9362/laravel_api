<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleTotalViewsController extends Controller
{
    public function index()
    {
        $totalcount = array();
        $totalcount['total_views'] = Article::sum('view_count');
        return $totalcount;
    }
}
