<div class="table-responsive">
    <table class="table" id="faqs-table">
        <thead>
        <tr>
            <th>Pays</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Question</th>
        <th>Date de création</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faqs as $faq)
            <tr>
                <td>{{ $faq->pays }}</td>
            <td>{{ $faq->email }}</td>
            <td>{{ $faq->tel }}</td>
            <td>{{ $faq->question }}</td>
            <td>{{ $faq->created_at }}</td>
{{--                <td width="120">--}}
{{--                    {!! Form::open(['route' => ['faqs.destroy', $faq->id], 'method' => 'delete']) !!}--}}
{{--                    <div class='btn-group'>--}}
{{--                        <a href="{{ route('faqs.show', [$faq->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-eye"></i>--}}
{{--                        </a>--}}
{{--                        <a href="{{ route('faqs.edit', [$faq->id]) }}"--}}
{{--                           class='btn btn-default btn-xs'>--}}
{{--                            <i class="far fa-edit"></i>--}}
{{--                        </a>--}}
{{--                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
{{--                    </div>--}}
{{--                    {!! Form::close() !!}--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
