@php
    $formConnect = [
        'title' => 'Inscription',
        'size'  => 'md',
        'route' => 'registering'
    ];
@endphp

<div class="modal fade adminlteregister" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
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
                            <label>Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" name="nom">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" placeholder="Téléphone" name="tel">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Rôle</label>
                            <input type="text" class="form-control" value="user" name="role" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmer Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Confirmer Mot de passe" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
