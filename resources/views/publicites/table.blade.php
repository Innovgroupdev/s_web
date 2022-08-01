<div class="table-responsive">
    <table class="table table-striped" id="publicites-table">
        <thead>
        <tr>
            <th class="p-4">Image</th>
            <th class="p-4">Id</th>
            <th class="py-4">Lien</th>
           

            <th colspan="3" class="py-4">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($publicites as $publicites)
            <tr>
            <td class="p-4">
                 <img src="{{ asset($publicites->img_url) }} " width= '150' height='150' style="border-radius:5px" class="img img-responsive bg-light" />
            </td>
                <td class="p-4">
                    <div class="w-100 d-flex align-items-center" style="min-height : 150px">
                    
                    <span>
                    {{ $publicites->id }}
                    </span>
                    </div>
                   </td>
                <td class="py-4">
                   
                    <div class="w-100 d-flex align-items-center" style="min-height : 150px">
                    
                    <span>
                    {{ $publicites->libelle }}
                    </span>
                    </div>
                </td>
           

                <td width="120" class="p-4">
                    <div class="w-100 d-flex align-items-center" style="min-height : 150px">
                    
                    {!! Form::open(['route' => ['publicites.destroy', $publicites->id], 'method' => 'delete']) !!}
                    <div class='btn-group '>
                        <a onclick="detail('{{ asset($publicites->img_url) }}',' {{ $publicites->libelle }}')" style="cursor:pointer"
                           class='btn btn-outline-primary btn-xs'>
                            Détail
                        </a>
                        <a href="{{ route('publicites.edit', [$publicites->id]) }}"
                           class='btn btn-success mx-1 btn-xs'>
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a  onclick="deletecategory()"
                           class='btn btn-danger '>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                    </div>
                    
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
      'Supprimé!',
      'Publiblicité supprimé avec succès.',
      'success'
    )
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Annulé',
      'La publicité a été concervé :)',
      'error'
    )
  }
})
         }

         function detail(image,libelle){
            Swal.fire({
//   title: 'Sweet!',
  text: 'Lien : '+libelle,
  imageUrl: image,
  imageWidth: 400,
//   imageHeight: 200,

  imageAlt: 'Custom image',
})
         }
    </script>
</div>
