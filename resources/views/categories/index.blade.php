@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
            Categorias
            <a href="/licoreria/public/categories/create" class="btn btn-primary pull-right"->Nuevo</a>

        </h2>
        @include('categories.fragment.info')
       <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Codigo</th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th colspan="3">&nbsp; &nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td> {{ $category->cod_cat }}</td>
                        <td> <strong>{{ $category->category }}</strong></td>
                        <td> {{ $category->description }}</td>
                        <td> ver </td>
                        <td> editar </td>
                        <td> borrar </td>
                        <td> <a href="{{ route('$categories.edit', $category->cod_cat) }}" class="btn btn-primary pull-right"->Editar</a> </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!!  $categories -> render() !!}
    </div>
    <div class="col-sm-4">




        @include('categories.fragment.aside')


    </div>

@endsection