@extends('0.AdminLte.index.layout')

@section('page')
    Ecommerce
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{!! route('productlist') !!} ">Ecommerce</a></li>
    @isset($categorie)
    <li class="breadcrumb-item active">{{$categorie}}</li>
    @endisset
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('0/config/commerce.css')}}">
@endsection

@section('content')

    <div class="row ">
        <div class="col-md-12 produit">
            @include('0.AdminLte.form.productadd')
        </div>
        <hr>
        @foreach ($articles as $article)
        <style>
            .produit{
                margin-bottom: 20px;
                color: black;
            }
        </style>
            <a href="{!! route('productdetail',['id'=>$article->id]) !!} " class="col-md-2 produit">
                <div class="card">
                    <img src="{{ asset("storage/$article->image")}}" class="card-img-top" alt="{{ asset("storage/$article->image")}}">
                    <div class="card-body">
                        {{-- <div class="produitPrix">{{ $article->prix }} CFA</div> --}}
                        <div class="produitTitre">{{ $article->title }}</div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


@endsection
