<div class="table-responsive-sm">
    <table class="table table-striped" id="contacts-table">
        <thead>
            <tr>
                <th>Prenom</th>
        <th>Nom</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Fonction</th>
        <th>Description</th>
        <th>Client Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->prenom }}</td>
            <td>{{ $contact->nom }}</td>
            <td>{{ $contact->tel }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->fonction }}</td>
            <td>{{ $contact->description }}</td>
            <td>{{ $contact->client_id }}</td>
                <td>
                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contacts.show', [$contact->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('contacts.edit', [$contact->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>