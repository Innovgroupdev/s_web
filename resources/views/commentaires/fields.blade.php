


<!-- Description Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('description', 'Description:') !!}--}}
{{--    {!! Form::text('description', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Name Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('name', 'Name:') !!}--}}
{{--    {!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Email Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('email', 'Email:') !!}--}}
{{--    {!! Form::email('email', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Is Valid Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_valid', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_valid', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_valid', 'Is Valid', ['class' => 'form-check-label']) !!}
    </div>
</div>
