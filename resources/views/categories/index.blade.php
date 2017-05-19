@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
           Listado de Categorias
           <a href="{{ route('categories.create') }}" class="btn btn-primary pull-right"->Nuevo</a>
       </h2>
        @include('categories.fragment.info')
    <table class="table table-hover table-striped">
        <thead>
             <tr>
                <th width="20px">Codigo</th>
                <th>Categoria</th>
                <th>Descripcion</th>
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
                    <button class="btn btn-primary">ver</button></a>
                </td>
                <td>
                    <a href="{{route('categories.edit',$category->cod_cat )}}">
                    <button class="btn btn-primary">editar</button></a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy',$category->cod_cat) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-primary">borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        {!! $categories->render()!!}
    </div>
    <div class="col-sm-4">



    </div>

@endsection