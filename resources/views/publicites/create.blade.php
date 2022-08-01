@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h3>Ajouter une  Publicité</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card pt-4">

            {!! Form::open(['route' => 'publicites.store', 'files' => true]) !!}
            <div class="card-body px-4">

                <div class="row">
                    @include('publicites.fields')
                </div>

            </div>

            <div class="card-footer py-4">
            <a href="{{ route('publicites.index') }}" class="btn btn-secondary p-4">Annuler</a>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary p-4']) !!}
            
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
