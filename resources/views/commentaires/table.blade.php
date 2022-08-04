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
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
