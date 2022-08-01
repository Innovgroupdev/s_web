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
<!-- Img Field -->
<div class="col-12 mb-3 d-flex justify-content-center">

    <label class="h6 w-50 text-center mx-auto" for="motivationImages" style="cursor: pointer !important; display: block !important">
        <img id="imageMotivation" class=" mx-auto bg-secondary" src="{{$articles->img}}" alt="avatar" style="max-width:100%;max-height: 500px;border-radius:10px">
        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
        </iframe>

    </label>
    <input type="file" accept="image/*" value="{{$articles->img}}" name="img_url"  class="is-invalid" onchange="readProfil(this.value)" id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">

</div>
<div class="clearfix"></div>


<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Categorie Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('categorie_id', 'Catégories :') !!}
    <select class="form-control">

        <option value="{{$articles->categorie_id}}">
            {{ optional($articles->category)->lib }}
        </option>
    </select>
{{--    {!! Form::text('categorie_id', null, ['class' => 'form-control']) !!}--}}
</div>





