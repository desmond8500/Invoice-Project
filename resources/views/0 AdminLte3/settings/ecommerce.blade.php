<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark color-white">
                <h3 class="card-title">Liste de produits</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0 bg-light">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                    @foreach ($dash as $article)
                        <a href="{!! route('productedit',['id'=>$article->id] ) !!}">
                            <li class="item bg-light">
                                <div class="product-img">
                                    <img src='{!! asset("storage/$article->image") !!}' alt="{!! asset("storage/$article->image") !!}" class="img-size-50">
                                </div>
                                <div class="product-info">
                                    <a href="javascript:void(0)" class="product-title">{{ $article->title }}
                                    <span class="badge badge-info float-right">{{ $article->prix }}</span></a>
                                    <span class="product-description"> {{ $article->resume }} </span>
                                </div>
                            </li>
                        </a>
                    @endforeach

                </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.card-footer -->
        </div>

    </div>
    <div class="col-md-6"></div>
</div>
