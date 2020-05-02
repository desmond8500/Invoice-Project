<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteProjet{{ $projet->id}}">
<i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="deleteProjet{{ $projet->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteProjet{{ $projet->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteProjet{{ $projet->id}}Label">Supprimer un projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('projets.destroy',['projet'=>$projet])}}" method="POST">
                @csrf
                @method('delete')

                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">Suppression</h4>
                  <p>Etes vous sur de vouloir supprimer ce projet</p>
                  <p class="mb-0"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger" >Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
