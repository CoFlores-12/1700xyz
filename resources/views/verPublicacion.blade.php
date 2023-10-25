<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .card {
            border: 1px solid #eee;
            margin: 10px 16px;
            border-radius: 10px;
            padding: 10px;
        }
        span {
            font-size: 0.7rem;
        }
    </style>
</head>
<body>
    <h1>{{$id}}, Publicaciones</h1>
    <a class="btn btn-primary" href="{{ route('usuario.inicio') }}">Regresar</a>
    @foreach ($publicaciones as $publicacion) 
        <div class="card">
            <p>{{$publicacion->descripcion}}</p>
            <span>Fecha: {{$publicacion->fechaCreacion}}</span>
        </div>
    @endforeach
</body>
</html>