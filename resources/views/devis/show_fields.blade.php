<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $devis->id }}</p>
</div>

<!-- Projet Id Field -->
<div class="form-group">
    {!! Form::label('projet_id', 'Projet Id:') !!}
    <p>{{ $devis->projet_id }}</p>
</div>

<!-- Reference Field -->
<div class="form-group">
    {!! Form::label('reference', 'Reference:') !!}
    <p>{{ $devis->reference }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $devis->description }}</p>
</div>

<!-- Statut Field -->
<div class="form-group">
    {!! Form::label('statut', 'Statut:') !!}
    <p>{{ $devis->statut }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $devis->body }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $devis->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $devis->updated_at }}</p>
</div>

