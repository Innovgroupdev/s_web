<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tous <span class="badge badge-light text-primary ml-3">{{$articles->count()}}</span></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Articles publiés</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Articles enregistrés </button>
  </li>
</ul>

       
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    
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
                <td class="p-3"><img src="{{ asset($articles->img) }}" width= '100' height='60' class="img img-responsive" /></td>
                <td class="p-3">{{ $articles->libelle }}</td>
            <!-- <td class="p-3">{{ $articles->desc }}</td> -->

            <td class="p-3">{{ $articles->tags }}</td>

            <td class="p-3">{{ optional($articles->categorie)->lib }}</td>
                <td class="p-3">{{optional($articles->user)->name }}</td>
                <td width="120">
                   

                    <div class='btn-group'>
                        @if($articles->etat == 0)
                    {!! Form::model($articles, ['route' => ['etat', $articles->id], 'method' => 'patch', 'class' => 'desactive']) !!}
                        @csrf

                        <input name="_method" type="hidden" value="PUT">
                        <input name="etat" type="hidden" value="1">
                        <a type="submit" class="btn btn-info mx-1 btn-flat show_desactive d-flex" data-toggle="tooltip" title='Publier'>
                            <i class="fas fa-paper-plane mt-1 mr-2"></i> Publier
                        </a>
                        {!! Form::close() !!}
                        @else
                        {!! Form::model($articles, ['route' => ['etat', $articles->id], 'method' => 'patch', 'class' => 'desactive']) !!}
                        @csrf

                        <input name="_method" type="hidden" value="PUT">
                        <input name="etat" type="hidden" value="0">
                        <a type="submit" class="btn btn-warning mx-1 btn-flat show_desactive" data-toggle="tooltip" title='Désactiver'>
                            Désactiver
                        </a>
                        {!! Form::close() !!}
                       @endif
                        <a href="{{ route('articles.show', [$articles->id]) }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                        <form method="POST" action="{{ route('articles.destroy', $articles->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </form>
                   </div>
                    

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    </div>
</div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
  @foreach($article1 as $article)
            <tr>
                <td class="p-3">{{ $article->id }}</td>
                <td class="p-3"><img src="{{ asset($article->img) }}" width= '100' height='60' class="img img-responsive" /></td>
                <td class="p-3">{{ $article->libelle }}</td>
            <!-- <td class="p-3">{{ $article->desc }}</td> -->

            <td class="p-3">{{ $article->tags }}</td>

            <td class="p-3">{{ optional($article->categorie)->lib }}</td>
                <td class="p-3">{{optional($article->user)->name }}</td>
                <td width="120">
                   
                    <div class='btn-group'>
                    {!! Form::model($articles, ['route' => ['etat', $articles->id], 'method' => 'patch', 'class' => 'desactive']) !!}
                        @csrf

                        <input name="_method" type="hidden" value="PUT">
                        <input name="etat" type="hidden" value="0">
                        <a type="submit" class="btn btn-warning mx-1 btn-flat show_desactive" data-toggle="tooltip" title='Désactiver'>
                            Désactiver
                        </a>
                        {!! Form::close() !!}
                        <a href="{{ route('articles.show', [$article->id]) }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$article->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                        <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
                        @csrf

                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </form>
                   </div>
                    

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
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
  @foreach($article2 as $articles)
            <tr>
                <td class="p-3">{{ $articles->id }}</td>
                <td class="p-3"><img src="{{ asset($articles->img) }}" width= '100' height='60' class="img img-responsive" /></td>
                <td class="p-3">{{ $articles->libelle }}</td>
            <!-- <td class="p-3">{{ $articles->desc }}</td> -->

            <td class="p-3">{{ $articles->tags }}</td>

            <td class="p-3">{{ optional($articles->categorie)->lib }}</td>
                <td class="p-3">{{optional($articles->user)->name }}</td>
                <td width="120">
                   
                    <div class='btn-group'>
                    {!! Form::model($articles, ['route' => ['etat', $articles->id], 'method' => 'patch', 'class' => 'desactive']) !!}
                        @csrf

                        <input name="_method" type="hidden" value="PUT">
                        <input name="etat" type="hidden" value="1">
                        <a type="submit" class="btn btn-info mx-1 btn-flat show_desactive d-flex" data-toggle="tooltip" title='Publier'>
                            <i class="fas fa-paper-plane mt-1 mr-2"></i> Publier
                        </a>
                        {!! Form::close() !!}
                        <a href="{{ route('articles.show', [$articles->id]) }}"
                           class='btn btn-primary btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}"
                           class='btn btn-success btn-xs mx-1'>
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                        <form method="POST" action="{{ route('articles.destroy', $articles->id) }}">
                        @csrf

                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        </form>
                   </div>
                    

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
  </div>
</div>
</div>

      
        

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
        $('.show_desactive').click(function(event) {
            
            var form =  $(this).closest("form.desactive");
           
            event.preventDefault();
            swal({
                title: `Êtes vous sûr?`,
                // text: "Cette action est irreversible!",
                icon: "info",
                buttons: true,
                confirmButtonText: 'Oui, supprimer!',
                cancelButtonText: 'Non, annuler!',
                // dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
</div>
