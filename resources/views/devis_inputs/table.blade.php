<div class="table-responsive-sm">
    <table class="table table-striped" id="devisInputs-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Prix</th>
        <th>Domaine</th>
        <th>Categorie</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devisInputs as $devisInput)
            <tr>
                <td>{{ $devisInput->name }}</td>
            <td>{{ $devisInput->slug }}</td>
            <td>{{ $devisInput->description }}</td>
            <td>{{ $devisInput->prix }}</td>
            <td>{{ $devisInput->domaine }}</td>
            <td>{{ $devisInput->categorie }}</td>
                <td>
                    {!! Form::open(['route' => ['devisInputs.destroy', $devisInput->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devisInputs.show', [$devisInput->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('devisInputs.edit', [$devisInput->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>