<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Inicio de Sesion</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
     @endif
     <!-- Success -->
     @if (session('success'))
        <ul>
            <li>{{ session('success') }}</li>
        </ul>
     @endif
    <form action="{{ Route('usuario.validar') }}" method="post">
        @csrf
        <label >Email:
            <input type="email" name="email" value="mstndev@gmail.com">
        </label>
        <label>Contrasena:
            <input type="password" name="password" value="pass">
        </label>
        <button>Iniciar</button>

    </form>
    <hr>
    <p>Crea una cuenta <a href="{{ Route('usuario.registrar') }}">Aqui</a></p>

</body>
</html>
