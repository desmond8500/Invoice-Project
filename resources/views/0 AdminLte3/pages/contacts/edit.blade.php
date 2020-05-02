<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editcontact{{ $contact->id}}">
<i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editcontact{{ $contact->id}}" tabindex="-1" role="dialog" aria-labelledby="editcontact{{ $contact->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editcontact{{ $contact->id}}Label">Modifier un contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('contacts.update',['contact'=>$contact])}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input type="text" name="id" value="{{$contact->id}}" hidden>
                    <input type="text" name="client_id" class="form-control" value="{{$contact->client_id}}">
                    <div class="form-group">
                        <label for="">Prénom du contact</label>
                        <input type="text" name="prenom" value="{{$contact->prenom}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nom du contact</label>
                        <input type="text" name="nom" value="{{$contact->nom}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Description du contact</label>
                        <textarea name="description" cols="2" class="form-control" rows="2">{{$contact->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone</label>
                        <input type="tel" name="tel" class="form-control" value="{{$contact->tel}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                    </div>
                    <div class="form-group">
                        <label for="">Fonction</label>
                        <input type="text" name="fonction" class="form-control" value="{{$contact->fonction}}">
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
