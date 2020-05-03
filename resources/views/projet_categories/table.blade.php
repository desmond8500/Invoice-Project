<div class="table-responsive-sm">
    <table class="table table-striped" id="projetCategories-table">
        <thead>
            <tr>
                <th>Categorie</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projetCategories as $projetCategorie)
            <tr>
                <td>{{ $projetCategorie->categorie }}</td>
            <td>{{ $projetCategorie->description }}</td>
                <td>
                    {!! Form::open(['route' => ['projetCategories.destroy', $projetCategorie->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projetCategories.show', [$projetCategorie->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('projetCategories.edit', [$projetCategorie->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>