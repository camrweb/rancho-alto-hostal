<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('css/pdf-usuarios.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@300;400;700&display=swap"
        rel="stylesheet">
    <title>USUARIOS PDF</title>
</head>

<body>
    <section class="attendance">
        <div class="attendance-list">
            <h1>Usuarios registrados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Fecha</th>
                        <th>verificación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->email_verified_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
