@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Publicites</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($publicites, ['route' => ['publicites.update', $publicites->id], 'method' => 'patch', 'files' => true]) !!}
            {{$publicites->img_url}}
            <div class="card-body">
                <div class="row">
                    <!-- Libelle Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('libelle', 'Lien:') !!}
                        {!! Form::text('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>

                <!-- Img Url Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('img_url', 'Img Url:') !!}
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img_url" value="{{$publicites->img_url}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('publicites.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
