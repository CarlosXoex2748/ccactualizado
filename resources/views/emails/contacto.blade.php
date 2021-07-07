<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo Electronico</h1>
    <p> Este es el primer Correo en laravel
    </p>
    <p><strong >Nombre: </strong>{{$contacto['name']}}</p>
    <p><strong >Correo: </strong>{{$contacto['mail']}}</p>
    <p><strong >Asunto: </strong>{{$contacto['subject']}}</p>
    <p><strong >Mensaje: </strong>{{$contacto['message']}}</p>
</body>
</html>