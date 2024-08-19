<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Inicio de Sesión</h1>

        @if ($errors->any())
        <ul class="mb-4 text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if (session('success'))
        <ul class="mb-4 text-green-600">
            <li>{{ session('success') }}</li>
        </ul>
        @endif

        <form action="{{ Route('usuario.validar') }}" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Correo electrónico:</label>
                <input type="email" name="email" id="email" value="mstndev@gmail.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Contraseña:</label>
                <input type="password" name="password" id="password" value="pass" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:ring focus:border-blue-300" required>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Iniciar Sesión</button>
            </div>
        </form>

        <hr class="my-6">

        <p class="text-center text-gray-600 text-sm">
            ¿No tienes una cuenta? <a href="{{ Route('usuario.registrar') }}" class="text-blue-500 hover:text-blue-700">Crea una aquí</a>
        </p>
    </div>
</body>
</html>
