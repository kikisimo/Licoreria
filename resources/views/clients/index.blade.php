@extends('base')

@section('content')
    <div class="col-sm-8">
        <hr>
            Clientes
            <!--<a href="{{route('clients.create')}}" class="btn btn-primary pull-right"->Nuevo</a>-->

        <a href="{{route('clients.create')}}" class="btn btn-primary pull-right" target="_blank" onclick="window.open(this.href,this.target,'width=900,height=700,top=5,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Nuevo</a>
        <hr>


        </h2>
        @include('clients.fragment.info')
    <!-- Buscador de clientes -->
        {!! Form::open(['route' => 'clients.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
            {!! Form::text('nit', null, ['class' => 'form control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search"><span class="glyphonicon glyphicon-search" aria-hidden="true", ></span></span>
        </div>
        <br>
        <a href="{{route('clients.index')}}" class="btn btn-success"->Volver</a>
    {!! Form::close() !!}

    <!-- Buscador de productos final-->

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>NIT</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td> {{ $client->ci_client }}</td>
                        <td> <strong>{{ $client->name }}</strong></td>
                        <td> {{ $client->lastname }}</td>
                        <td> {{ $client->nit }}</td>
                        <td> {{ $client->phone }}</td>
                        <td> {{ $client->e_mail }}</td>
                        <td> <a href="{{ route('clients.edit', $client->ci_client) }}" class="btn btn-primary pull-right"->Editar</a> </td>
                        <td>
                            <form action="{{ route('clients.destroy', $client->ci_client) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <button class="btn btn-primary">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="text-center">
            {!! $clients->render() !!}
        </div>
    </div>
    <div class="col-sm-4">




        @include('clients.fragment.aside')


    </div>

@endsection
