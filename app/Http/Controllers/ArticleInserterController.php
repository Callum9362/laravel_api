<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleInserterController extends Controller
{
    public function index()
    {
       return view('article-inserter');
    }
}
