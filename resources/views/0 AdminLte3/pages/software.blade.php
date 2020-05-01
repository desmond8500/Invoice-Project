@extends('0.AdminLte.index.layout')

@section('page')
    Logiciels
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{!! route('software') !!}">Logiciels</a></li>
    @isset($folder)
        <li class="breadcrumb-item active">{{ $folder }}</li>
    @endisset
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @isset($filereadme)
                        @parsedown($filereadme)
                        @else
                            @isset($readme)
                                @parsedown($readme)
                                @else
                                Nothing
                            @endisset
                    @endisset
                </div>
            </div>
            @isset($fichiers)
                <div class="card">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fichier</th>
                                <th scope="col">Télécharger</th>
                                <th scope="col">Consulter</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fichiers as $key => $item)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ basename($item) }}</td>
                                    <td>
                                        <a href="" class="btn btn-default btn-block">
                                            <i class="fa fa-download"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-default btn-block">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endisset


        </div>
        <div class="col-md-4">
            @foreach (glob("storage/Logiciels/$folder/*") as $item)
                @if (!is_file($item))
                    @include('0.AdminLte/component/cardExpandable',['folder'=>$folder, 'sub'=>$item])
                @endif
            @endforeach
        </div>
    </div>
@endsection

@section('admin')

@endsection
