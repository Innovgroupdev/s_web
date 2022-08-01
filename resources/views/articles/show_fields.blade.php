<!-- Libelle Field -->
<div class="col-sm-12">
    <!-- {!! Form::label('libelle', 'Libelle:') !!}  -->
    <p>{{ $articles->libelle }} . <i class="fas fa-events"></i> {{ $articles->created_at }}</p>
</div>
<div class="col-sm-12 d-flex justify-content-center">
    <!-- {!! Form::label('img', 'Img:') !!} -->
    <img src="{{ asset($articles->img) }}" style="max-height : 700px" class="img img-responsive w-75 mx-auto" />
</div>

<!-- Desc Field -->
<div class="col-sm-12 mt-4">
   <h1 class="mb-3">
   {{ $articles->libelle }} 
   </h1>
   <h6 class="text-danger">{{ $articles->lib }}</h6> --
    <p>{{ $articles->desc }}</p>
</div>

<!-- Tags Field -->
<div class="col-sm-12">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $articles->tags }}</p>
</div>

<!-- Img Field -->

<!-- User Id Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    <p>{{ $articles->user_id }}</p>--}}
{{--</div>--}}

<!-- Categorie Id Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('categorie_id', 'Categorie :') !!}
    <p>{{ $articles->lib }}</p>
</div> -->

<!-- Created At Field -->
<!-- <div class="col-sm-12">
    {!! Form::label('created_at', 'Date de création:') !!}
    <p>{{ $articles->created_at }}</p>
</div> -->

<!-- Updated At Field -->
{{--<div class="col-sm-12">--}}
{{--    {!! Form::label('updated_at', 'Updated At:') !!}--}}
{{--    <p>{{ $articles->updated_at }}</p>--}}
{{--</div>--}}

