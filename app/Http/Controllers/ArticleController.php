<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Manager\ArticleManager;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticleController extends Controller
{
    private ArticleManager $articleManager;

    public function __construct(ArticleManager $articleManager)
    {
        $this->articleManager = $articleManager;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::paginate(3);
        return view('article.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('article.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param ArticleRequest $request
     * @return RedirectResponse
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        // Validation constraints
        $validated = $request->validated();

        $this->articleManager->build($request, new Article());

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été sauvegardé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param Article $article
     * @return View
     */
    public function edit(Article $article)
    {
        return view('article.edit', [
            'article' => $article,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param ArticleRequest $request
     * @param Article $article
     */
    public function update(ArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated();
        //dd(get_class_methods($this->articleManager));
        $this->articleManager->build($request, $article);

        return redirect()->route('articles.index')->with('success', 'L\'article a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     * @param Article $article
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'L\'article a bien été supprimé.');
    }

}
