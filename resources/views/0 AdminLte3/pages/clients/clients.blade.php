@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des clients
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte3.pages.clients.add')
        </div>
        <div class="col-md-12">
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($clients as $key => $client)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->description }}</td>
                        <td>{{ $client->adresse }}</td>
                        <td>
                            @include('0 AdminLte3.pages.clients.edit',[$client])
                            @include('0 AdminLte3.pages.clients.delete',[$client])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
