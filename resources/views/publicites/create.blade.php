@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h3>Ajouter une  Publicité</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card pt-4">

            {!! Form::open(['route' => 'publicites.store', 'files' => true]) !!}
            @csrf
            <div class="card-body px-4">

                <div class="row">
                    @include('publicites.fields')
                </div>

            </div>

            <div class="card-footer py-4">
            <a href="{{ route('publicites.index') }}" class="btn btn-secondary p-4">Annuler</a>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary p-4']) !!}

{{--                {!! Form::submit('Enregistrer', ['onclick' => 'coppperCrop()','class' => 'btn btn-primary p-4']) !!}--}}

            </div>

            {!! Form::close() !!}

        </div>
    </div>
    <script>
  var oldInput;
    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                console.log(reader)
                $("#crop").attr("href", url);
                $("#crop").attr("download", "cible-pub-crop.png");
                // document.getElementById('motivationImages').remove();
                // $("#labelMotivation").append('<input type="file" accept="image/*" value='+url+' name="img_url" required="required"  class="is-invalid"   id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">')
                // document.getElementById('motivationImages').select()
                // document.getElementById('motivationImages').value = url;

                $("#motivationImages").attr("valueAsDate", base64data);
                $("#crop").click()
                console.log( document.getElementById('motivationImages'))

                // $.ajax({
                //     type: "POST",
                //     dataType: "json",
                //     url: "/upload",
                //     token : "",
                //     data: {image: base64data},
                //     success: function(data) {
                //         // bs_modal.modal('hide');
                //         alert("success upload image");
                //     }
                // });
            };
        });
    });
    </script>
@endsection
