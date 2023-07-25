@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 jumbotron mt-4">
                {{-- Title --}}
                <section class="title text-center">
                    <h1>Modifier l'article {{ $article->id }}</h1>
                </section>

                {{-- Edit an article form --}}
                <section class="col-12 d-flex justify-content-center">
                    <form action="{{ route('article.update', $article->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        {{-- @dump($errors->all())--}}
                        <div class="form-group">
                            <label for="title" class="font-weight-bold">Titre</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $article->title }}" aria-describedby="title" placeholder="Titre de l'article">
                            @error('title')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subtitle" class="font-weight-bold">Sous-titre</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" id="subtitle" value="{{ $article->subtitle }}" aria-describedby="subtitle" placeholder="Sous-titre de l'article">
                            <small id="subtitle" class="form-text text-muted">Décrire le thème souhaité</small>
                            @error('subtitle')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tinyEditor" class="font-weight-bold">Description</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="tinyEditor" rows="3">{{ $article->content }}</textarea>
                            @error('content')
                            <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-light border border-dark"><a href="{{ route('articles.index') }}" class="text-decoration-none">Revenir</a></button>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>

    {{-- Tiny text editor to replace the textarea --}}
    <script>
        tinymce.init({
            selector: '#tinyEditor'
        });
    </script>
@endsection
