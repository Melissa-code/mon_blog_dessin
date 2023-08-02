<?php

namespace App\Manager;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleManager
{
    public function build(ArticleRequest $request, Article $article)
    {
        //dd($request->all());
        $article->title = $request->input('title');
        $article->subtitle = $request->input('subtitle');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category');
        $article->save();
    }
}
