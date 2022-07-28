@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Articles</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'articles.store', 'files' => true]) !!}

            <div class="card-body">

                <div class="row">
                    <!-- Libelle Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('libelle', 'Libelle:') !!}
                        {!! Form::text('libelle', null, ['class' => 'form-control', 'required' =>'required']) !!}
                    </div>

                    <!-- Desc Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('desc', 'Description:') !!}
                        {!! Form::textarea('desc', null, ['class' => 'form-control', 'required' =>'required']) !!}
                    </div>

                    <!-- Tags Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('tags', 'Tags:') !!}
                        {!! Form::text('tags', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Img Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('img', 'Images:') !!}
                        <div class="input-group">
                            <div class="custom-file">
                                <input class="form-control" name="img" type="file" id="img_url"  required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                <!-- Categorie Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('categorie_id', 'Categories:') !!}
                        {!! Form::select('categorie_id', $categories, null, ['class' => 'form-control']) !!}
{{--                        {!! Form::select('categorie_id', $categories, ['class' => 'form-control']) !!}--}}
                    </div>

                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('articles.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
