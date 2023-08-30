@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="jumbotron">
                    <h1 class="display-4">Mon Blog Dessin</h1>
                    <p class="lead">Vous retrouverez ici toutes les publications du site qui touchent à l’apprentissage et à la pratique du dessin. Nos toutes dernières actualités ainsi que de nombreux tutos de dessin et des conseils sont à découvrir.</p>
                    <hr class="my-4">
                    <p>Dessiner un visage de profil</p>

                    <a class="btn btn-danger" href="#" role="button">
                        Voir plus
                        <i class="fa-solid fa-arrow-right" style="color: #ffffff";></i>
                    </a>
                    {{-- <livewire:counter /> : includes the component in the page --}}
                    @livewire('counter')
                </div>
            </div>
        </div>
    </div>

@endsection
