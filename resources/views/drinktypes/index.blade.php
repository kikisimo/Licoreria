@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           Listado de Tipo de Bebidas
           <a href="{{ route('drinktypes.create') }}" class="btn btn-primary pull-right"->Nuevo</a>
       </h2>
        @include('drinktypes.fragment.info')
    <table class="table table-hover table-striped">
        <thead>
             <tr>
                <th width="20px">Codigo</th>
                <th>Tipo de Bebida</th>
                <th>Descripcion</th>
                <th colspan="3">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        @foreach($drinktypes as $drinktype)
            <tr>
                <td> {{ $drinktype->cod_dt }}</td>
                <td> <strong>{{ $drinktype->type}}</strong></td>
                <td> {{ $drinktype->description }}</td>

                <td>
                    <a href="{{route('drinktypes.show',$drinktype-> cod_dt)}}">
                    <button class="btn btn-primary">ver</button></a>
                </td>
                <td>
                    <a href="{{route('drinktypes.edit',$drinktype->cod_dt )}}">
                    <button class="btn btn-primary">editar</button></a>
                </td>
                <td>
                    <form action="{{ route('drinktypes.destroy',$drinktype->cod_dt) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-primary">borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        {!! $drinktypes->render()!!}
        <a href="/licoreria/public/base" class="btn btn-primary pull-right">Menu Principal</a>
    </div>
    <div class="col-sm-4">

@include('drinktypes.fragment.aside')

    </div>

@endsection