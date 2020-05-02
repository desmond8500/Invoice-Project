@extends('0 AdminLte3.index.layout')

@section('page')
    Accueil
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach ($infoboxes as $infobox)
                <div class="col-md-3">
                    @include('0 AdminLte3.component.infobox',[$infobox])
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <h3>Routes principales</h3>
            <table class="table mt-2 bg-white">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Route</th>
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
        <div class="col-md-6">
            <h3>Informations</h3>
            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">API</h4>
              <p>Liste des API de base</p>
            </div>
        </div>

    </div>
@endsection
