@extends('layout')

@section('content')
    <h1>Registrar Nuevo Producto </h1>

    <div class="col-sm-8">
    <tbody>



    <form method="post"action="/licoreria/public/products/save">
        <center>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
        <span class="title">NOMBRE DEL PRODUCTO:  </span><br>
        <input type="text" id="name" name="name"><br><br>
        <span class="layout">MARCA:   </span><br>
        <input type="text" id="brand" name="brand"><br><br>
        <span class="content">CONTENIDO:   </span><br>
        <input type="text" id="content" name="content"><br><br>
        <span class="content">FECHA INGRESO:   </span><br>
        <input type="date" id="due_date" name="due_date"><br><br>



    <input type="submit" value="guardar">
        </center>
    </form>
    </tbody>
        <a href="/licoreria/public/base" class="btn btn-primary pull-right"->Pagina Principal</a>
    </div>
@endsection