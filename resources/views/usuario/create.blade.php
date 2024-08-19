<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Usuario</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Crear Usuario</h1>

        @if ($errors->any())
        <ul class="mb-4 text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form action="{{ Route('usuario.registrar') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Ingresa tu nombre">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Ingresa tu email">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña:</label>
                <input type="password" id="password" name="password" value="pass" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Ingresa tu contraseña">
            </div>

            <div class="mb-4">
                <label for="rePassword" class="block text-gray-700 font-semibold mb-2">Confirmar Contraseña:</label>
                <input type="password" id="rePassword" name="rePassword" value="pass" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Repite tu contraseña">
            </div>

            <div class="mb-4">
                <label for="dayCode" class="block text-gray-700 font-semibold mb-2">Código de Día:</label>
                <input type="password" id="dayCode" name="dayCode" value="13" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Ingresa el código de día">
            </div>

            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Crear Usuario</button>
        </form>
    </div>
</body>
</html>
