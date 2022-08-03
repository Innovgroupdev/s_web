@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Articles</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'articles.store', 'files' => true]) !!}

            <div class="card-body">

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

                        <textarea type="texte" placeholder="" class="form-control br border-none @error('contenu') is-invalid @enderror" autocomplete="contenu" name="contenu" id="ta-1" cols="30" rows="2"> {{old('contenu')}}</textarea>
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
                        {!! Form::select('categorie_id', $categories, null, ['class' => 'form-control']) !!}
                        {{-- {!! Form::select('categorie_id', $categories, ['class' => 'form-control']) !!}--}}
                    </div>

                </div>
                  <!-- Img Field -->
                  <!-- <div class="form-group col-12">
                        {!! Form::label('img', 'Images:') !!}
                        <div class="input-group">
                            <div class="custom-file">
                                <input class="form-control" name="img" type="file" id="img_url"  required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div> -->
                    <p class="text-center">  Veuillez cliquer pour choisir une image (*)</p>
            <div class="col-12 mb-3 d-flex justify-content-center">

                    <label class="h6 w-50 text-center mx-auto" for="motivationImages" style="cursor: pointer !important; display: block !important">
                        <img id="imageMotivation" class="w-100 mx-auto bg-secondary" src="{{asset('wp-content/uploads/sites/9/2019/02/imgPlaceholder.png')}}" alt="avatar" style="max-height: 500px;border-radius:10px">
                        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
                        </iframe>

                    </label>
                    <input type="file" accept="image/*" name="img" required=""  class="is-invalid" onchange="readProfil(this.value)" id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">

                </div>
            </div>

            <div class="card-footer">
            <a href="{{ route('articles.index') }}" class="btn btn-secondary p-4 ">Annuler</a>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary p-4']) !!}

            </div>

            {!! Form::close() !!}

        </div>

        <!-- ============================================================================== -->

    </div>
    <style>
            #btnSave {
            display: none
        }

        .terrain {
            display: none;
        }

        .blockTitle {
            font-size: 1.5rem;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .note-editable {
            border-top: 1px solid silver !important;
        }

        .note-editable {
            background-color: #fff;
        }    #btnSave {
            display: none
        }

        .terrain {
            display: none;
        }

        .blockTitle {
            font-size: 1.5rem;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .note-editable {
            border-top: 1px solid silver !important;
        }

        .note-editable {
            background-color: #fff;
        }
    </style>



<script src="https://www.bluemindfoundation.org/js/blogJs/jquery.min.js"></script>
    <script src="https://www.bluemindfoundation.org/js/blogJs/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    $(document).ready(function() {

        $('#contenu').summernote({
                height: 100,   //set editable area's height
            });
        });
</script>


<script>
    (function() {
	var content =
		"<p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzC_Ho_08G0m7PyxJOPLpPujM9UTLxvaE-5nXewscnqa3GMWjGwg' alt='Image result for summernote.js'></p><h1>Summernote</h1>";
	var $sumNote = $("#ta-1")
		.summernote({
			callbacks: {
				onPaste: function(e,x,d) {
					$sumNote.code(($($sumNote.code()).find("font").remove()));
				}
			},

			dialogsInBody: true,
			dialogsFade: true,
			disableDragAndDrop: true,
			//                disableResizeEditor:true,
			height: "450px",
			tableClassName: function() {
				alert("tbl");
				$(this)
					.addClass("table table-bordered")

					.attr("cellpadding", 0)
					.attr("cellspacing", 0)
					.attr("border", 1)
					.css("borderCollapse", "collapse")
					.css("table-layout", "fixed")
					.css("width", "100%");

				$(this)
					.find("td")
					.css("borderColor", "#ccc")
					.css("padding", "4px");
			}
		})
		.data("summernote");

	//get
	$("#btn-get-content").on("click", function() {
		var y =$($sumNote.code());

		console.log(y[0]);console.log(y.find("p> font"));
	var x = y.find("font").remove();
		$("#content").text($("#ta-1").val());
	});
	//get text$($sumNote.code()).find("font").remove()$($sumNote.code()).find("font").remove()
	$("#btn-get-text").on("click", function() {
		$("#content").html($($sumNote.code()).text());
	});
	//set
	$("#btn-set-content").on("click", function() {
		$sumNote.code(content);
	}); //reset
	$("#btn-reset").on("click", function() {
		$sumNote.reset();
		$("#content").empty();
	});
})();

</script>
@endsection
