@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           {{ $providers->provider }}
           <a href="{{ route('providers.edit', $provider->cod_prov) }}" class="btn btn-primary pull-right">Editar</a>
       </h2>
        <p>
            {{$providers->description}}
        </p>

    </div>
    <div class="col-sm-4">


    </div>

@endsection
