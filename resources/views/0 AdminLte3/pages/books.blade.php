@extends('0.AdminLte.index.layout')

@section('page')
    Littérature
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Littérature</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte/form/formModel',['form'=>$book])
        </div>
        <hr>
    </div>
    <div class="row">
        @foreach ($livres as $livre)
            <div class="col-md-4">
                <div class="card" >
                    <div class="row ">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/'.$livre->image) }}" class="card-img" height="150px" alt="{{ asset('storage/'.$livre->image) }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $livre->nom }}</h5>
                                <p class="card-text"><small class="text-muted">{{ $livre->description }}</small></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="" role="button" class="btn btn-block btn-primary btn-sm">Télécharger</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
