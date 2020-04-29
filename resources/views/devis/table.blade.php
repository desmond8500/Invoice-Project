<div class="table-responsive-sm">
    <table class="table table-striped" id="devis-table">
        <thead>
            <tr>
                <th>Projet Id</th>
        <th>Reference</th>
        <th>Statut</th>
        <th>Body</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($devis as $devis)
            <tr>
                <td>{{ $devis->projet_id }}</td>
            <td>{{ $devis->reference }}</td>
            <td>{{ $devis->statut }}</td>
            <td>{{ $devis->body }}</td>
                <td>
                    {!! Form::open(['route' => ['devis.destroy', $devis->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('devis.show', [$devis->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('devis.edit', [$devis->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>