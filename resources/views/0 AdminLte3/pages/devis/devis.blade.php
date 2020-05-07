@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des devis
@endsection

@section('breadcrumb')
    @if ($hide)
        <li class="breadcrumb-item active"><a href="{{route('clients')}}">Clients</a></li>
        <li class="breadcrumb-item active"><a href="{{url()->previous()}}">Projets</a></li>
        <li class="breadcrumb-item active">Devis</li>
    @endif
@endsection

@section('content')
    <div class="row">
        @if ($hide)
        <div class="col-md-12">
            @include('0 AdminLte3.pages.devis.add')
        </div>
        @endif
        <div class="col-md-12">
            <table class="table table-sm bg-white bg-white mt-2">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Référence</th>
                        <th scope="col">Description</th>
                        <th scope="col">Statut</th>
                        {{-- <th scope="col">Body</th> --}}
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($deviss as $key => $devis)
                    <tr>
                        <th scope="row">{{ $key+1 }}</th>
                        <td>
                            <a href="{{ route('showPDF',['id'=>$devis->id])}} ">{{ $devis->reference }}</a>
                        </td>
                        <td>{{ $devis->description }}</td>
                        <td>{{ $devis->statut }}</td>
                        {{-- <td>{{ $devis->body }}</td> --}}
                        <td>
                            @include('0 AdminLte3.pages.devis.nedit')
                            @include('0 AdminLte3.pages.devis.delete')
                            <a href="{{route('devisPDF',['id'=>$devis->id])}}" class="btn btn-info">
                                <i class="fa fa-file-pdf"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            {{-- @include('0 AdminLte3.pages.devis.tab',[$devis]) --}}
            {{-- @include('0 AdminLte3.pages.devis.tabh',[$devis]) --}}
        </div>

    </div>
@endsection
