@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des Contacts
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte3.pages.contacts.add')
        </div>
        <div class="col-md-12">
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>
                            <a href="{{route('devis.list',['contact_id'=>$contact->id])}}">
                                {{ $contact->nom }}
                            </a>
                        </td>
                        <td>{{ $contact->description }}</td>
                        <td>{{ $contact->categorie }}</td>
                        <td>{{ $contact->statut }}</td>
                        <td>
                            @include('0 AdminLte3.pages.contacts.edit',[$contact])
                            @include('0 AdminLte3.pages.contacts.delete',[$contact])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
