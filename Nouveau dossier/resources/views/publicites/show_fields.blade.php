<!-- Libelle Field -->
<div class="col-sm-12">
    {!! Form::label('libelle', 'Lien:') !!}
    <p>{{ $publicites->libelle }}</p>
</div>

{{--<!-- Desc Field -->--}}
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('desc', 'Desc:') !!}--}}
{{--    <p>{{ $publicites->desc }}</p>--}}
{{--</div>--}}

<!-- Img Url Field -->
<div class="col-sm-12">
    {!! Form::label('img_url', 'Image:') !!}
    <img src="{{ asset($publicites->img_url) }}" width= '50' height='50' class="img img-responsive" />
</div>

<!-- User Id Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    <p>{{ $publicites->user_id }}</p>--}}
{{--</div>--}}

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $publicites->created_at }}</p>
</div>

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $publicites->updated_at }}</p>--}}
{{--</div>--}}

