<div class="table-responsive">
    <table class="table" id="commentaires-table">
        <thead>
        <tr>
            <th>Description</th>
        <th>Name</th>
        <th>Email</th>
        <th>Is Valid</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($commentaires as $commentaire)
            <tr>
                <td>{{ $commentaire->description }}</td>
            <td>{{ $commentaire->name }}</td>
            <td>{{ $commentaire->email }}</td>
            <td>{{ $commentaire->is_valid }}</td>
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
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
