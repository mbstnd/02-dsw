<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <hr>
    <h2>Datos del Usuario</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
    </table>
    <hr>
    <h2>Mantenedores</h2>
    <div>
        <ul>
            <li>
                <a href="{{ Route('proyectos.index') }}">Proyecto</a>
            </li>
        </ul>
    </div>

</body>
</html>
