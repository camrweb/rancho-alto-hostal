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
            <h1>CATEGORIAS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th align="center" align="center">ID</th>
                        <th align="center" align="center">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td align="center">{{ $categoria->id }}</td>
                            <td align="center">{{ $categoria->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
