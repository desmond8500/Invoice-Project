<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProjet">
Ajouter un projet
</button>

<!-- Modal -->
<div class="modal fade" id="addProjet" tabindex="-1" role="dialog" aria-labelledby="addProjetLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProjetLabel">Ajouter un projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('projets.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">

                    <input type="text" name="client_id" class="form-control" value="{{$client->id}}" hidden>
                    <div class="form-group">
                        <label for="">Nom du projet</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description du projet</label>
                        <textarea name="description" cols="2" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Catégorie</label>
                        <input type="text" name="categorie"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Statut</label>
                        <select name="statut" class="form-control">
                            <option value="Nouveau">Nouveau</option>
                            <option value="En cours">En cours</option>
                            <option value="En pause">En pause</option>
                            <option value="Terminé">Terminé</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
