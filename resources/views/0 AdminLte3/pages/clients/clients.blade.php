@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des clients
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Clients</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte3.pages.clients.add')

            <a href="{{route('seeds.clients')}}" class="btn btn-danger">Générer un Client</a>
        </div>
        <div class="col-md-12">
            <table class="table bg-white sm mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th>Description</th>
                        <th scope="col">Contacts</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($clients as $key => $client)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>
                            <a href="{{route('projets.list',['client_id'=>$client->id])}}">
                                {{ $client->nom }}
                            </a>
                        </td>
                        <td>{{ $client->description }}</td>
                        <td>
                            <a href="{{route('contacts.list',['client_id'=>$client->id])}}">liste</a>
                        </td>
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
