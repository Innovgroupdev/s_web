<div class="table-responsive">
    <table class="table" id="essayers-table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Nom</th>
        <th class="p-4">Numero</th>
        <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Profession</th>
{{--        <th>Raison</th>--}}
            <th colspan="3" class="p-4">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($essayers as $essayer)
            <tr>
                <td class="p-4">{{ $essayer->id }}</td>
                <td class="p-4">{{ $essayer->nom }}</td>
            <td class="p-4">{{ $essayer->numero }}</td>
            <td class="p-4">{{ $essayer->email }}</td>
            <td class="p-4">{{ $essayer->pays }}</td>
            <td class="p-4">{{ $essayer->profession }}</td>
<!-- {{--            <td>{{ $essayer->raison }}</td>--}} -->
                <td width="120">
<!-- {{--                    {!! Form::open(['route' => ['essayers.destroy', $essayer->id], 'method' => 'delete']) !!}--}} -->
                    <div class='btn-group'>
                        <a href="{{ route('essayers.show', [$essayer->id]) }}" data-toggle="modal" data-target="#exampleModalCenter{{ $essayer->id }}"
                           class='btn btn-primary py-2 px-3 btn-xs'>
                           Details
                        </a>
<!-- {{--                        <a href="{{ route('essayers.edit', [$essayer->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}} -->
                    </div>
                    <!-- {!! Form::close() !!} -->
                </td>
            </tr>
            <div class="modal fade" id="exampleModalCenter{{ $essayer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $essayer->id }}Title" aria-hidden="true">
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
                                                    <div class="avatar">
                                                        <img src="{{asset('images/cible-app-avatar.png')}}" style="border-radius:50%" alt="" width="50" height="50">
                                                    </div>
                                                    <div class="name ml-3 mt-2">
                                                        <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{ $essayer->nom }}</h3>
                                                        <span class="small mt-3" style="line-height: .5rem">{{ $essayer->email }}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                
                                                </div>
                                                </div>
                                                <div class="comment-text">
                                                <p class="text-secondary mt-3 ">
                                                {{ $essayer->pays }}, {{ $essayer->numero }} 
                                                </p>
                                                <p class="text-secondary mt-3 ">
                                               <strong>Profession </strong> | {{ $essayer->profession }}
                                                </p>
                                                <p class="text-secondary mt-3 " > 
                                                <strong>Raison </strong> <br>
                                                <span class="m-0 me-2 text-info" style="font-size:1.75rem;color:gray"> &#128630;</span>
                                                {{ $essayer->raison }}
                                                </p>
                                                <p class="small text-right text-secondary">
                                                {{ $essayer->created_at }}
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
</div>
