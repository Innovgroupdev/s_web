<div class="table-responsive">
    <table class="table" id="publicites-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Lien</th>
{{--        <th>Desc</th>--}}
        <th>Image</th>

            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($publicites as $publicites)
            <tr>
                <td>{{ $publicites->id }}</td>
                <td>{{ $publicites->libelle }}</td>
{{--            <td>{{ $publicites->desc }}</td>--}}
            <td> <img src="{{ asset($publicites->img_url) }}" width= '50' height='50' class="img img-responsive" /></td>

                <td width="120">
                    {!! Form::open(['route' => ['publicites.destroy', $publicites->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('publicites.show', [$publicites->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('publicites.edit', [$publicites->id]) }}"
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
