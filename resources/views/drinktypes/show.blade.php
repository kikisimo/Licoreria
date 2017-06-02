@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           {{ $drinktype->type }}
           <a href="{{ route('drinktypes.edit', $drinktype->cod_dt) }}" class="btn btn-primary pull-right">Editar</a>
       </h2>
        <p>
            {{$drinktype->description}}
        </p>
        <a href="{{ route('categories.index') }}" class="btn btn-primary pull-right">Listado</a>
    </div>
    <div class="col-sm-4">


    </div>

@endsection