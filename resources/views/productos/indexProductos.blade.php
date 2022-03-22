<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
    <h1>Listado de Productos</h1>

    <a href="/producto/create">Crear Nuevo Producto</a>

    <table border="2">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>

        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->user->name }}</td>
                <td>{{ $producto->producto }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->categoria }}</td>
                <td>
                    <a href="producto/{{ $producto->id }}">Ver Detalle</a>
                    <a href="producto/{{ $producto->id }}/edit">Editar</a>
                    <form action="/producto/{{ $producto->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
