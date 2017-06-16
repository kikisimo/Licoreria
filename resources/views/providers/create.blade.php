@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo Proveedor
            <a href="{{ route('providers.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('providers.fragment.error')

        {!! Form::open( ['route' => ['providers.store'] ]) !!}

        @include('providers.fragment.form')
        {!! Form::close () !!}
        <a href="#" class="btn btn-primary pull-right" onclick = "self.close()">Menú Principal</a>
    </div>
    <div class="col-sm-4">

        @include('providers.fragment.aside')
    </div>

@endsection