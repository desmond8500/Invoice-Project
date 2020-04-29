<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $contact->id }}</p>
</div>

<!-- Prenom Field -->
<div class="form-group">
    {!! Form::label('prenom', 'Prenom:') !!}
    <p>{{ $contact->prenom }}</p>
</div>

<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $contact->nom }}</p>
</div>

<!-- Tel Field -->
<div class="form-group">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $contact->tel }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contact->email }}</p>
</div>

<!-- Fonction Field -->
<div class="form-group">
    {!! Form::label('fonction', 'Fonction:') !!}
    <p>{{ $contact->fonction }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $contact->description }}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $contact->client_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contact->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contact->updated_at }}</p>
</div>

