<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="text-center max-w-md p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-6">Bienvenido a <span class="text-blue-600">Tech Solutions</span></h1>
        <p class="text-lg text-gray-600 mb-8 text-pretty leading-normal">Una plataforma para soluciones tecnológicas innovadoras. Comienza explorando nuestras herramientas y servicios.</p>
        <a href="{{ Route('usuario.login') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full transition duration-300 transform hover:scale-105">Iniciar Sesión</a>
    </div>
</body>
</html>
