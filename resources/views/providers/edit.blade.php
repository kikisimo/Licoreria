@extends('layout.base0')

@section('content')
    <div class="col-sm-8">
       <h2>
           Editar proveedor
           <a href="{{ route('providers.index') }}" class="btn btn-primary pull-right">Listado</a>
       </h2>

        @include('providers.fragment.error')

        {!! Form::model($provider, ['route' => ['providers.update', $provider->cod_prov], 'method' => 'put' ]) !!}

            @include('providers.fragment.form')
        {!! Form::close () !!}
    </div>
    <div class="col-sm-4">

   @include('providers.fragment.aside')
    </div>

@endsection

