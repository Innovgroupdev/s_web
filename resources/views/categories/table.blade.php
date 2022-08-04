<div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Libelle</th>
        <th>Description</th>
{{--        <th>Img Url</th>--}}
        <th>Autheur</th>
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
            <td>{{ optional($categories->user)->name}}</td>
                <td width="120">
{{--                    {!! Form::open(['route' => ['categories.destroy', $categories->id], 'method' => 'delete']) !!}--}}

                    <form method="POST" action="{{ route('categories.destroy', $categories->id) }}">
                        @csrf
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$categories->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('categories.edit', [$categories->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        <input name="_method" type="hidden" value="DELETE">
                        <a type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>
                            <i class="fas fa-trash-alt"></i>
                        </a>
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    </form>
{{--                    {!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
</div>
