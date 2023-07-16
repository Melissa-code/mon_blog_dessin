<?php

use Illuminate\Support\Facades\Route;

// Verification DB connection
//Route::get('/env', function () {
//    dd(env('DB_DATABASE'));
//});

// Home route
Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

// Articles route
Route::get('/articles', [\App\Http\Controllers\MainController::class, 'index'])->name('articles');

// Article route
Route::get('/articles/{slug}', [\App\Http\Controllers\MainController::class, 'show'])->name('article');




