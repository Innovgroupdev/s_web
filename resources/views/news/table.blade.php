<div class="table-responsive">
    <table class="table" id="news-table">
        <thead>
        <tr>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $news)
            <tr>
                <td>{{ $news->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('news.show', [$news->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('news.edit', [$news->id]) }}"
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
