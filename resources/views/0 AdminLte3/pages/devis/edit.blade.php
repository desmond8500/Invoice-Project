<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editDevis{{ $devis->id}}">
<i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editDevis{{ $devis->id}}" tabindex="-1" role="dialog" aria-labelledby="editDevis{{ $devis->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDevis{{ $devis->id}}Label">Modifier un devis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('devis',['devis'=>$devis])}}" method="post" >
                @csrf
                @method('patch')
                <div class="modal-body">
                    <input type="text" name="id" value="{{$devis->id}}" hidden>
                    <div class="form-group">
                        <input type="text" name="compte_id" class="form-control" value="0" hidden>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Référence</label>
                                <input type="text" name="reference" value="{{$devis->reference}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Statut</label>
                                <select name="statut" class="form-control">
                                    <option value="Nouveau">Nouveau</option>
                                    <option value="En cours">En cours</option>
                                    <option value="En pause">En pause</option>
                                    <option value="Terminé">Terminé</option>
                                    <option value="{{$devis->statut}}" selected>{{$devis->statut}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="2" >{{$devis->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">body</label>
                                <textarea name="body" class="form-control" cols="30" rows="2" >{{$devis->description}}</textarea>
                            </div>
                        </div>
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
