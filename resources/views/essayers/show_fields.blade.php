<!-- Nom Field -->
<div class="col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    <p>{{ $essayer->nom }}</p>
</div>

<!-- Numero Field -->
<div class="col-sm-12">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{{ $essayer->numero }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $essayer->email }}</p>
</div>

<!-- Pays Field -->
<div class="col-sm-12">
    {!! Form::label('pays', 'Pays:') !!}
    <p>{{ $essayer->pays }}</p>
</div>

<!-- Profession Field -->
<div class="col-sm-12">
    {!! Form::label('profession', 'Profession:') !!}
    <p>{{ $essayer->profession }}</p>
</div>

<!-- Raison Field -->
<div class="col-sm-12">
    {!! Form::label('raison', 'Raison:') !!}
    <p>{{ $essayer->raison }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $essayer->created_at }}</p>
</div>

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $essayer->updated_at }}</p>--}}
{{--</div>--}}

