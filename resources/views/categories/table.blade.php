<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Libelle</th>
        <th>Description</th>
{{--        <th>Img Url</th>--}}
        <th>Nom et prénom</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $categories)
            <tr>
                <td>{{ $categories->id }}</td>
                <td>{{ $categories->lib }}</td>
            <td>{{ $categories->desc }}</td>
{{--            <td><img src="{{ $categories->img_url }}"></td>--}}
            <td>{{ $categories->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$categories->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$categories->id]) }}"
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
