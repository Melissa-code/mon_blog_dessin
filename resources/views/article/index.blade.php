@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 jumbotron mt-4">

                {{-- Title --}}
                <section class="title text-center">
                    <h1>Administration des articles</h1>
                </section>

                {{-- List of the articles in a table --}}
                <section class="col-12 d-flex justify-content-center">
                    <table class="table table-hover border border-secondary mt-3">
                        <thead>
                            <tr class="table-primary text-center">
                                <th scope="col">Id</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Créé le</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
{{--                                <td>{{ date('d/m/Y', strtotime( $article->created_at)) }}</td>--}}
                                <td>{{ $article->formatDate() }}</td>
                                <td class="d-flex">
                                    <a href="#" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="button" class="btn btn-danger" onclick="document.getElementById('delete-article-modal-{{ $article->slug }}').style.display = 'block';"><i class="fa-solid fa-trash"></i></button>
                                    <form action="{{ route('article.delete', $article->id) }}" method="POST">
                                        @method('DELETE') {{-- overload the method post --}}
                                        @csrf
                                        {{-- Modal to delete --}}
                                        <div class="modal" id="delete-article-modal-{{ $article->slug }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Supprimer un article</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('delete-article-modal-{{ $article->slug }}').style.display = 'none';">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Etes-vous sûr de vouloir supprimer cet article?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Oui</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="document.getElementById('delete-article-modal-{{ $article->slug }}').style.display = 'none';">Annuler</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>

                {{-- Add a new article --}}
                <section class="col-12 text-center">
                    <a href="{{ route('article.create') }}" class="btn btn-dark w-100">
                        <i class="fa-solid fa-plus"></i>
                        Ajouter un article</a>
                </section>

                {{-- Pagination --}}
                <section class="pagination d-flex justify-content-center mt-4">
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
