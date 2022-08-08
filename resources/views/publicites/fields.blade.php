

<!-- Desc Field
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('desc', 'Description:') !!}--}}
{{--    {!! Form::text('desc', null, ['class' => 'form-control', 'required' => 'required']) !!}--}}
{{--</div>--}} -->

<!-- Img Url Field -->
<!-- <div class="form-group col-12">
    {!! Form::label('img_url', 'Image') !!}
    <div class="input-group">
        <div class="custom-file">
            <input class="form-control" name="img_url" type="file" id="img_url"  required>
        </div>
    </div>
</div> -->
<p class="text-center">  Veuillez cliquer pour choisir une image (*)</p>
<div class="col-12 mb-3 d-flex justify-content-center">

                    <label class="h6 w-50 text-center mx-auto" for="motivationImages" style="cursor: pointer !important; display: block !important">
                        <img id="imageMotivation" required="" class=" mx-auto bg-secondary" src="{{asset('wp-content/uploads/sites/9/2019/02/imgPlaceholder.png')}}" alt="avatar" style="max-height: 500px;border-radius:10px">
                        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
                        </iframe>

                    </label>
                    <input type="file" accept="image/*" name="img_url" required="required"  class="is-invalid" onchange="readProfil(this.value)" id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">

                </div>
<!-- Libelle Field -->
<div class="form-group col-12">
    {!! Form::label('libelle', 'Lien') !!}
    {!! Form::url('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
</div>
<div class="clearfix"></div>


<!-- User Id Field -->
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
