<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <title>DATOS PDF</title>
</head>
<body>
    <section class="attendance">
        <div class="attendance-list">
            <h1>Listado de {{ $categoria->name }}</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th align="center">ID</th>
                        <th align="center">Nombre</th>
                        <th align="center">Descripcion</th>
                        <th align="center">Personas Max</th>
                        <th align="center">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habitaciones as $habitacion)
                        <tr>
                            <td align="center">{{ $habitacion->id }}</td>
                            <td align="center">{{ $habitacion->name }}</td>
                            <td align="center" id="description">{{ $habitacion->description }}</td>
                            <td align="center">{{ $habitacion['person-max'] }}</td>
                            <td align="center">{{ $habitacion->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
