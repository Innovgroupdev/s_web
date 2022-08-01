<!-- Libelle Field -->
<div class="form-group col-12">
    {!! Form::label('libelle', 'Libelle') !!}
    {!! Form::text('lib', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-12">
    {!! Form::label('desc', 'Description') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'required' => 'required', 'rows'  => '3']) !!}
</div>

<!-- Img Url Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('img_url', 'Img Url:') !!}--}}
{{--    <div class="input-group">--}}
{{--        <div class="custom-file">--}}
{{--            {!! Form::file('img_url', ['class' => 'custom-file-input']) !!}--}}
{{--            {!! Form::label('img_url', 'Choose file', ['class' => 'custom-file-label']) !!}--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div class="clearfix"></div>--}}


<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
