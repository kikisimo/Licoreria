@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Editar Productos
            <a href="{{ route('products.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('products.fragment.error')

        {!! Form::model($product, ['route' => ['products.update', $product->cod_product], 'method' => 'put' ]) !!}

        @include('products.fragment.form')
        {!! Form::close () !!}
    </div>
    <div class="col-sm-4">

        @include('products.fragment.aside')
    </div>

@endsection