<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Article;
use Illuminate\Support\Str;


class ArticleLengthController extends Controller
{
    public function index()
    {
        $details = array();
        $article = Article::max('body');
        $length = Str::length($article);

        $details['headline'] = $article;
        $details['length'] = $length;

        return $details;
    }
}
