{{-- Cards of the articles --}}
@foreach($articles as $article)
    <div class="card col-12 col-md-5 m-1" style="width: 18rem;">
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
