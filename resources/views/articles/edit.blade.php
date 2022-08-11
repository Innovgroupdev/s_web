@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Modifier l'article</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($articles, ['route' => ['articles.update', $articles->id], 'method' => 'patch', 'files' => true,'enctype'=>'multipart/form-data']) !!}
                @csrf
            <div class="card-body">
                <div class="row">
                    @include('articles.fields')
                </div>
            </div>

            <div class="card-footer text-center justify-content-center">
                <!-- {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a> -->
                <input name="etat" id="etat" type="hidden" value="{{$articles->etat}}">
                <a href="{{ route('articles.index') }}" class="btn btn-secondary p-4 ">Annuler</a>
                @if($articles->etat == 0)
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary p-4','onclick' => 'save()']) !!}
                @endif
                {!! Form::submit('Publier', ['class' => 'btn btn-success px-5 py-4', 'onclick' => 'publish()']) !!}
            </div>

            {!! Form::close() !!}

        </div>
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
	var $sumNote = $("#contenu")
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
		$("#content").text($("#contenu").val());
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
function save(){
    document.getElementById('etat').value = 0
  }
  function publish(){
    document.getElementById('etat').value = 1
  }
</script>
@endsection
