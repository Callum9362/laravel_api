<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API ROUTES FOR ARTICLES

// GET ALL
// Example - http://localhost:8888/laravel_api/public/api/articles
Route::get('articles', [ArticleController::class, 'index'])->name('all-articles');

// GET BY ID
//Example - http://localhost:8888/laravel_api/public/api/articles/1
Route::get('articles/{id}', [ArticleController::class, 'show'])->name('article-by-id');

// POST AN ARTICLE
Route::post('articles', [ArticleController::class, 'store'])->name('store-article');
