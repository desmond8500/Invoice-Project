@php
    $formConnect = [
        'title' => 'Connexion',
        'size'  => 'md',
        'route' => 'login'
    ];
@endphp

<div class="modal fade adminltelogin" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-{{ $formConnect['size'] ?? 'md'}}" role="document">
        <div class="modal-content">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ $formConnect['title'] ?? "Form Title" }}</h3>
                </div>

                <form role="form" class="row" action="/{{$formConnect['route'] ?? 'login' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="text" class="form-control" placeholder="Téléphone" name="tel">
                        </div>
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
