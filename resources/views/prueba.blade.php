<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container py-5">

        <h1 class="text-center mb-4">Página de pruebas</h1>

        <div class="alert alert-info">Mensaje informativo.</div>
        <div class="alert alert-success">Operación completada.</div>
        <div class="alert alert-warning">Advertencia general.</div>
        <div class="alert alert-danger">Error inesperado.</div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h3 class="card-title">Card de ejemplo</h3>
                <p class="card-text">Contenido de prueba dentro de una card.</p>
                <a href="#" class="btn btn-primary">Ver más</a>
            </div>
        </div>

        <h3>Tabla</h3>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Dato</th>
                </tr>
            </thead>
            <tbody>
                @foreach (['Jess','Mailo','Laravel','Test'] as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item }}</td>
                        <td>{{ Str::random(6) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3 class="mt-4">Formulario</h3>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" class="form-control">
            </div>

            <div class="mb-3">
                <label>Correo</label>
                <input type="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Mensaje</label>
                <textarea class="form-control"></textarea>
            </div>

            <button class="btn btn-success">Enviar</button>
        </form>

        @php $logged = true; @endphp

        <div class="mt-4">
            @if ($logged)
                <p class="text-success fw-bold">Usuario autenticado</p>
            @else
                <p class="text-danger fw-bold">Usuario invitado</p>
            @endif
        </div>

        <h3 class="mt-4">Lista</h3>
        <ul class="list-group">
            @foreach (range(1, 5) as $num)
                <li class="list-group-item">Elemento {{ $num }}</li>
            @endforeach
        </ul>

        <footer class="mt-5 text-center text-muted">
            <p>Página generada para pruebas</p>
        </footer>

    </div>

</body>
</html>