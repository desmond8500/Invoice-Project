@extends('0 AdminLte3.index.layout')

@section('page')
    Accueil
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('0 AdminLte3.component.infobox')
        </div>
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Informations</h4>
                <p>
                    La mise à jour des modèles est en cours
                </p>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Routes</h3>
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">route</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($linkroutes as $routelink)
                    <tr>
                        <th scope="row">{{ $routelink->id }}</th>
                        <td>{{ $routelink->name }}</td>
                        <td>{{ $routelink->route }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
