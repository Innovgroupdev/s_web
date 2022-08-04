<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $commentaire->description }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $commentaire->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $commentaire->email }}</p>
</div>

<!-- Is Valid Field -->
<div class="col-sm-12">
    {!! Form::label('is_valid', 'Etat de la validation:') !!}
{{--    <p>{{ $commentaire->is_valid }}</p>--}}

    @if($commentaire->is_valid == 0)
        <p>
                        <span style="color: red">
                            En cours
                        </span>
        </p>
    @else
        <p>
                        <span style="color: #0b2e13">
                             Traité
                        </span>
        </p>
    @endif
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', ' Date de création:') !!}
    <p>{{ $commentaire->created_at }}</p>
</div>

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $commentaire->updated_at }}</p>--}}
{{--</div>--}}

