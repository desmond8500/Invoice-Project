<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteDevis{{ $devis->id}}">
<i class="fa fa-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="deleteDevis{{ $devis->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteDevis{{ $devis->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteDevis{{ $devis->id}}Label">Supprimer un devis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('devis',['devis'=>$devis])}}" method="POST">
                @csrf
                @method('delete')

                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">Suppression</h4>
                  <p>Etes vous sur de vouloir supprimer ce devis</p>
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
