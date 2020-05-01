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
            @isset($user)
                @if ($user->id == $article->id_user || $user->role == 'admin')
                    <div class="col-12">
                        <a href="{!! route('productedit',['id'=>$article->id]) !!}" class="btn btn-primary">Editer</a>
                    </div>
                @endif
            @endisset
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{ $article->title }}</h3>
              <div class="col-12">
                <div class="fotorama" data-nav="thumbs" data-loop="true" data-width="100%">
                    @foreach ($images as $item)
                        <img src="{{ asset($item) }}" alt="{{ $item }}" >
                    @endforeach
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6">
                <h3 class="my-3 d-none d-sm-block">{{ $article->title }}</h3>
                <p>{{ $article->resume }}</p>

                <hr>
                {{-- <h4>Couleurs disponibles</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-default text-center active">
                    <input type="radio" name="color_option" id="color_option1" autocomplete="off" checked="">
                    Vert
                    <br>
                    <i class="fas fa-circle fa-2x text-green"></i>
                    </label>
                    <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option2" autocomplete="off">
                    Bleu
                    <br>
                    <i class="fas fa-circle fa-2x text-blue"></i>
                    </label>
                    <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option3" autocomplete="off">
                    Violet
                    <br>
                    <i class="fas fa-circle fa-2x text-purple"></i>
                    </label>
                    <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option4" autocomplete="off">
                    Rouge
                    <br>
                    <i class="fas fa-circle fa-2x text-red"></i>
                    </label>
                    <label class="btn btn-default text-center">
                    <input type="radio" name="color_option" id="color_option5" autocomplete="off">
                    Orange
                    <br>
                    <i class="fas fa-circle fa-2x text-orange"></i>
                    </label>
                </div> --}}

            @isset($user)
                <form action="/paniers" method="POST">
                @csrf
                    <input type="text" name="id_user" value="{{ $user->id }}" hidden>
                <input type="text" name="id_article" value="{{ $article->id }}" hidden>
            @endisset
                <h4 class="mt-3">Quantité: <small>Disponible: </small></h4>
                <div class="form-group">
                    <input type="number" class="form-control btn-lg" name="quantite" value="1" min="1">
                </div>

                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        {{ $article->prix }} CFA
                        <input type="text" name="prix" value="{{ $article->prix }}" hidden>
                    </h2>
                    <h4 class="mt-0">
                    {{-- <small>Ex Tax: $80.00 </small> --}}
                    </h4>
                </div>

            @isset($user)
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Ajouter au panier
                    </button>

                    <div class="btn btn-default btn-lg btn-flat">
                        <i class="fas fa-heart fa-lg mr-2"></i>
                        Suivre
                    </div>
                </div>
            </form>
                @else
                <h4>Inscrivez vous ou connectez vous pour commander</h4>
                <button type="button" class="btn btn-{{ $form['color'] ?? "primary" }}" data-toggle="modal" data-target=".adminltelogin">Connexion</button>
                <button type="button" class="btn btn-{{ $form['color'] ?? "outline-primary" }}" data-toggle="modal" data-target=".adminlteregister">Inscription</button>

            @endisset



              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                {!! $article->description !!}
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                  Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum.

              </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
                  Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat.

              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
@endsection
