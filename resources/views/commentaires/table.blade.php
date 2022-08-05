<div class="table-responsive">
    <table class="table" id="commentaires-table">
        <thead>
        <tr>
            <th>ID</th>
        <th>Auteur</th>
        <th>Email</th>
{{--            <th>Description</th>--}}
{{--        <th>Articles</th>--}}
            <th>Validaiton</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($commentaires as $commentaire)
            <tr>
                <td>{{ $commentaire->id }}</td>


            <td>{{ $commentaire->name }}</td>
            <td>{{ $commentaire->email }}</td>
{{--                <td>{{ $commentaire->description }}</td>--}}

{{--                <td>{{ optional($commentaire->article)->libelle}}</td>--}}
                @if($commentaire->is_valid == 0)
                <td>
                        <span style="color: red">
                            En cours
                        </span>
                </td>
                    @else
                    <td>
                        <span style="color: #0b2e13">
                             Traité
                        </span>
                    </td>
                @endif

                <td width="120">
                    {!! Form::open(['route' => ['commentaires.destroy', $commentaire->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('commentaires.show', [$commentaire->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('commentaires.edit', [$commentaire->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
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
                                                  <button  type="submit" class="btn btn-primary py-2 px-3 d-flex" id="btn{{ $commentaire->id}}" onclick="submitComment({{ $commentaire->id}})" style="cursor:pointer">
                                                  Valider
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $commentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                  @else
                                                 
                                                 
                                                  <input class="form-check-input" id="is_valid{{ $commentaire->id}}" name="is_valid" type="hidden" value="1">
                                                  <button   type="submit" class="btn btn-warning py-2 px-3 d-flex" id="btn{{ $commentaire->id}}" onclick="submitComment({{ $commentaire->id}})" style="cursor:pointer">
                                                  Désactiver
                                                  <div class="alax-loader ml-2" >
                                                    <img alt="" src="{{ asset('wp-content/plugins/appino-extensions/subscribers/ajax-loader.gif')}}" style="display:none" id="loader{{ $commentaire->id}}" class="loading" />
                                                  </div>
                                                </button>
                                                 
                                                  @endif
                                                  </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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