<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-light mr-2 text-light" data-toggle="modal" data-target="#oregister">
    Inscription
</button>

<!-- Modal -->
<div class="modal fade" id="oregister" tabindex="-1" role="dialog" aria-labelledby="oregisterLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark color-white">
                <h5 class="modal-title text-white" id="oregisterLabel">Inscription</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{-- <form action="{{ url('register') }}" method="POST"> --}}
            <form action="{{ url('userstore') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-2 ">
                        <input type="text" class="form-control" name="name" placeholder="Pseudo">
                    </div>
                    {{-- <div class="form-group mb-2 "> --}}
                        <input type="text" class="form-control" name="avatar" value="0" hidden>
                    {{-- </div> --}}
                    <div class="form-group mb-2 ">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-2 ">
                        <input type="text" class="form-control" name="role" value="user">
                    </div>
                    <div class="form-group mb-2 ">
                        <input type="text" class="form-control" name="fonction" placeholder="Fonction">
                    </div>
                    <div class="form-group mb-2 ">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Inscription</button>
                </div>
            </form>
        </div>
    </div>
</div>
