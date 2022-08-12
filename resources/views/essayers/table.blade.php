
<div class="d-flex justify-content-end w-100 mt-3 pr-4">
   
   <div>
   <input type="text" placeholder="Rechercher" oninput="searchItem(this.value,{{$essayers}})">
   </div>
 </div>

<div class="table-responsive p-4">
    <table class="table" id="table">
        <thead>
        <tr>
         <th class="p-4">Id</th>
        <th class="p-4">Nom</th>
        <th class="p-4">Numero</th>
        <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Profession</th>
        <th colspan="3" class="p-4">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($essayers as $essayer)
            <tr class="essayer{{ $essayer->id }}">
                <td class="p-4">{{ $essayer->id }}</td>
                <td class="p-4">{{ $essayer->nom }}</td>
                <td class="p-4">{{ $essayer->numero }}</td>
                <td class="p-4">{{ $essayer->email }}</td>
                <td class="p-4">{{ $essayer->pays }}</td>
                <td class="p-4">{{ $essayer->profession }}</td>
                <td width="120">
                    <div class='btn-group'>
                        <a href="{{ route('essayers.show', [$essayer->id]) }}" data-toggle="modal" data-target="#exampleModalCenter{{ $essayer->id }}"
                            class='btn btn-primary py-2 px-3 btn-xs'>
                            Details
                        </a>
                    </div>
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



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
 function searchItem(value,list){
            for(let i = 0; i<list.length; i++){
                let temp = list[i].nom+list[i].numero+list[i].email+list[i].pays+list[i].profession
                if(temp.toLowerCase().search(value.toLowerCase()) == -1){
                    $(".essayer"+list[i].id).hide()
                }
                else{
                    $(".essayer"+list[i].id).show()
                }
            }
        }
</script>