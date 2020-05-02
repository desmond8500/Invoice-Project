<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editUser{{ $user->id}}">
<i class="fa fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="editUser{{ $user->id}}" tabindex="-1" role="dialog" aria-labelledby="editUser{{ $user->id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUser{{ $user->id}}Label">Modifier un user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('users.update',['user'=>$user])}}" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <input type="text" name="id" value="{{$user->id}}" hidden>
                    <div class="form-group">
                        <input type="text" name="compte_id" class="form-control" value="0" hidden>
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" value="{{$user->nom}}" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" value="{{$user->email}}" name="description" class="form-control">
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
