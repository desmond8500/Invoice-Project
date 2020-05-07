@extends('0 AdminLte3.index.layout')

@section('page')
    Liste des devis
@endsection

@section('breadcrumb')
    @if ($hide)
        <li class="breadcrumb-item active"><a href="{{route('clients')}}">Clients</a></li>
        <li class="breadcrumb-item active"><a href="{{route('projets.list',['client_id'=>$client->id])}}">Projets</a></li>
        <li class="breadcrumb-item active"><a href="{{url()->previous()}}">Devis</a></li>
        <li class="breadcrumb-item active">Devis Détail</li>
    @endif
@endsection

@section('content')
    <div class="row">
        @if ($hide)
        <div class="col-md-12">
            {{-- @include('0 AdminLte3.pages.devis.add') --}}
        </div>
        @endif
        {{-- @dump(json_decode($devis->body)) --}}
        <div class="col-md-12">
            <table class="table table-sm bg-white bg-white mt-2 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Fonctionalité</th>
                        <th scope="col">Description</th>
                        <th scope="col">Tarif</th>
                        {{-- <th scope="col">Body</th>
                        <th scope="col">Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0;
                    @endphp
                    @foreach (json_decode($devis->body) as $body)
                        @foreach ($body as $key => $tab)
                            @if ($tab)
                                @php $row = json_decode($tab) ; @endphp
                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        {{ $row->fonction }}
                                    </td>
                                    <td>{{ $row->description }}</td>
                                    <td>{{ $row->prix }} F CFA
                                        <a href="" class="btn text-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                    {{-- <td> </td>
                                    <td>
                                    </td> --}}
                                </tr>
                                @php
                                    $total += $row->prix;
                                @endphp
                            @endif

                        @endforeach
                    @endforeach

                        <tr >
                            <td></td>
                            <th colspan="2">TOTAL</th>
                            <td>{{$total}} F CFA</td>
                        </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            {{-- @include('0 AdminLte3.pages.devis.tab',[$devis]) --}}
            {{-- @include('0 AdminLte3.pages.devis.tabh',[$devis]) --}}
        </div>

    </div>
@endsection
