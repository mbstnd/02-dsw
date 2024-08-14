<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenedor Proyectos</title>
</head>
<body>
    <h1>Mantenedor de Proyectos</h1>
    <hr>

    <div>
        <form action="{{ Route('proyectos.create') }}" method="post">
            @csrf
            <div>
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" placeholder="Nombre del proyecto">
            </div>
            <div>
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio">
            </div>
            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" placeholder="Estado del proyecto">
            </div>
            <div>
                <label for="responsable">Responsable:</label>
                <input type="text" id="responsable" name="responsable" placeholder="Responsable del proyecto">
            </div>
            <div>
                <label for="monto">Monto:</label>
                <input type="number" id="monto" name="monto" placeholder="Monto del proyecto">
            </div>
            <button type="submit">Agregar</button>
        </form>
    </div>
    <hr>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Inicio</th>
                    <th>Responsable</th>
                    <th>Monto</th>
                    <th>Estado</th>
                    <th>Creado por</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->name }}</td>
                    <td>{{ $registro->fecha_inicio }}</td>
                    <td>{{ $registro->responsable }}</td>
                    <td>{{ $registro->monto }}</td>
                    <td>{{ $registro->estado }}</td>
                    <td>{{ $registro->user->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
