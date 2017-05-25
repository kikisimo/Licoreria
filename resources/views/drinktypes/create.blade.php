@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
           Nuevo Tipo de Bebida
           <a href="{{ route('drinktypes.index') }}" class="btn btn-primary pull-right">Listado</a>
       </h2>

        @include('drinktypes.fragment.error')

        {!! Form::open( ['route' => ['drinktypes.store'] ]) !!}

        @include('drinktypes.fragment.form')
        {!! Form::close () !!}
        <a href="/licoreria/public/base" class="btn btn-primary pull-right">Menu Principal</a>
    </div>
    <div class="col-sm-4">

   @include('drinktypes.fragment.aside')
    </div>

@endsection