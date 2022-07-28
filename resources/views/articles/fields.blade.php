<!-- Libelle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libelle', 'Libelle:') !!}
    {!! Form::text('libelle', null, ['class' => 'form-control', 'required' =>'required']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Description:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control', 'required' =>'required']) !!}
</div>

<!-- Tags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tags', 'Tags:') !!}
    {!! Form::text('tags', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Images:') !!}
    <div class="input-group">
        <div class="custom-file">
            <input class="form-control" name="img" type="file" id="img_url"  required>
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Categorie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie_id', 'Categorie Id:') !!}
    {!! Form::text('categorie_id', null, ['class' => 'form-control']) !!}
</div>
