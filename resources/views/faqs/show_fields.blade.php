<!-- Pays Field -->
<div class="col-sm-12">
    {!! Form::label('pays', 'Pays:') !!}
    <p>{{ $faq->pays }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $faq->email }}</p>
</div>

<!-- Tel Field -->
<div class="col-sm-12">
    {!! Form::label('tel', 'Tel:') !!}
    <p>{{ $faq->tel }}</p>
</div>

<!-- Question Field -->
<div class="col-sm-12">
    {!! Form::label('question', 'Question:') !!}
    <p>{{ $faq->question }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $faq->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $faq->updated_at }}</p>
</div>

