<div class="table-responsive-sm">
    <table class="table table-striped" id="clients-table">
        <thead>
            <tr>
                <th>Compte Id</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Adresse</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->compte_id }}</td>
            <td>{{ $client->nom }}</td>
            <td>{{ $client->description }}</td>
            <td>{{ $client->adresse }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$client->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('clients.edit', [$client->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>