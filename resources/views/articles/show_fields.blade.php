<!-- Libelle Field -->
<div class="col-sm-12 text-center">
    <!-- {!! Form::label('libelle', 'Libelle:') !!}  -->
    <p>{{ $articles->libelle }} . <i class="fas fa-events"></i> {{ $articles->created_at }}</p>
</div>
<div class="col-sm-12 d-flex justify-content-center">
    <!-- {!! Form::label('img', 'Img:') !!} -->
    <img src="{{ asset($articles->img) }}" style="max-height : 700px;border-radius:5px" class="img img-responsive mx-auto" />
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


<form method="POST" action="{{ route('articles.destroy', $articles->id) }}">
                        @csrf

<div class="d-flex justify-content-center">
@if($articleCommentaires->count() > 0)
    <a href="#" class="btn btn-primary py-3 px-5" data-toggle="modal" data-target="#exampleModalCenter">Voir les commentaires</a>
    @endif
    <a href="{{ route('articles.edit', [$articles->id]) }}" class="btn btn-success py-3 px-5 mx-1">Modifier</a>
    <input name="_method" type="hidden" value="DELETE">
    <a type="submit" data-toggle="tooltip" title='Delete' class="btn btn-danger py-3 px-5 show_confirm"  >Supprimer</a>
</div>
</form>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: none;">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body text-left pb-0 pt-0">
                                               
                                            <h5 class="modal-title mt-0" id="exampleModalLongTitle" style="font-size: 1.5rem;">Liste commentaires</h5>
                                            <p class="mb-0 pb-0">
                                            {{ $articles->libelle }} . <i class="fas fa-event"></i> {{ $articles->created_at }}
                                            </p>
                                            <hr>
                                             <!-- Comments areas -->
                                         <div class="container-fluid">
                                         @if($articleCommentaires->count() > 0)
                                          @php
                                          $i = 0;
                                          @endphp
                                         
                                          @foreach($articleCommentaires as $articleCommentaire)
                                          
                                          @if( $i != 0)
                                          <hr>
                                          @endif
                                         

                                          @php
                                          $i ++;
                                          @endphp
                                            <div class="item-comment-area comtainer-fluid">
                                                <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar">
                                                        <img src="{{asset('images/cible-app-avatar.png')}}" style="border-radius:50%" alt="" width="50" height="50">
                                                    </div>
                                                    <div class="name ml-3 mt-2">
                                                        <h5 class="mb-0 pb-0" style="line-height: 1rem"> {{$articleCommentaire->name}}</h3>
                                                        <span class="small mt-0" style="line-height: .5rem">{{$articleCommentaire->email}}</span>
                                                    </div>
                                                </div>
                                                <div>
                                                <form id="commentStatus{{$articleCommentaire->id}}">
                                                  @csrf
                                                  
                                                <input class="form-check-input" id="article_id" type="hidden" value="{{$articles->id}}">
                                                <input class="form-check-input" id="comment_id" type="hidden" value="{{ $articleCommentaire->id}}">
                                                <input class="form-check-input" id="libelle" type="hidden" value="{{$articles->libelle}}">
                                                <input class="form-check-input" id="tags" type="hidden" value="{{ $articles->tags}}">
                                                <input class="form-check-input" id="contenu" type="hidden" value="{{ $articles->contenu}}">
                                                <input class="form-check-input" id="desc" type="hidden" value="{{ $articles->desc}}">
                                                
                                                  @if(!$articleCommentaire->is_valid)
                                                  <input class="form-check-input" id="is_valid{{ $articleCommentaire->id}}" name="is_valid" type="hidden" value="1">
                                                  <button  type="submit" class="btn btn-primary py-2 px-3 d-flex" id="btn{{ $articleCommentaire->id}}" onclick="submitComment({{ $articleCommentaire->id}})" style="cursor:pointer">
                                                  Valider
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $articleCommentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                  @else
                                                 
                                                 
                                                  <input class="form-check-input" id="is_valid{{ $articleCommentaire->id}}" name="is_valid" type="hidden" value="0">
                                                  <button   type="submit" class="btn btn-warning py-2 px-3 d-flex" id="btn{{ $articleCommentaire->id}}" onclick="submitComment({{ $articleCommentaire->id}})" style="cursor:pointer">
                                                  Désactiver
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $articleCommentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                 
                                                  @endif
                                                  </form>
                                                </div>
                                                </div>
                                                <div class="comment-text">
                                                <p class="text-secondary mt-3 " > 
                                                <span class="m-0 me-2 text-info" style="font-size:1.75rem;color:gray"> &#128630;</span>
                                                {{$articleCommentaire->description}}
                                                </p>
                                                <p class="small text-right text-secondary">
                                                {{$articleCommentaire->created_at}}
                                                </p>
                                                </div>
                                            </div>
                                          
                                           @endforeach
                                           @endif
                                        </div>
                                        <!-- End Comments areas -->
                                            </div>
                                           
                                        </div>
                                        </div>
                                    </div>
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
                    console.log(is_valid)
                  if(is_valid == 0){
                    $('#btn'+idComment).addClass('btn-primary')
                    $('#btn'+idComment).removeClass('btn-warning')
                    btn.textContent = 'Valider'
                    $('#is_valid'+idComment).val(1);
                  }
                 
                  else {
                    $('#btn'+idComment).removeClass('btn-primary')
                    $('#btn'+idComment).addClass('btn-warning')
                    btn.textContent = 'Désactiver'
                    $('#is_valid'+idComment).val(0);
                  }
                  
                  
               },
               error:function () {
               }

           });
        });
       }
    </script>
<script>
 const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-danger p-3',
    cancelButton: 'btn btn-secondary me-2 p-3'
  },
  buttonsStyling: false
})
$('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();


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
              form.submit();
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Annulé',
                "L'article à été conservé :)",
                'error'
              )
            }
          })


           
        });

      
    </script>
  