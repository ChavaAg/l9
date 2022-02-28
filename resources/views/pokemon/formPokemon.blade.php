<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario Pokemon</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($pokemon)
        <form action="/pokemon/{{$pokemon->id}}" method="POST"> {{--editar--}}
        @method('PATCH')
    @else
        <form action="/pokemon" method="POST"> {{--crear--}}
    @endisset

        @csrf
        <label for="nombre">Nombre del pokemon</label><br>
        <input type="text" name="nombre" value={{ isset($pokemon) ? $pokemon->nombre : ''}}{{old('nombre')}}><br>
        <label for="descripcion">Descripcion</label><br>
        <textarea name="descripcion" id="descripcion" cols="20" rows="5">{{ isset($pokemon) ? $pokemon->descripcion : ''}}{{old('descripcion')}}</textarea><br>
        <label for="tipo">Tipo</label><br>
        <select name="tipo" id="tipo">
            <option value="Fuego" {{isset($pokemon) && $pokemon->tipo == 'Fuego' ? 'selected' : ''}}>Fuego</option>
            <option value="Agua" {{isset($pokemon) && $pokemon->tipo == 'Agua' ? 'selected' : ''}}>Agua</option>
            <option value="Hada" {{isset($pokemon) && $pokemon->tipo == 'Hada' ? 'selected' : ''}}>Hada</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
