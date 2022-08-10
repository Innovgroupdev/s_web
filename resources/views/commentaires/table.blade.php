<div class="table-responsive">
    <table class="table" id="commentaires-table">
        <thead>
        <tr>
            <th class="p-4">ID</th>
        <th class="p-4">Auteur</th>
        <th class="p-4">Email</th>
        <th class="p-4">Commentaire</th>

            <!-- <th class="p-4">Statut</th> -->
            <th colspan="3" class="p-4">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($commentaires as $commentaire)
            <tr>
                <td class="p-4">{{ $commentaire->id }}</td>


            <td class="p-4">{{ $commentaire->name }}</td>
            <td class="p-4">{{ $commentaire->email }}</td>
               <td class="p-4 caseComment" width="700">
                <!-- {{ $commentaire->description }} -->
                {{ substr($commentaire->description, 0, 150)}}
                    @if(strlen($commentaire->description) > 150)
                        ...
                @endif
                <div class="p-3 taxt-light bg-dark toolComment small" style="">
                {{$commentaire->description}}
                </div>
            </td>

{{--                <td class="p-4">{{ optional($commentaire->article)->libelle}}</td>--}}
                <!-- @if($commentaire->is_valid == 0)
                <td class="p-4">
                        <span style="color: red">
                            En cours
                        </span>
                </td>
                    @else
                    <td class="p-4">
                        <span style="color: #0b2e13">
                             Traité
                        </span>
                    </td>
                @endif -->

                <td width="120" >
                  <div class="d-flex justify-content-end align-items-center">

                  
                    {!! Form::open(['route' => ['commentaires.destroy', $commentaire->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('commentaires.show', [$commentaire->id]) }}" data-toggle="modal" data-target="#exampleModalCenter{{ $commentaire->id }}"
                           class='btn btn-outline-primary btn-xs px-3 py-2 mr-2'>
                            <i class="far fa-eye"></i>
                        </a>
                        <!-- <a href="{{ route('commentaires.edit', [$commentaire->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a> -->
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    {!! Form::close() !!}

                    <form id="commentStatus{{$commentaire->id}}">
                                                  @csrf
                                                  
                                                <input class="form-check-input" id="article_id" type="hidden" value="{{optional($commentaire->article)->id}}">
                                                <input class="form-check-input" id="comment_id" type="hidden" value="{{ $commentaire->id}}">
                                                <input class="form-check-input" id="libelle" type="hidden" value="{{optional($commentaire->article)->libelle}}">
                                                <input class="form-check-input" id="tags" type="hidden" value="{{ optional($commentaire->article)->tags}}">
                                                <input class="form-check-input" id="contenu" type="hidden" value="{{ optional($commentaire->article)->contenu}}">
                                                <input class="form-check-input" id="desc" type="hidden" value="{{ optional($commentaire->article)->desc}}">
                                                
                                                  @if($commentaire->is_valid)
                                                  <input class="form-check-input" id="is_valid{{ $commentaire->id}}" name="is_valid" type="hidden" value="0">
                                                  <button  type="submit" class="btn btn-primary py-2 px-3 d-flex justify-content-center" id="btn{{ $commentaire->id}}" onclick="submitComment({{ $commentaire->id}})" style="cursor:pointer;width:115px">
                                                  Valider
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $commentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                  @else
                                                 
                                                 
                                                  <input class="form-check-input" id="is_valid{{ $commentaire->id}}" name="is_valid" type="hidden" value="1">
                                                  <button   type="submit" class="btn btn-warning py-2 px-3 d-flex justify-content-center" id="btn{{ $commentaire->id}}" onclick="submitComment({{ $commentaire->id}})" style="cursor:pointer;width:115px">
                                                  Désactiver
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $commentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                 
                                                  @endif
                                                  </form>
                        </div>
                </td>
            </tr>
            <div class="modal fade" id="exampleModalCenter{{ $commentaire->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter{{ $commentaire->id }}Title" aria-hidden="true">
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
                                                            <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{ $commentaire->name }}</h3>
                                                            <span class="small mt-3" style="line-height: .5rem">{{ $commentaire->email }}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                    
                                                    </div>
                                                    </div>
                                                    <div class="comment-text">
                                                    <p class="text-secondary mt-3 ">
                                                     <strong>Article  </strong> | {{ optional($commentaire->article)->libelle}}
                                                    </p>
                                                   
                                                    <p class="text-secondary mt-3 " > 
                                                    <!-- <strong>Raison </strong> <br> -->
                                                    <span class="m-0 me-2 text-info" style="font-size:1.75rem;color:gray"> &#128630;</span>
                                                    {{ $commentaire->description }}
                                                    </p>
                                                    <p class="small text-right text-secondary">
                                                    {{ $commentaire->created_at }}
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
<style>
    .toolComment{
        position:absolute;border-radius:10px;margin-top:1rem;z-index:10;max-width:370px;opacity:0;visibility:hidden;transition:0.3s ease-in;
    }
    .toolComment:before{
        content : "";
        position : absolute;
        width : 1rem;
        height : .7rem;
        margin-top : -1.6rem;
        background-color : #212529;
        /* background-color : lime; */
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        z-index:11;
    }
    .caseComment:hover  .toolComment{
        opacity:1;visibility:visible
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
       function submitComment(idComment){
        $('#commentStatus'+idComment).submit(function(e){
           e.preventDefault();
          let id = $("#article_id").val();
          let id_comment = "is_valid"+idComment;
          let libelle = $('#libelle').val();
          let tags = $('#tags').val();
          let contenu = $('#contenu').val();
          let desc = $('#desc').val();
          let is_valid = $("#"+id_comment).val();
          let _token = $("input[name=_token]").val();
          
          var data = {
                  is_valid : is_valid,
                   libelle : libelle,
                  tags : tags,
                  contenu : contenu,
                  desc : desc,
                   _token:_token
               };
              
           $.ajax({
               url: "/commentaire-update/"+idComment,
               type: "PUT",
               data:data,
               beforeSend : function () {
                $('#loader'+idComment).show()
               },
               success:function (response) {
                $('#loader'+idComment).hide()
                var btn = document.getElementById("btn"+idComment)
                console.log(btn)
                    
                    btn.textContent = ''
                  if(is_valid == 1){
                    $('#btn'+idComment).addClass('btn-primary')
                    $('#btn'+idComment).removeClass('btn-warning')
                    btn.textContent = 'Valider'
                    $('#is_valid'+idComment).val(0);
                  }
                 
                  else {
                    $('#btn'+idComment).removeClass('btn-primary')
                    $('#btn'+idComment).addClass('btn-warning')
                    btn.textContent = 'Désactiver'
                    $('#is_valid'+idComment).val(1);
                  }
                  
                  
               },
               error:function () {
               }

           });
        });
       }
    </script>