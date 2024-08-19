<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-extrabold mb-8 text-gray-900">Perfil del Usuario</h1>

        <div class="bg-white shadow-lg rounded-lg p-8 mb-8 max-w-screen-md mx-auto">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800 border-b pb-4">Información del Usuario</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-medium text-gray-700 mb-2">Nombre</h3>
                    <p class="text-gray-600 text-lg">{{ $user->name }}</p>
                </div>
                <div class="p-6 bg-gray-50 rounded-lg shadow-md">
                    <h3 class="text-xl font-medium text-gray-700 mb-2">Correo Electrónico</h3>
                    <p class="text-gray-600 text-lg">{{ $user->email }}</p>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-8 max-w-screen-md mx-auto">
            <h2 class="text-3xl font-semibold mb-6 text-gray-800 border-b pb-4">Mantenedores</h2>
            <ul class="space-y-4">
                <li>
                    <a href="{{ Route('proyectos.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold text-lg transition duration-300">Proyectos</a>
                </li>
            </ul>
        </div>

        <!-- Botón de Cierre de Sesión -->
        <div class="flex justify-center mt-8">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-600 text-white hover:bg-red-700 font-semibold py-2 px-4 rounded-lg transition duration-300">Cerrar Sesión</button>
            </form>
        </div>
    </div>

</body>
</html>
