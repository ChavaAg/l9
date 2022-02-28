<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
</head>
<body>
    <h1>Detalles del pokemon</h1>

    <table border>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Descripcion</th>
        </tr>
            <tr>
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->nombre}}</td>
                <td>{{$pokemon->tipo}}</td>
                <td>{{$pokemon->descripcion}}</td>
            </tr>
    </table>
</body>
</html>
