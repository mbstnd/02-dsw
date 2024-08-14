<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor de Proyectos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Función para abrir y cerrar el modal
        function toggleModal() {
            document.getElementById('projectModal').classList.toggle('hidden');
        }

        // Función para cerrar el modal haciendo clic fuera de él
        function closeModal(event) {
            if (event.target.id === 'projectModal') {
                toggleModal();
            }
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Mantenedor de Proyectos</h1>

        <!-- Botón para abrir el modal -->
        <div class="mb-6">
            <button onclick="toggleModal()"
                class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Agregar Nuevo Proyecto
            </button>
        </div>

        <!-- Modal -->
<div id="projectModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden" onclick="closeModal(event)">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg w-full max-w-lg p-6 relative">
            <h2 class="text-2xl font-semibold mb-4">Crear Nuevo Proyecto</h2>
            <button onclick="toggleModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <form action="{{ Route('proyectos.create') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Nombre del proyecto"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="fecha_inicio" class="block text-gray-700 font-medium mb-2">Fecha de Inicio:</label>
                    <input type="date" id="fecha_inicio" name="fecha_inicio"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="estado" class="block text-gray-700 font-medium mb-2">Estado:</label>
                    <input type="text" id="estado" name="estado" placeholder="Estado del proyecto"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="responsable" class="block text-gray-700 font-medium mb-2">Responsable:</label>
                    <input type="text" id="responsable" name="responsable" placeholder="Responsable del proyecto"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="monto" class="block text-gray-700 font-medium mb-2">Monto:</label>
                    <input type="number" id="monto" name="monto" placeholder="Monto del proyecto"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                    <button  type="submit"
                             class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                             Agregar Proyecto
                        </button>
                     </form>
                </div>
            </div>
        </div>
        <!-- Lista de Proyectos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach ($data as $registro)
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">{{ $registro->name }}</h2>
                <p class="text-gray-600 mb-2"><strong>Fecha de Inicio:</strong> {{ $registro->fecha_inicio }}</p>
                <p class="text-gray-600 mb-2"><strong>Estado:</strong> {{ $registro->estado }}</p>
                <p class="text-gray-600 mb-2"><strong>Responsable:</strong> {{ $registro->responsable }}</p>
                <p class="text-gray-600 mb-2"><strong>Monto:</strong> {{ $registro->monto }}</p>
                <p class="text-gray-600 mb-2"><strong>Creado por:</strong> {{ $registro->user->name }}</p>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
