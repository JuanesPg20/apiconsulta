<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creación de Ticket de Soporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Crear Ticket de Soporte</h2>

                <form action="/crear-ticket" method="POST">
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Nombre del Cliente:</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Ingresa el nombre del cliente" required>
                    </div>

                    <div class="mb-3">
                        <label for="problema" class="form-label">Descripción del Problema:</label>
                        <textarea id="problema" name="problema" class="form-control" placeholder="Describe el problema" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="prioridad" class="form-label">Prioridad:</label>
                        <select id="prioridad" name="prioridad" class="form-select" required>
                            <option value="baja">Baja</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Crear Ticket</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
