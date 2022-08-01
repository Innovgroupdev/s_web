<div class="table-responsive">
    <table class="table" id="essayers-table">
        <thead>
        <tr>
            <th>Nom</th>
        <th>Numero</th>
        <th>Email</th>
        <th>Pays</th>
        <th>Profession</th>
        <th>Raison</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($essayers as $essayer)
            <tr>
                <td>{{ $essayer->nom }}</td>
            <td>{{ $essayer->numero }}</td>
            <td>{{ $essayer->email }}</td>
            <td>{{ $essayer->pays }}</td>
            <td>{{ $essayer->profession }}</td>
            <td>{{ $essayer->raison }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['essayers.destroy', $essayer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('essayers.show', [$essayer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('essayers.edit', [$essayer->id]) }}"
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
