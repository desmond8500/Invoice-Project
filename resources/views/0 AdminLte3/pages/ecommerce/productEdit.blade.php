@extends('0.AdminLte.index.layout')

@section('page')
    Ecommerce
@endsection

@section('link')
    <link  href="{{ asset('0/libraries/fotorama-4.6.4/fotorama.css')}}" rel="stylesheet">
@endsection

@section('script')
    <script src="{{ asset('0/libraries/fotorama-4.6.4/fotorama.js')}}"></script>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item active"><a href="{!! route('productlist') !!} ">Ecommerce</a></li>
    @isset($article->category)
    <li class="breadcrumb-item active">{{$article->category}}</li>
    @endisset
@endsection
@section('content')
    <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-3">
              <h3 class="d-inline-block d-sm-none">{{ $article->title }}</h3>
              <div class="col-12">
                <div class="fotorama" data-nav="thumbs" data-loop="true" data-width="100%">
                    @foreach ($images as $item)
                        <img src="{{ asset($item) }}" alt="{{ $item }}" >
                    @endforeach
                </div>
                <form action="/productImageAdd" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Ajouter une image</label>
                        <input type="file" name="image" class="form-control">
                        <input type="text" name="chemin" class="form-control" hidden value=" {{ dirname($article->image) }} ">
                        <input type="text" name="id" class="form-control" hidden value=" {{ $article->id }} ">
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter l'image</button>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-9">
                <form action="/productupdate" method="POST">
                    @csrf
                    <div class="row">

                        <label class="col-4">ID de l'article</label>
                        <input type="text" name="id" value="{{ $article->id }}" disabled class="col-8">

                        <input type="text" name="id_article" value="{{ $article->article_id }}" hidden>
                        <input type="text" name="id_user" value="{{ $user->id }}" hidden>
                        <input type="text" name="image" value="{{ $article->image }}" hidden>

                        <label class="col-4">Nom de l'article</label>
                        <input type="text" class="form-control col-8" name="title" value="{{ $article->title }}">

                        <label class="col-4">Description brève</label>
                        <input type="text" class="form-control col-8" name="resume" value="{{ $article->resume }}">

                        <label class="col-4">Description</label>
                        <input type="text" class="form-control col-8" name="description" value="{{ $article->description }}">

                        <label class="col-4">Catégorie</label>
                        <select name="category" class="form-control col-8">
                            @foreach ($categories as $categorie)
                                @if (strtolower($article->category) == strtolower($categorie->slug))
                                    <option value="{{ $categorie->slug }}" selected>{{ $categorie->categorie }}</option>
                                @else
                                    <option value="{{ $categorie->slug }}">{{ $categorie->categorie }}</option>
                                @endif
                            @endforeach
                        </select>

                        <label class="col-4">quantite disponible</label>
                        <input type="number" class="form-control btn-lg col-8" name="quantite" value="{{ $article->quantite }}" min="1">

                        <label class="col-4">Prix</label>
                        <input type="number" class="form-control btn-lg col-8" name="prix" value="{{ $article->prix }}" min="1">

                        <button type="submit" class="col-md-4 btn btn-primary">Mettre à jour</button>
                    </div>
                </form>
                <a href="{!! route('productedit',['id'=>$article->id]) !!} ">actualiser</a>
            </div>
          </div>

        </div>
        <!-- /.card-body -->
      </div>
@endsection
