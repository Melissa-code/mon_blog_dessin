<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Verification DB connection
//Route::get('/env', function () {
//    dd(env('DB_DATABASE'));
//});

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/articles', [MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [MainController::class, 'show'])->name('article'); // route binding

Auth::routes(); // Authentification route

Route::prefix('admin')->middleware('admin')->group(function() {
    Route::resource('articles', ArticleController::class)->except([
        'show'
    ]);
});

