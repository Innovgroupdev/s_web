<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Libelle</th>
        <th class="p-4">Description</th>
{{--        <th class="p-4">Img Url</th>--}}
        <th class="p-4">Auteur</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr>
                <td class="p-4">{{ $categories->id }}</td>
                <td class="p-4">{{ $categories->lib }}</td>
            <td class="p-4">{{ $categories->desc }}</td>
{{--            <td class="p-4"><img src="{{ $categories->img_url }}"></td>--}}
            <td class="p-4">{{ optional($categories->user)->name}}</td>
                <td width="120">
{{--                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}--}}

                    <form method="POST" action="{{ route('categories.destroy', $categories->id) }}">
                        @csrf
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$categories->id]) }}" data-toggle="modal" data-target="#exampleModalCenter{{ $categories->id }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$categories->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    </form>
{{--                    {!! Form::close() !!}--}}
                </td>
            </tr>
            <div class="modal fade" id="exampleModalCenter{{ $categories->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $categories->id }}Title" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border: none;">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body text-left pb-0 pt-0">
                                                
                                            
                                                
                                                <!-- Comments areas -->
                                            <div class="container-fluid">
                                        
                                                <div class="item-comment-area comtainer-fluid">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                      
                                                        <div class="name">
                                                            <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{ $categories->lib }}</h3>
                                                            <!-- <span class="small mt-3" style="line-height: .5rem">{{ $categories->email }}</span> -->
                                                        </div>
                                                    </div>
                                                    <div>
                                                    
                                                    </div>
                                                    </div>
                                                    <div class="comment-text">
                                                  
                                                   
                                                    <p class="text-secondary mt-3 " > 
                                               
                                                    {{ $categories->desc }}
                                                    </p>
                                                    <p class="small text-right text-secondary">
                                                    {{ $categories->created_at }}
                                                    </p>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                            <!-- End Comments areas -->
                                                </div>
                                            
                                            </div>
                                            </div>
                                        </div>
        @endforeach
        </tbody>
    </table>
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
