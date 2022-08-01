<div class="table-responsive">
    <table class="table " id="articles-table">
        <thead>
        <tr>
            <th class="p-3">N</th>
            <th class="p-3">Image</th>
            <th class="p-3">Libelle</th>
        <!-- <th class="p-3">Desc</th> -->
        <th class="p-3">Tags</th>
       
        <th class="p-3">Categorie</th>
            <th class="p-3">Auteur</th>
            <th colspan="3" class="p-3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $articles)
            <tr>
                <td class="p-3">{{ $articles->id }}</td>
                <td class="p-3"><img src="{{ asset($articles->img) }}" width= '100' height='100' class="img img-responsive" /></td>
                <td class="p-3">{{ $articles->libelle }}</td>
            <!-- <td class="p-3">{{ $articles->desc }}</td> -->

            <td class="p-3">{{ $articles->tags }}</td>
          
            <td class="p-3">{{ $articles->lib }}</td>
                <td class="p-3">{{ $articles->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['articles.destroy', $articles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$articles->id]) }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                        <a  onclick="deletecategory()"
                           class='btn btn-danger '>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                       
                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
</div>
