@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Proveedores
            <a href="/licoreria/public/providers/create_provider" class="btn btn-primary pull-right"->Nuevo</a>
        </h2>
        @include('providers.fragment.info')
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th width="30px">Codigo</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Observaciones</th>
                <th colspan="3">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($providers as $provider)
                <tr>
                    <td> {{ $provider->cod_prov }}</td>
                    <td> <strong>{{ $provider->name }}</strong></td>
                    <td> {{ $provider->phone }}</td>
                    <td> {{ $provider->e_mail }}</td>
                    <td> {{ $provider->address }}</td>
                    <td> {{ $provider->observation }}</td>
                    <td> <a href="{{ route('providers.edit', $provider->cod_prov) }}" class="btn btn-primary pull-right"->Editar</a> </td>
                    <td>
                        <form action="{{ route('providers.destroy', $provider->cod_prov) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">




        @include('providers.fragment.aside')


    </div>

@endsection