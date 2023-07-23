@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 jumbotron mt-4">
                {{-- Title --}}
                <section class="title text-center">
                    <h1>Ajouter un article</h1>
                </section>

                {{-- Create an article form --}}
                <section class="col-12 d-flex justify-content-center">
                    <form action="{{ route('article.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="font-weight-bold">Titre</label>
                            <input type="text" class="form-control" name="title" id="title" aria-describedby="title" placeholder="Titre de l'article">
                        </div>
                        <div class="form-group">
                            <label for="subtitle" class="font-weight-bold">Sous-titre</label>
                            <input type="text" class="form-control" name="subtitle" id="subtitle" aria-describedby="subtitle" placeholder="Sous-titre de l'article">
                            <small id="subtitle" class="form-text text-muted">Décrire le thème souhaité</small>
                        </div>
                        <div class="form-group">
                            <label for="content">Description</label>
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-light border border-dark"><a href="{{ route('articles.index') }}" class="text-decoration-none">Revenir</a></button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection
