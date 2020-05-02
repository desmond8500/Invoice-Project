@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des devis
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        @if ($hide)
        <div class="col-md-12">
            @include('0 AdminLte3.pages.devis.add')
        </div>
        @endif
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
                @foreach ($deviss as $key => $devis)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $devis->nom }}</td>
                        <td>{{ $devis->description }}</td>
                        <td>{{ $devis->categorie }}</td>
                        <td>{{ $devis->statut }}</td>
                        <td>
                            @include('0 AdminLte3.pages.devis.edit',[$devis])
                            @include('0 AdminLte3.pages.devis.delete',[$devis])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
