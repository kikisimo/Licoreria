@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Listado de usuarios
            <a href="{{ route('users.create') }}" class="btn btn-primary pull-right"->Nuevo</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">id</th>
                    <th>Nombre del usuario</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td> {{ $user->ci_persona }}</td>
                        <td> {{ $user->nombre }}</td>
                        <td> {{ $user->apellido }}</td>
                        <td> {{ $user->telefono }}</td>
                        <td> {{ $user->direccion }}</td>
                        <td> {{ $user->correo }}</td>
                        <td> ver </td>
                        <td> editar</td>
                        <td> borrar</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">

        mensaje

    </div>

@endsection