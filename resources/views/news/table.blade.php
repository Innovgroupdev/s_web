<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
        <tr>
            <th class="p-4">Id</th>
            <th class="p-4">Email</th>
            <th class="p-4">Date de création</th>
{{--            <th colspan="3" class="p-4">Action</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
                <td class="p-4">{{ $news->id }}</td>
                <td class="p-4">{{ $news->email }}</td>
                <td class="p-4">{{ $news->created_at }}</td>
                <!-- <td width="120">
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
{{--                    <div class='btn-group'>--}}
{{--                        <a href="{{ route('news.show', [$news->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-eye"></i>--}}
{{--                        </a>--}}
{{--                        <a href="{{ route('news.edit', [$news->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
{{--                    </div>--}}
                    {!! Form::close() !!}
                </td> -->
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
