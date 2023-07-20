{{-- Main Menu --}}
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <i class="fa-solid fa-pencil fa-xl" style="color: #FFFFFF;"></i>
        <a class="navbar-brand ml-2" href="{{ route('home') }}">Mon Blog Dessin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- Links --}}
        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="fa-solid fa-house" style="color: #99a1ad;"></i>
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles') }}">
                        <i class="fa-solid fa-list" style="color: #99a1ad;"></i>
                        Articles</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if (Auth::user())
                <li class="nav-item">
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Déconnexion
                        </button>
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href={{ route('login') }}>
                        <i class="fa-solid fa-user" style="color: #99a1ad;"></i>
                        Connexion
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
