<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Services\ArticleService;
use Illuminate\View\View;

class MainController extends Controller
{
    private ArticleService $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

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
        $articles = $this->articleService->getAllArticles();

        return view('articles', [
            'articles' => $articles,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Article page
     * @param Article $article
     * @return View
     */
    public function show(Article $article): View
    {
        //$article = $this->articleService->getArticle($slug);

        return view('article', [
            'article' => $article,
        ]);
    }


}
