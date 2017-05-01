<html>
<head>
    <style>
        .label {
            font-style: italic;
        }
    </style>
</head>
<body>

<h1>Registrar Nuevo Producto </h1>

<form method="post"action="/licoreria/public/products/save">
<input type="hidden" name="_token" value="{{csrf_token()}}">
    <span class="label">NOMBRE DEL PRODUCTO:   </span> <input type="text" id="name" name="name"><br>
    <span class="label">MARCA:   </span> <input type="text" id="brand" name="brand"><br>
    <span class="label">CONTENIDO:   </span> <input type="text" id="content" name="content"><br>
    <span class="label">FECHA INGRESO:   </span> <input type="date" id="due_date" name="due_date"><br>

    <input type="submit" value="guardar">
</form>
</body>
</html>
