<!-- Libelle Field -->
<div class="col-sm-12">
    {!! Form::label('libelle', 'Libelle:') !!}
    <p>{{ $articles->libelle }}</p>
</div>

<!-- Desc Field -->
<div class="col-sm-12">
    {!! Form::label('desc', 'Desc:') !!}
    <p>{{ $articles->desc }}</p>
</div>

<!-- Tags Field -->
<div class="col-sm-12">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $articles->tags }}</p>
</div>

<!-- Img Field -->
<div class="col-sm-12">
    {!! Form::label('img', 'Img:') !!}
    <img src="{{ asset($articles->img) }}" width= '50' height='50' class="img img-responsive" />
</div>

<!-- User Id Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    <p>{{ $articles->user_id }}</p>--}}
{{--</div>--}}

<!-- Categorie Id Field -->
<div class="col-sm-12">
    {!! Form::label('categorie_id', 'Categorie :') !!}
    <p>{{ $articles->lib }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $articles->created_at }}</p>
</div>

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $articles->updated_at }}</p>--}}
{{--</div>--}}

