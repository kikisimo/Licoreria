@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo Producto
            <a href="{{ route('products.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('products.fragment.error')

        {!! Form::open( ['route' => ['products.store'] ]) !!}

        @include('products.fragment.form1')
        {!! Form::close () !!}
        <a href="#" class="btn btn-primary pull-right" onclick = "self.close()">Menú Principal</a>
    </div>

    <div class="col-sm-4">

    </div>

@endsection



