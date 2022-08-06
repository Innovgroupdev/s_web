<div class="table-responsive">
    <table class="table" id="informers-table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Numero</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($informers as $informer)
            <tr>
                <td class="p-4">{{ $informer->id }}</td>
                <td class="p-4">{{ $informer->email }}</td>
            <td class="p-4">{{ $informer->pays }}</td>
            <td class="p-4">{{ $informer->numero }}</td>
                <td width="120">
{{--                    {!! Form::open(['route' => ['informers.destroy', $informer->id], 'method' => 'delete']) !!}--}}
                    <div class='btn-group'>
                        <a href="{{ route('informers.show', [$informer->id]) }}"
                           class='btn btn-primary py-2 px-3 btn-xs'>
                            Détails
                        </a>
{{--                        <a href="{{ route('informers.edit', [$informer->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
