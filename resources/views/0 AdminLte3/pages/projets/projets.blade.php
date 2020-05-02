@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des projets
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte3.pages.projets.add')
            @include('0 AdminLte3.pages.contacts.add')
        </div>
        <div class="col-md-12">
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Statut</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($projets as $key => $projet)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>
                            <a href="{{route('devis.list',['projet_id'=>$projet->id])}}">
                                {{ $projet->nom }}
                            </a>
                        </td>
                        <td>{{ $projet->description }}</td>
                        <td>{{ $projet->categorie }}</td>
                        <td>{{ $projet->statut }}</td>
                        <td>
                            @include('0 AdminLte3.pages.projets.edit',[$projet])
                            @include('0 AdminLte3.pages.projets.delete',[$projet])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection