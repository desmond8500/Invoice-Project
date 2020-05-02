@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des utilisateurs
@endsection

@section('breadcrumb')
    {{-- <li class="breadcrumb-item active">Acceuil</li> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('0 AdminLte3.pages.users.add')
        </div>
        <div class="col-md-12">
            <table class="table mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $key => $utilisateur)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>{{ $utilisateur->name }}</td>
                        <td>{{ $utilisateur->email }}</td>
                        <td>
                            {{-- @include('0 AdminLte3.pages.users.edit',['user'=> $utilisateur]) --}}
                            {{-- @include('0 AdminLte3.pages.users.delete',['user'=> $utilisateur]) --}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
