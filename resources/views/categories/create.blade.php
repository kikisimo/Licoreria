@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
           Nueva "Categoría"
           <a href="{{ route('categories.index') }}" class="btn btn-primary pull-right">Listado</a>

       </h2>

        @include('categories.fragment.error')

        {!! Form::open( ['route' => ['categories.store'] ]) !!}

        @include('categories.fragment.form')
        {!! Form::close () !!}
        <a href="#" class="btn btn-primary pull-right" onclick = "self.close()">Menú Principal</a>
    </div>
    <div class="col-sm-4">

   @include('categories.fragment.aside')
    </div>

@endsection