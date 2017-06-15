@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo Cliente
            <a href="{{ route('clients.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('clients.fragment.error')

        {!! Form::open( ['route' => ['clients.store'] ]) !!}

        @include('clients.fragment.form1')
        {!! Form::close () !!}
        <a href="/licoreria/public/base" class="btn btn-primary pull-right">Menú Principal</a>
    </div>

    <div class="col-sm-4">

    </div>

@endsection



