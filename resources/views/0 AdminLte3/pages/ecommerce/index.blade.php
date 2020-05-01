@extends('0.AdminLte.index.layout')

@section('page')
    Accueil
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('link')
    <link  href="{{ asset('0/libraries/fotorama-4.6.4/fotorama.css')}}" rel="stylesheet">
    <link  href="{{ asset('senecolomarket/dist/css/nav.css')}}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{ asset('0/libraries/fotorama-4.6.4/fotorama.js')}}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-2">

            <div class="list-group">
                @foreach ($categories as $categorie)
                    <a href="{{ route('productlist',['categorie'=>$categorie->route]) }}" class="list-group-item list-group-item-action">
                        {{-- <i class="fa fa-book"></i> --}}
                        <img src="{{ $categorie->image }}"  alt="{{ $categorie->image }}" width="20px" height="20px" class="img1">
                        <span >{{ $categorie->categorie }}</span> <br>
                    </a>
                @endforeach
            </div>

        </div>
        <div class="col-7">
            <div class="fotorama"
                data-autoplay="true" data-height="400px">
                @foreach ($carousel as $item)
                    <img src="{{ asset($item) }}">
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-success">
                    <h3>Formations</h3>
                </div>
                <div class="card-body">
                    Cliquez sur l'une des catégories suivantes pour suivre un cours ou une formation: <hr>
                    <a href="{{ route('formation',['categorie'=>'Développement durable']) }}" class="btn btn-primary">Développement durable</a>
                    <a href="{{ route('formation',['categorie'=>'Gestion des déchets']) }}" class="btn btn-primary">Gestion des déchets</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <h4>Les produits recyclabes</h4>
                    </div>
                </div>
                @foreach ($categories as $categorie)
                    <div class="col-md-4">
                        <a href="{{ route('productlist',['categorie'=>$categorie->route]) }} ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ $categorie->image }}" class="card-img-top" alt="{{ $categorie->image }}" width="50px" height="50px">
                                        </div>
                                        <div class="col-md-10">
                                            <h5 class="card-title text-bold">{{ $categorie->categorie }}</h5>
                                            <p class="card-text" style="height: 2rem;">
                                                {{ $categorie->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <h4>Les produits recyclés</h4>
                    </div>
                </div>
                @foreach ($categories as $categorie)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ $categorie->image }}" class="card-img-top" alt="{{ $categorie->image }}" width="50px" height="50px">
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="card-title text-bold">{{ $categorie->categorie }}</h5>
                                        <p class="card-text" style="height: 2rem;">
                                            {{ $categorie->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        <h4>Formations</h4>
                    </div>
                </div>
                @php
                    $formation1 = array(
                        "image" => "https://image.flaticon.com/icons/svg/2479/2479535.svg",
                        "categorie" => "Développement durable",
                        "description" => "Ma description",
                        "route" => "formation"
                    );
                    $formation2 = array(
                        "image" => "https://image.flaticon.com/icons/svg/2479/2479535.svg",
                        "categorie" => "Gestion des déchets",
                        "description" => "Ma description",
                        "route" => "formation"
                    );

                    $formations[] = $formation1;
                    $formations[] = $formation2;
                @endphp
                @foreach ($formations as $formation)
                    <div class="col-md-4">
                        <a href="{{ route('formation',['categorie'=>$formation['route']]) }} ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="{{ $formation['image']}}" class="card-img-top" alt="{{ $formation['image']}}" width="50px" height="50px">
                                        </div>
                                        <div class="col-md-10">
                                            <h5 class="card-title text-bold">{{ $formation['categorie']}}</h5>
                                            <p class="card-text" style="height: 2rem;">
                                                {{ $formation['description']}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
