@extends('0.AdminLte.index.layout')

@section('page')
    Formation
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Formation</li>
@endsection

@section('content')

    {{-- <iframe width="1280" height="730" src="https://www.youtube.com/embed/5SRrbhKbLBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe  src="https://www.youtube.com/embed/5SRrbhKbLBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Titre du cours</h5>
                    <p class="card-text">Ceci est la description du cours vidéo</p>
                    <a href="#" class="btn btn-primary">Télécharger la version PDF</a>
                </div>
            </div>
        </div>
    </div>
@endsection
