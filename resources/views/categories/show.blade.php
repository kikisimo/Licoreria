@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           {{ $category->category }}
           <a href="{{ route('categories.edit', $category->cod_cat) }}" class="btn btn-primary pull-right">Editar</a>
       </h2>
        <p>
            {{$category->description}}
        </p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary pull-right">Listado</a>
    </div>
    <div class="col-sm-4">


    </div>

@endsection