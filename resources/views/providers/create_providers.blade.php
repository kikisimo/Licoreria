
@extends('layout')

@section('content')
    <h1>Registrar Nuevo Proveedor </h1>

    <div class="col-sm-8">
        <body>


<div align="center">
        <form method="post"action="/licoreria/public/providers/save">

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <span class="title">NOMBRE DEL PROVEEDOR:  </span><br>
                <input type="text" id="name" name="name"><br><br>
                <span class="layout">TELEFONO</span><br>
                <input type="text" id="phone" name="phone"><br><br>
                <span class="content">CORREO</span><br>
                <input type="text" id="e_mail" name="e_mail"><br><br>
                <span class="content">DIRECCION</span><br>
                <input type="text" id="address" name="address"><br><br>
                <span class="content">OBSERVACION</span><br>
                <input type="text" id="observation" name="observation"><br><br>
                <input type="submit" value="guardar">

        </form>
</div>
        </body>
        <a href="/licoreria/public/base" class="btn btn-primary pull-right"->Pagina Principal</a>
    </div>
@endsection
