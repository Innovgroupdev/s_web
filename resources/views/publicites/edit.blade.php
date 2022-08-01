@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h3>Modifier la Publicité</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card pt-4">
        {!! Form::model($publicites, ['route' => ['publicites.update', $publicites->id], 'method' => 'patch', 'files' => true]) !!}
        <div class="card-body px-4">

        <p class="text-center">  Veuillez cliquer pour choisir une image (*)</p>
                <div class="col-12 mb-3 d-flex justify-content-center">
                
                                    <label class="h6 w-50 text-center mx-auto" for="motivationImages" style="cursor: pointer !important; display: block !important">
                                        <img id="imageMotivation" class=" mx-auto bg-secondary" src="{{$publicites->img_url}}" alt="avatar" style="max-width:100%;max-height: 500px;border-radius:10px">
                                        <iframe id="imageMotivationIframe" class="w-50 mx-auto d-none"  style="max-height: 100%; transform:translate(-100%)">
                                        </iframe>
                                    
                                    </label>
                                    <input type="file" accept="image/*" value="{{$publicites->img_url}}" name="img_url"  class="is-invalid" onchange="readProfil(this.value)" id="motivationImages" style="display: none !important; visibility: hidden !important; position: absolute; opacity: 0; z-index: -999 !important;">
                                
                                </div>
                <!-- Libelle Field -->
                <div class="form-group col-12">
                    {!! Form::label('libelle', 'Lien') !!}
                    {!! Form::url('libelle', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                <div class="clearfix"></div>
                <!-- ============================================================= -->
         
            </div>

            <div class="card-footer p-4">
               
                <a href="{{ route('publicites.index') }}" class="btn btn-secondary p-4">Annuler</a>
                {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary p-4']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
