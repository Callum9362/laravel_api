<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }
}
