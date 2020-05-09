<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDevis">
Ajouter un devis
</button>

<!-- Modal -->
<div class="modal fade" id="addDevis" tabindex="-1" role="dialog" aria-labelledby="addDevisLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDevisLabel">Ajouter un devis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('devis.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="projet_id" class="form-control" value="{{$projet->id}}" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Référence</label>
                        <input type="text" name="reference" class="form-control">
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
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-md-12">
                        @include('0 AdminLte3.pages.devis.tab')
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
