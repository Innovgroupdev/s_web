<div class="table-responsive">
    <table class="table" id="articles-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Libelle</th>
        <th>Desc</th>
        <th>Tags</th>
        <th>Img</th>
        <th>Categorie</th>
            <th>Créé par</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $articles)
            <tr>
                <td>{{ $articles->id }}</td>
                <td>{{ $articles->libelle }}</td>
            <td>{{ $articles->desc }}</td>

            <td>{{ $articles->tags }}</td>
            <td><img src="{{ asset($articles->img) }}" width= '50' height='50' class="img img-responsive" /></td>
            <td>{{ $articles->lib }}</td>
                <td>{{ $articles->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['articles.destroy', $articles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('articles.show', [$articles->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('articles.edit', [$articles->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
