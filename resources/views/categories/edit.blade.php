@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
           Editar Categoria
           <a href="{{ route('categories.index') }}" class="btn btn-primary pull-right">Listado</a>
       </h2>

        @include('categories.fragment.error')

        {!! Form::model($category, ['route' => ['categories.update', $category->cod_cat], 'method' => 'put' ]) !!}

            @include('categories.fragment.form')
        {!! Form::close () !!}
    </div>
    <div class="col-sm-4">

   @include('categories.fragment.aside')
    </div>

@endsection