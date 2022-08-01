<div class="table-responsive ">
    <table class="table table-striped" id="categories-table">
        <thead >
        <tr>
            <th class="py-4 text-center">Id</th>
            <th class="py-4">Libelle</th>
        <th class="py-4">Description</th>
{{--        <th class="py-4">Img Url</th>--}}
        <th class="py-4">Auteur</th>
        <th class="py-4">Dernière modification</th>
            <th class="py-4" colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr class="p-3">
                <td class="py-4 text-center">{{ $categories->id }}</td>
                <td class="py-4">{{ $categories->lib }}</td>
            <td class="py-4">{{ $categories->desc }}</td>
                <td class="py-4">{{ $categories->name }}</td>
                <td class="py-4">{{ $categories->updated_at }}</td>
                <td width="120" class="py-4">
                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- <a href="{{ route('categories.show', [$categories->id]) }}"
                           class='btn btn-outline-primary '>
                            Détail
                        </a> -->
                        <a href="{{ route('categories.edit', [$categories->id]) }}"
                           class='btn btn-success mx-1 '>
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a  onclick="deletecategory()"
                           class='btn btn-danger '>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                       
                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger ', 'onclick' => "deletecategory()"]) !!} -->
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
