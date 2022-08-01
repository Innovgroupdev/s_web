@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Publicités</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('publicites.create') }}">
                       Ajouter une publicité
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-4">
                @include('publicites.table')

                <!-- <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div> -->
            </div>

        </div>
    </div>

@endsection