<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Informacion de Productos</h1>
    <h3>Usuario: {{ $producto->user->name }}</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Categoria</th>
        </tr>

        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->producto }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->categoria }}</td>
        </tr>
    </table>
</body>
</html>
