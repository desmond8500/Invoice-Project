@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des Contacts
@endsection

@section('breadcrumb')
    @if ($hide)
        <li class="breadcrumb-item active"><a href="{{url()->previous()}}">Clients</a></li>
        <li class="breadcrumb-item active">Contacts</li>
    @endif
@endsection

@section('content')
    <div class="row">
        @if ($hide)
        <div class="col-md-12">
            @include('0 AdminLte3.pages.contacts.add')
        </div>
        @endif
        <div class="col-md-12">
            <table class="table table-sm mt-2 bg-white">
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
