<div class="table-responsive">
    <table class="table" id="essayers-table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Nom</th>
        <th class="p-4">Numero</th>
        <th class="p-4">Email</th>
        <th class="p-4">Pays</th>
        <th class="p-4">Profession</th>
{{--        <th>Raison</th>--}}
            <th colspan="3" class="p-4">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($essayers as $essayer)
            <tr>
                <td class="p-4">{{ $essayer->id }}</td>
                <td class="p-4">{{ $essayer->nom }}</td>
            <td class="p-4">{{ $essayer->numero }}</td>
            <td class="p-4">{{ $essayer->email }}</td>
            <td class="p-4">{{ $essayer->pays }}</td>
            <td class="p-4">{{ $essayer->profession }}</td>
<!-- {{--            <td>{{ $essayer->raison }}</td>--}} -->
                <td width="120">
<!-- {{--                    {!! Form::open(['route' => ['essayers.destroy', $essayer->id], 'method' => 'delete']) !!}--}} -->
                    <div class='btn-group'>
                        <a href="{{ route('essayers.show', [$essayer->id]) }}"
                           class='btn btn-primary py-2 px-3 btn-xs'>
                           Details
                        </a>
<!-- {{--                        <a href="{{ route('essayers.edit', [$essayer->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}} -->
                    </div>
                    <!-- {!! Form::close() !!} -->
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
