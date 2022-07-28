<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libelle', 'Lien:') !!}
    {!! Form::text('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>

<!-- Desc Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('desc', 'Description:') !!}--}}
{{--    {!! Form::text('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}--}}
{{--</div>--}}

<!-- Img Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img_url', 'Img Url:') !!}
    <div class="input-group">
        <div class="custom-file">
            <input class="form-control" name="img_url" type="file" id="img_url"  required>
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
