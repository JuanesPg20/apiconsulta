<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Agente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Registro de Agente</h2>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo" required>
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Número de Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Ingresa tu número de teléfono" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
                    </div>

                    <div class="mb-3">
                        <label for="turno" class="form-label">Turno de Trabajo:</label>
                        <select id="turno" name="turno" class="form-select" required>
                            <option value="mañana">Mañana</option>
                            <option value="tarde">Tarde</option>
                            <option value="noche">Noche</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Registrar Agente</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
