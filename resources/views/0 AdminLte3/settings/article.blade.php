<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">No</th>
      <th scope="col">Nom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Rôle</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($dash as $key => $user)
        <form action="/settings/Users/update" method="POST">
            @csrf
            <tr>
                <th scope="row">{{ $key+1 }}<input type="text" class="form-control" value="{{ $user->id }}" name="id" hidden></th>
                <td><input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom"></td>
                <td><input type="text" class="form-control" value="{{ $user->nom }}" name="nom"></td>
                <td><input type="text" class="form-control" value="{{ $user->tel }}" name="tel"></td>
                <td>
                    <select name="role" class="form-control">
                        @if ($user->role == 'user')
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                            @else
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        @endif
                    </select>
                </td>
                <td width="30px">
                    <button type="submit" class="btn btn-primary">update</button>
                </td>
            </tr>
        </form>
    @endforeach
  </tbody>
</table>
