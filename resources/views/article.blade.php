@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 jumbotron">
                {{-- Article title --}}
                <section class="title text-center">
                    <h1>{{ $article->title }} </h1>
                </section>
                {{-- Article content --}}
                <section class="col-12 article my-4 d-flex justify-content-center">
                    <div class="row">
                        <article class="col-12 mt-2 text-center">
                            <h5>{{ $article->subtitle }}</h5>
                        </article>
                        <article class="col-12 text-justify mt-4">
                            {{-- {!! !!} to interprete code and to havong HTML tags --}}
                            <p>{!! $article->content !!}</p>
                            {{-- Button come back --}}
                            <a href="{{ route('articles') }}" class="btn btn-danger mt-4">
                                <i class="fa-solid fa-arrow-left" style="color: #ffffff";></i>
                                Retour
                            </a>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
