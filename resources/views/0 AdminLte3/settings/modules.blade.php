@php
    use App\Models\Modules;
    $modules = Modules::all();
@endphp

<a href="{!! route('init',['init'=>'modules']) !!} " class="btn btn-dark">Init Modules</a> <hr>

<hr>
<h3>Modules De l'interface</h3>


<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Module</th>
        <th scope="col">Etat</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($modules as $key => $module)
      <form action="/modulesupdate" method="POST">
        @csrf
        <tr>
            <th scope="row"{{ $key + 1 }} </th>
            <td>{{ $module->title }}</td>
            <td class="form-group">
                <input type="text" name="id" hidden value="{{ $module->id }}">
                <select name="status" class="form-control">
                    @if ($module->status == "true")
                        <option value="{{ $module->status }}">Activé</option>
                        <option value="false">Désactivé</option>
                        @else
                        <option value="true">Activé</option>
                        <option value="{{ $module->status }}">Désactivé</option>
                    @endif
                </select>
            </td>
            <td><button type="submit" class="btn btn-dark">Modifier</button></td>
          </tr>
    </form>
      @endforeach
    </tbody>
  </table>
