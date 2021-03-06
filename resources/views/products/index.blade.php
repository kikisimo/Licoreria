@extends('base')

@section('content')
    <div class="col-sm-8">
        <hr>
            Productos
            <!--<a href="{{route('products.create')}}" class="btn btn-primary pull-right"->Nuevo</a>-->

        <a href="{{route('products.create')}}" class="btn btn-primary pull-right" target="_blank" onclick="window.open(this.href,this.target,'width=900,height=700,top=5,left=200,toolbar=no,location=no,status=no,menubar=no');return false;">Nuevo</a>
        <hr>


        </h2>
        @include('products.fragment.info')
    <!-- Buscador de productos -->
        {!! Form::open(['route' => 'products.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
            {!! Form::text('name', null, ['class' => 'form control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search"><span class="glyphonicon glyphicon-search" aria-hidden="true", ></span></span>
        </div>
        <br>
        <a href="{{route('products.index')}}" class="btn btn-success"->Volver</a>
    {!! Form::close() !!}

    <!-- Buscador de productos final-->

        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Código</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Contenido</th>
                    <th>Stock</th>
                    <th>Precio Unitario</th>
                    <th>Fecha</th>
                    <th>Categoría</th>
                    <th>Tipo</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td> {{ $product->cod_prod }}</td>
                        <td> <strong>{{ $product->name }}</strong></td>
                        <td> {{ $product->brand }}</td>
                        <td> {{ $product->content }}</td>
                        <td> {{ $product->stock }}</td>
                        <td> {{ $product->price }}</td>
                        <td> {{ $product->due_date }}</td>
                        <td> {{ $product->cod_cat}}</td>
                        <td> {{ $product->cod_dt }}</td>
                        <td> <a href="{{ route('products.edit', $product->cod_prod) }}" class="btn btn-primary pull-right"->Editar</a> </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->cod_prod) }}" method="post">
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
            {!! $products->render() !!}
        </div>
    </div>
    <div class="col-sm-4">




        @include('products.fragment.aside')


    </div>

@endsection
