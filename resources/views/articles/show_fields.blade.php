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
   <h6 class="text-danger fw-700">
    <strong>{{ optional($articles->category)->lib }}</strong>
    </h6> 
    <p> <strong>{{ $articles->desc }}</strong></p>
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

<div class="col-sm-12" style="overflow:auto">
    <!-- {!! Form::label('contenu', 'Contenu :') !!} -->
    <!-- {{ $articles->contenu }} -->
    {!!$articles->contenu  !!}
</div>
<!-- Tags Field -->
<div class="col-sm-12">
    {!! Form::label('tags', 'Tags:') !!}
    <p>{{ $articles->tags }}</p>
</div>

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

<div class="d-flex justify-content-center">
    <a href="#" class="btn btn-primary py-3 px-5">Voir les commentaires</a>
    <a href="{{ route('articles.edit', [$articles->id]) }}" class="btn btn-success py-3 px-5 mx-1">Modifier</a>
    <a  class="btn btn-danger py-3 px-5" onclick="deletecategory()" >Supprimer</a>
</div>

<script>
       function  deletecategory(){
            const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-danger p-3',
    cancelButton: 'btn btn-secondary me-2 p-3'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Êtes vous sûr?',
  text: "Cette action est irreversible!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Oui, supprimer!',
  cancelButtonText: 'Non, annuler!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Your imaginary file is safe :)',
      'error'
    )
  }
})
         }
    </script>