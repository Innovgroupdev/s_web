

<div class="row">
    <!-- Libelle Field -->
    <div class="form-group col-12">
        {!! Form::label('libelle', 'Libelle:') !!}
        {!! Form::text('libelle', null, ['class' => 'form-control', 'required' =>'required']) !!}
    </div>

    <!-- Desc Field -->
    <div class="form-group col-12">
        {!! Form::label('desc', 'Description') !!}
        <span class="text-danger">(maximum 200 caractères) </span>
        {!! Form::textarea('desc', null, ['class' => 'form-control','rows' => '2', 'required' =>'required','maxlength' =>'200']) !!}
    </div>

    <div class="col-12 mb-3 ">
        <div class="d-flex justify-content-between align-items-center">
            <label for="ta-1" class="font-bold font-open mb-2">Contenu de l'article <span style="color: red;">*</span></label>
            <button class="btn btn-sm btn-danger" id="btn-reset">Reset</button>
        </div>

        <textarea type="texte" placeholder="" class="form-control br border-none @error('contenu') is-invalid @enderror" autocomplete="contenu" value="{{$articles->contenu}}" name="contenu" id="ta-1" cols="30" rows="2"> {{old('contenu')}}</textarea>
        @error('contenu')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>


    <!-- Tags Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tags', 'Tags (Séparé par des virgules)') !!}
        {!! Form::text('tags', null, ['class' => 'form-control','placeholder' => 'Ex : tag1,tag2,tag3...']) !!}
    </div>



    <!-- Categorie Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('categorie_id', 'Categories:') !!}
        <select class="form-control" name="categorie_id">
            @foreach($categories as $cat)
                <option value="{{$cat->id}}">
                    {{ $cat->lib }}
                </option>
            @endforeach
        </select>
    </div>

</div>


<!-- Img Field -->
<div class="col-12 mb-3 d-flex justify-content-center">

    <label class="h6 w-50 text-center mx-auto" for="motivationImages" style="cursor: pointer !important; display: block !important">
        <img id="imageMotivation" class=" mx-auto bg-secondary" src="{{$articles->img}}" alt="avatar" style="max-width:100%;max-height: 500px;border-radius:10px">
        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
        </iframe>

    </label>
    <input type="file" accept="image/*" value="{{$articles->img}}" name="img"  class="is-invalid" onchange="readProfil(this.value)" id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">

</div>
<div class="clearfix"></div>

</div>





