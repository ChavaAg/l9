<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>
</head>
<body>
    <h1>Pokemon</h1>

    <a href="pokemon/create">Nuevo pokemon</a><br><br>

    <table border>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>

        @foreach ($pokemones as $pokemon)
            <tr>
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->nombre}}</td>
                <td>{{$pokemon->tipo}}</td>
                <td>{{$pokemon->descripcion}}</td>
                <td>
                    <a href="pokemon/{{$pokemon->id}}">Ver detalle</a>
                    <a href="pokemon/{{$pokemon->id}}/edit">Editar</a>
                    <form action="/pokemon/{{$pokemon->id}}" method="post">
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
