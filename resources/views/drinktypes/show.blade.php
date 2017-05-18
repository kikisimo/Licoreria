@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
           {{ $drinktype->type }}
           <a href="{{ route('drinktypes.edit', $drinktype->cod_dt) }}" class="btn btn-primary pull-right">editar</a>
       </h2>
        <p>
            {{$drinktype->description}}
        </p>

    </div>
    <div class="col-sm-4">


    </div>

@endsection