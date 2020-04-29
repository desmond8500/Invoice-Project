<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $projet->id }}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $projet->client_id }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $projet->nom }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $projet->description }}</p>
</div>

<!-- Categorie Field -->
<div class="form-group">
    {!! Form::label('categorie', 'Categorie:') !!}
    <p>{{ $projet->categorie }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $projet->statut }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $projet->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $projet->updated_at }}</p>
</div>

