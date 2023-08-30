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
                        <div class="col-10">
                            <div class="row">
                            @foreach($categories as $category)
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox mx-2">
                                        <input type="checkbox" class="custom-control-input" id="{{ $category->id }}">
                                        <label for="{{ $category->id }}" class="custom-control-label text-dark">
                                            {{ $category->label }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
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
