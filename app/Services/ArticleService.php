<?php

namespace App\Services;

use App\Models\Article;
use Illuminate\Contracts\Pagination\Paginator;


class ArticleService
{
    /**
     * Get all the articles
     * @return Paginator
     */
    public function getAllArticles(): Paginator
    {
        return Article::paginate(4);
    }

    /**
     * Get one article
     * @param string $slug
     * @return Article
     */
    public function getArticle(string $slug): Article
    {
        return Article::where('slug', $slug)->firstOrFail();
    }
}
