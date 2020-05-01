@extends('0.AdminLte.index.layout')

@section('page')
    Formation {{ $categorie }}
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Formation</li>
@endsection

@section('content')
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
            <div class="col-md-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1554208873-4292cf6c952d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1355&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Titre du cours {{ $i+1 }} </h5>
                        <p class="card-text">Ceci est la description du cours vidéo</p>
                        @auth
                            <a href="{{ route('formation',['categorie'=>$categorie, 'cours'=> 1]) }} " class="btn btn-primary">Consulter</a>
                            <a href="#" class="btn btn-primary">Télécharger</a>
                        @else
                            <p class="text-primary">
                                Veuillez vous connecter pour accéder à ce contenu.
                            </p>
                        @endauth
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
