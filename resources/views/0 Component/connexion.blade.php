<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-dark mr-2 " data-toggle="modal" data-target="#oconnexion">
    Connexion
</button>

<!-- Modal -->
<div class="modal fade" id="oconnexion" tabindex="-1" role="dialog" aria-labelledby="oconnexionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark color-white">
                <h5 class="modal-title text-white" id="oconnexionLabel">Connexion</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-2 ">
                        <input type="text" class="form-control" name="name" placeholder="Pseudo">
                    </div>
                    <div class="form-group mb-2 ">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</div>
