@extends('base')

@section('content')
    <div class="col-sm-8">
       <h2>
           Listado de Categorias
           <!--<a href="{{ route('categories.create') }}" class="btn btn-primary pull-right"->Nuevo</a>-->
           <a href="{{route('categories.create')}}" class="btn btn-primary pull-right" target="_blank" onclick="window.open(this.href,this.target,'width=900,height=700,top=5,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Nuevo</a>
       </h2>
        @include('categories.fragment.info')
    <table class="table table-hover table-striped">
        <thead>
             <tr>
                <th width="20px">Código</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th colspan="3">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td> {{ $category->cod_cat }}</td>
                <td> <strong>{{ $category->category }}</strong></td>
                <td> {{ $category->description }}</td>

                <td>
                    <a href="{{route('categories.show',$category-> cod_cat)}}">
                    <button class="btn btn-primary">Ver</button></a>
                </td>

                <td>
                    <a href="{{route('categories.edit',$category->cod_cat )}}">
                    <button class="btn btn-primary">Editar</button></a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy',$category->cod_cat) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-primary">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <center>
            {!! $categories->render()!!}
        </center>
        <a href="/licoreria/public/base" class="btn btn-primary pull-right">Menu Principal</a>
    </div>
    <div class="col-sm-4">



    </div>

@endsection