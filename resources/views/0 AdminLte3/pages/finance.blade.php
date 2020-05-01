@extends('0.AdminLte.index.layout')

@section('page')
    Finances
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active">Finances</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            @include('0.AdminLte/component/infobox')
        </div>
    </div>
@endsection
