<?php

namespace App\Http\Controllers;

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
        ]);
    }

    /**
     * Article page
     * @param string $slug
     * @return View
     */
    public function show(string $slug): View
    {
        $article = $this->articleService->getArticle($slug);

        return view('article', [
            'article' => $article,
        ]);
    }
}
