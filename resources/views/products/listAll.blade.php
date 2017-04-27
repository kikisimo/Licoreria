<html>
<body>
<center>
<h1>Listado de Productos</h1>

<table border = '2'>
 <tr>
     <th>Codigo</th>
     <th>Nombre</th>
     <th>Marca</th>
     <th>Contenido Neto</th>
     <th>Fecha Venc.</th>
     <th>Categoria</th>
     <th>Tipo de Bebida</th>
 </tr>
<!-- @foreach($products as $product)
    <tr>
        <td>{{$product->cod_prod}}</td>
            <td>{{$product->nombre}}</td>
            <td>{{$product->marca}}</td>
            <td>{{$product->contenidoNeto}}</td>
            <td>{{$product->fechaVencimiento}}</td>
            <td>{{$product->cod_cat}}</td>
            <td>{{$product->cod_TB}}</td>
        </tr>//-->


</table>
<br>
    <table>
        <tr>
            <th><a href='altas.php'> Altas </a></th>
            <th><a href='bajas.php'> Bajas </a></th>
            <th><a href='modificaciones.php'> Modificaciones </a></th>
        </tr>
    </table>

</center>
</body>
</html>
