<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addContact">
Ajouter un contact
</button>

<!-- Modal -->
<div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="addContactLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addContactLabel">Ajouter un contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('contacts.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-body">
                    <input type="text" name="client_id" class="form-control" value="{{$client->id}}">
                    <div class="form-group">
                        <label for="">Prénom du contact</label>
                        <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nom du contact</label>
                        <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description du contact</label>
                        <textarea name="description" cols="2" class="form-control" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="tel" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Fonction</label>
                        <input type="text" name="fonction" class="form-control">
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
