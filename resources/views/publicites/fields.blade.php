

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

                    <label class="h6 w-50 text-center mx-auto" for="motivationImages" id="labelMotivation" style="cursor: pointer !important; display: block !important">
                        <img id="imageMotivation" required="" class=" mx-auto bg-secondary" src="{{asset('images/imgPlaceholder.png')}}" alt="avatar" style="max-height: 500px;border-radius:10px">
                        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
                        </iframe>
                        <p class="text-center mt-3">  Format recommandé : A4 (496 x 701 Pixels) | Taille maximale recommandé :  2MO</p>
                    </label>
                    <input type="file" accept="image/*" name="img_url" required="required"  class="is-invalid"   id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">
                    <!-- <div class="px-4 ml-3" style="position : absolute;transform:translate(190%)">
                                <h6 class="mb-3"><strong>Aperçu</strong> </h6>
                                    <div class="preview"></div>
                                   
                                    <a   id="crop" class="mt-3 btn btn-success px-3 w-100"> <i class="fas fa-download"></i> Télécharger la sélection</a>
                                    
                     </div> -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css" integrity="sha512-+VDbDxc9zesADd49pfvz7CgsOl2xREI/7gnzcdyA9XjuTxLXrdpuz21VVIqc5HPfZji2CypSbxx1lgD7BgBK5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
</script>
<script>
    var bs_modal = $('#modal');
    var image = document.getElementById('imageMotivation');
    var cropper,reader,file;
   
    $("#motivationImages").on('click', function (e) {
    //     alert(1)
    // e.preventDefault();
    $(this).trigger('click')
});
    $("body").on("change", "#motivationImages", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
        };


        if (files && files.length > 0) {
            file = files[0];
            
            if (URL) {
               
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
                
            }
            
        //    console.log(cropper)
            
            
        }
       console.log(cropper)
        // if( document.querySelector('.cropper-container')){
        //     cropper.destroy();
        //     cropper = null;
        //     // alert(11)
        //     // document.getElementById('imageMotivation').remove()
        // }
           
        // cropImage();
            
    });
    // $("body").on("click", ".cropper-face", function(e) {
    //     // cropper-container
    //     document.querySelector('.cropper-container').remove()
    //     cropper.destroy();
    //     cropper = null;
       
    //     console.log(image)
    //      files = e.target.files;
    //      done = function(url) {
    //         image.src = url;
    //     };


    //     if (files && files.length > 0) {
    //         file = files[0];
            
    //         if (URL) {
               
    //             done(URL.createObjectURL(file));
    //         } else if (FileReader) {
    //             reader = new FileReader();
    //             reader.onload = function(e) {
    //                 done(reader.result);
    //             };
    //             reader.readAsDataURL(file);
                
    //         }
    //         if(cropper!=null){
    //         cropper.destroy();
    //         cropper = null;
           
    //         cropImage();
    //         }
    //         else{
    //         cropImage();
    //         }
  
    //     }
    // });
   

    function cropImage(){
        // var image = document.getElementById('imageMotivation');
       
        // console.log(cropper)
         cropper = new Cropper(image, {
        aspectRatio: 9 / 16,
        viewMode : 1,
        preview : '.preview',
        crop(event) {
            // console.log(event);
        },
        });
        
        return cropper
    }
</script>

<style>
    .preview {
            overflow: hidden;
            height: 400px; 
            width : calc(400px * 0.5625);
            margin: 10px;
            border: 1px solid red;
        }
</style>