@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Editar Clientes
            <a href="{{ route('clients.index') }}" class="btn btn-primary pull-right">Listado</a>
        </h2>

        @include('clients.fragment.error')

        {!! Form::model($client, ['route' => ['clients.update', $client->ci_client], 'method' => 'put' ]) !!}

        @include('clients.fragment.form')

        {!! Form::close () !!}
    </div>
    <div class="col-sm-4">

        @include('clients.fragment.aside')
    </div>

@endsection


