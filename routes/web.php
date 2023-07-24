<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Verification DB connection
//Route::get('/env', function () {
//    dd(env('DB_DATABASE'));
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::get('/articles', [\App\Http\Controllers\MainController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [\App\Http\Controllers\MainController::class, 'show'])->name('article'); // route binding

Auth::routes(); // Authentification route

Route::get('/admin/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->middleware('admin')->name('articles.index');
Route::get('/admin/articles/create', [\App\Http\Controllers\ArticleController::class, 'create'])->middleware('admin')->name('article.create');
Route::post('/admin/articles/store', [\App\Http\Controllers\ArticleController::class, 'store'])->middleware('admin')->name('article.store');
Route::delete('/admin/articles/{article:id}/delete', [\App\Http\Controllers\ArticleController::class, 'delete'])->middleware('admin')->name('article.delete');

