<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class MainController extends Controller
{
    /**
     * Home page
     * @return View
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Articles page
     * @return View
     */
    public function index(): View
    {
        $articles = Article::paginate(4);

        return view('articles', [
            'articles' => $articles,
        ]);
    }

    /**
     * Article page
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        //dd($article);

        return view('article', [
            'article' => $article,
        ]);
    }
}
