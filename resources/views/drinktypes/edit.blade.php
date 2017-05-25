@extends('Layouts.base0')

@section('content')
    <div class="col-sm-8">
       <h2>
           Editar Tipo de Bebida
           <a href="{{ route('drinktypes.index') }}" class="btn btn-primary pull-right">Listado</a>
       </h2>

        @include('drinktypes.fragment.error')

        {!! Form::model($drinktype, ['route' => ['drinktypes.update', $drinktype->cod_dt], 'method' => 'put' ]) !!}

            @include('drinktypes.fragment.form')
        {!! Form::close () !!}
    </div>
    <div class="col-sm-4">

   @include('drinktypes.fragment.aside')
    </div>

@endsection