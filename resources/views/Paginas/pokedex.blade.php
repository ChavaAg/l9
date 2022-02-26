<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>
<body>
    <h1>Pokedex</h1>
    <p>Vamos a analisar al pokemon {{$pokemon}}</p>
    <br>
    <p>
        @if(isset($tipo))
            Este pokemon es de tipo {{$tipo}}
        @else
            Este pokemon es desconocido
        @endif
    </p>
    
</body>
</html>