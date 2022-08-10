<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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

            <td class="p-3">{{ optional($articles->categorie)->lib }}</td>
                <td class="p-3">{{optional($articles->user)->name }}</td>
                <td width="120">
                    <form method="POST" action="{{ route('articles.destroy', $articles->id) }}">
                        @csrf

                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$articles->id]) }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt "></i>
                        </a>

                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
{{--                        <a  onclick="deletecategory()"--}}
{{--                           class='btn btn-danger '>--}}
{{--                            <i class="fas fa-trash-alt"></i>--}}
{{--                        </a>--}}

{{--                        <!-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->--}}
                    </div>
                    </form>
{{--                    {!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--    <script>--}}
{{--       function  deletecategory(){--}}
{{--            const swalWithBootstrapButtons = Swal.mixin({--}}
{{--  customClass: {--}}
{{--    confirmButton: 'btn btn-danger p-3',--}}
{{--    cancelButton: 'btn btn-secondary me-2 p-3'--}}
{{--  },--}}
{{--  buttonsStyling: false--}}
{{--})--}}

{{--swalWithBootstrapButtons.fire({--}}
{{--  title: 'Êtes vous sûr?',--}}
{{--  text: "Cette action est irreversible!",--}}
{{--  icon: 'warning',--}}
{{--  showCancelButton: true,--}}
{{--  confirmButtonText: 'Oui, supprimer!',--}}
{{--  cancelButtonText: 'Non, annuler!',--}}
{{--  reverseButtons: true--}}
{{--}).then((result) => {--}}
{{--  if (result.isConfirmed) {--}}
{{--    swalWithBootstrapButtons.fire(--}}
{{--      'Deleted!',--}}
{{--      'Your file has been deleted.',--}}
{{--      'success'--}}
{{--    )--}}
{{--  } else if (--}}
{{--    /* Read more about handling dismissals below */--}}
{{--    result.dismiss === Swal.DismissReason.cancel--}}
{{--  ) {--}}
{{--    swalWithBootstrapButtons.fire(--}}
{{--      'Cancelled',--}}
{{--      'Your imaginary file is safe :)',--}}
{{--      'error'--}}
{{--    )--}}
{{--  }--}}
{{--})--}}
{{--         }--}}
{{--    </script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Êtes vous sûr?`,
                text: "Cette action est irreversible!",
                icon: "warning",
                buttons: true,
                confirmButtonText: 'Oui, supprimer!',
                cancelButtonText: 'Non, annuler!',
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
</div>
