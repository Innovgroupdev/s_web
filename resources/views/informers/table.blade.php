<div class="table-responsive">
    <table class="table" id="informers-table">
        <thead>
        <tr>
            <th>Email</th>
        <th>Pays</th>
        <th>Numero</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informers as $informer)
            <tr>
                <td>{{ $informer->email }}</td>
            <td>{{ $informer->pays }}</td>
            <td>{{ $informer->numero }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['informers.destroy', $informer->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('informers.show', [$informer->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('informers.edit', [$informer->id]) }}"
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
