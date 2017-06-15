@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           Listado de" Tipo de Bebidas"
          <!-- <a href="{{ route('drinktypes.create') }}" class="btn btn-primary pull-right"->Nuevo</a>-->
           <a href="{{route('drinktypes.create')}}" class="btn btn-primary pull-right" target="_blank" onclick="window.open(this.href,this.target,'width=900,height=700,top=5,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Nuevo</a>
       </h2>
        @include('drinktypes.fragment.info')
    <table class="table table-hover table-striped">
        <thead>
             <tr>
                <th width="20px">Código</th>
                <th>Tipo de bebida</th>
                <th>Descripción</th>
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
                    <button class="btn btn-primary">Ver</button></a>
                </td>
                <td>
                    <a href="{{route('drinktypes.edit',$drinktype->cod_dt )}}">
                    <button class="btn btn-primary">Editar</button></a>
                </td>
                <td>
                    <form action="{{ route('drinktypes.destroy',$drinktype->cod_dt) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <center>{!! $drinktypes->render()!!}</center>
        <a href="/licoreria/public/base" class="btn btn-primary pull-right">Menú Principal</a>


    </div>
    <div class="col-sm-4">

@include('drinktypes.fragment.aside')

    </div>

@endsection