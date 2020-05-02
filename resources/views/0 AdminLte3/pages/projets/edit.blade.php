<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProjet{{ $projet->id}}">
<i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editProjet{{ $projet->id}}" tabindex="-1" role="dialog" aria-labelledby="editProjet{{ $projet->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjet{{ $projet->id}}Label">Modifier un projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('projets.update',['projet'=>$projet])}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input type="text" name="id" value="{{$projet->id}}" hidden>
                    <div class="form-group">
                        <input type="text" name="compte_id" class="form-control" value="0" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" value="{{$projet->nom}}" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" value="{{$projet->description}}" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Catégorie</label>
                        <input type="text" name="categorie" value="{{$projet->categorie}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Statut</label>
                        <input type="text" name="statut" value="{{$projet->statut}}" class="form-control">
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
