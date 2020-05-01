@php
    $formConnect = [
        'id' => 'productadd',
        'title' => 'Ajouter un produit',
        'size'  => 'md',
        'route' => 'articles'
    ];
    use App\Models\Categorie;
    $categories = Categorie::all();
@endphp
@auth
<button type="button" class="btn btn-{{ $form['color'] ?? "outline-primary" }}" data-toggle="modal" data-target=".{{ $formConnect['id'] ?? 'md'}}">Ajouter un article</button>

@endauth

<div class="modal fade {{ $formConnect['id'] ?? 'md'}}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-{{ $formConnect['size'] ?? 'md'}}" role="document">
        <div class="modal-content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $formConnect['title'] ?? "Form Title" }}</h3>
                </div>

                <form role="form" class="row" action="/{{$formConnect['route'] ?? 'login' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body row">
                        <div class="form-group col-md-6">
                            <label>Nom de l'article</label>
                            <input type="text" class="form-control" placeholder="Nom de l'article" name="title">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Catégorie</label>
                            <select name="category" class="form-control">
                                @foreach ($categories as $categorie)
                                    @if ($categorie->slug!=null)
                                        <option value="{{ $categorie->slug}}">{{ $categorie->categorie}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Quantité</label>
                            <input type="number" class="form-control" placeholder="Quantité" name="quantite">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Prix</label>
                            <input type="number" class="form-control" placeholder="Prix de l'article" name="prix">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Photo</label>
                            <input type="file" class="form-control"  name="image">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Résumé</label>
                            <input type="text" class="form-control" placeholder="Brève description de l'article" name="resume">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="5" name="description" placeholder="Description détaillée de l'article"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Ajouter l'article</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
