<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
     @endif
    <form action="{{ Route('usuario.registrar') }}" method="post">
        @csrf
        <label >Nombre:
            <input type="text" name="name" value="Mario Quevedo">
        </label>
        <label >Email:
            <input type="email" name="email" value="mstndev@gmail.com">
        </label>
        <label>Contrasena:
            <input type="password" name="password" value="pass">
        </label>
        <label>Contrasena:
            <input type="password" name="rePassword" value="pass">
        </label>
        <label>Contrasena:
            <input type="password" name="dayCode" value="13">
        </label>
        <button>Crear Usuario</button>

    </form>
    <hr>
    <p>Crea una cuenta <a href="{{ Route('usuario.registrar') }}">Aqui</a></p>

</body>
</html>
