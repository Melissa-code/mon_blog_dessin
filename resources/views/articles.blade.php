@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 jumbotron">
                <section class="title text-center">
                    <h1>Tous les articles</h1>
                </section>

                <section class="list-articles my-4 d-flex justify-content-center">
                    <div class="row d-flex justify-content-center">
                        {{-- Cars of the articles --}}
                        @foreach($articles as $article)
                        <div class="card col-md-5 m-1" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $article->subtitle }}</h6>
                                {{-- Button link for the detail of an article (name of the route & slug) --}}
                                <a href="{{ route('article', $article->slug) }}" class="btn btn-danger">
                                    Lire la suite
                                    <i class="fa-solid fa-arrow-right" style="color: #ffffff";></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <section class="pagination d-flex justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            {{ $articles->links('_partials._pagination') }}
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
