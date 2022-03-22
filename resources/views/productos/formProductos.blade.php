<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FormProductos</title>
</head>
<body>
    <h1>Agregar Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($producto)
        <form action="/producto/{{ $producto->id }}" method="POST"> {{-- Editar --}}
            @method('PATCH')
    @else
        <form action="/producto" method="POST"> {{-- Crear --}}
    @endisset

        @csrf
        <label for="producto">Nombre de la producto:</label><br>
        <input type="text" name="producto" value="{{ isset($producto) ? $producto->producto : '' }} {{ old('producto') }}">
        <br>

        <br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="10">
            {{ isset($producto) ? $producto->descripcion : '' }} {{ old('descripcion') }}

        </textarea>
        <br>

        <label for="categoria">Categoria</label><br>
        <select name="categoria" id="categoria">
            <option value="Escuela" {{ isset($producto) && $producto->categoria == 'Escuela' ? 'selected' : '' }}>Escuela</option>
            <option value="Trabajo" {{ isset($producto) && $producto->categoria == 'Trabajo' ? 'selected' : '' }}>Trabajo</option>
            <option value="Otra" {{ isset($producto) && $producto->categoria == 'Otra' ? 'selected' : '' }}>Otra</option>
        </select>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
