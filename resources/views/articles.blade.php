@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 jumbotron">
                {{-- Articles title --}}
                <section class="title text-center">
                    <h1>Tous les articles</h1>
                </section>

                {{-- Cards of the articles --}}
                <section class="list-articles my-4 d-flex justify-content-center">
                    <div class="row d-flex justify-content-center">
                        @include('_partials/_articleCard')
                    </div>
                </section>

                {{-- Pagination --}}
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
