<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $informer->email }}</p>
</div>

<!-- Pays Field -->
<div class="col-sm-12">
    {!! Form::label('pays', 'Pays:') !!}
    <p>{{ $informer->pays }}</p>
</div>

<!-- Numero Field -->
<div class="col-sm-12">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $informer->numero }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $informer->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $informer->updated_at }}</p>
</div>

