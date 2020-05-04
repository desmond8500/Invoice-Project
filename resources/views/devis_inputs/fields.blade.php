<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix', 'Prix:') !!}
    {!! Form::text('prix', null, ['class' => 'form-control']) !!}
</div>

<!-- Domaine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domaine', 'Domaine:') !!}
    {!! Form::text('domaine', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie', 'Categorie:') !!}
    {!! Form::select('categorie', ['select' => 'select', 'landingpage' => 'landingpage', 'webapp' => 'webapp', 'mobileapp' => 'mobileapp', 'erp' => 'erp', 'ecommerce' => 'ecommerce'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('devisInputs.index') }}" class="btn btn-secondary">Cancel</a>
</div>
