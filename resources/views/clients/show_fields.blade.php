<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $client->id }}</p>
</div>

<!-- Compte Id Field -->
<div class="form-group">
    {!! Form::label('compte_id', 'Compte Id:') !!}
    <p>{{ $client->compte_id }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $client->nom }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $client->description }}</p>
</div>

<!-- Adresse Field -->
<div class="form-group">
    {!! Form::label('adresse', 'Adresse:') !!}
    <p>{{ $client->adresse }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $client->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $client->updated_at }}</p>
</div>

