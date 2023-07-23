<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Verification DB connection
//Route::get('/env', function () {
//    dd(env('DB_DATABASE'));
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('/articles', [\App\Http\Controllers\MainController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [\App\Http\Controllers\MainController::class, 'show'])->name('article');

Auth::routes(); // Authentification route

Route::get('/admin/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->middleware('admin')->name('articles.index');;

