<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Pays Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pays', 'Pays:') !!}
    {!! Form::text('pays', null, ['class' => 'form-control']) !!}
</div>

<!-- Profession Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profession', 'Profession:') !!}
    {!! Form::text('profession', null, ['class' => 'form-control']) !!}
</div>

<!-- Raison Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raison', 'Raison:') !!}
    {!! Form::text('raison', null, ['class' => 'form-control']) !!}
</div>