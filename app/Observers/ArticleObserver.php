<?php

namespace App\Observers;

use App\Models\Article;
use Cocur\Slugify\Slugify;
use Illuminate\Support\Str;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     * @param Article $article
     */
    public function created(Article $article): void
    {
        // Change a string to a slug
        //$instance = new Slugify();
        //$article->slug = $instance->slugify($article->title);
        // Or composer require laravel/helpers
        $article->slug = Str::slug($article->title, '-');
        $article->save();
    }

    /**
     * Handle the Article "updated" event.
     * @param Article $article
     */
    public function updated(Article $article): void
    {
        $article->slug = Str::slug($article->title, '-');
        $article->saveQuietly(); // updated without events
    }

    /**
     * Handle the Article "deleted" event.
     * @param Article $article
     */
    public function deleted(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     * @param Article $article
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     * @param Article $article
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
