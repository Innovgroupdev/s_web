@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Categories</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($categories, ['route' => ['categories.update', $categories->id], 'method' => 'patch', 'files' => true]) !!}

            <div class="card-body">
                <div class="row">
                    @include('categories.fields')
                </div>
            </div>

            <div class="card-footer  py-4">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary py-3 px-4">Annuler</a>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary py-3 px-4']) !!}
               
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
