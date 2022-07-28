<!-- Libelle Field -->
<div class="col-sm-12">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $categories->lib }}</p>
</div>

<!-- Desc Field -->
<div class="col-sm-12">
    {!! Form::label('desc', 'Description:') !!}
    <p>{{ $categories->desc }}</p>
</div>

<!-- Img Url Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('img_url', 'Img Url:') !!}--}}
{{--    <p>{{ $categories->img_url }}</p>--}}
{{--</div>--}}

<!-- User Id Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    <p>{{ $categories->user_id }}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $categories->created_at }}</p>
</div>

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $categories->updated_at }}</p>--}}
{{--</div>--}}

