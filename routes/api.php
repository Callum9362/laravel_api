<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCountController;
use App\Http\Controllers\ArticleViewsController;
use App\Http\Controllers\FlightsController;
use App\Http\Controllers\FlightByAirlineController;
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
// DELETE AN ARTICLE
Route::delete('articles/{id}', [ArticleController::class, 'delete'])->name('delete-article');
// GET COUNT OF ALL ARTICLES
Route::get('article/count', [ArticleCountController::class, 'index'])->name('article-count');
// GET THE ARTICLE WITH THE MOST VIEWS
Route::get('article/mostviews', [ArticleViewsController::class, 'index'])->name('most-article-views');


// API ROUTES FOR FLIGHTS

// GET ALL FLIGHTS
Route::get('flights', [FlightsController::class, 'index'])->name('flights');

// GET A FLIGHT BY PASSENGER NAME
Route::get('flights/{name}', [FlightsController::class, 'show'])->name('flight-by-name');

// GET A FLIGHT BY PASSENGER NAME AND AIRLINE NAME
Route::get('flights/{name}/{airline}', [FlightByAirlineController::class, 'index'])->name('flight-by-name-airline');

