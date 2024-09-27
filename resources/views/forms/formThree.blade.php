<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta de Satisfacción del Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Encuesta de Satisfacción</h2>

                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del Cliente:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa tu nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="agente" class="form-label">Nombre del Agente:</label>
                        <input type="text" id="agente" name="agente" class="form-control" placeholder="Ingresa el nombre del agente" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">¿Cómo calificarías la atención recibida?</label>
                        <div class="form-check">
                            <input type="radio" id="malo" name="calificacion" value="malo" class="form-check-input" required>
                            <label for="malo" class="form-check-label">Malo</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="regular" name="calificacion" value="regular" class="form-check-input" required>
                            <label for="regular" class="form-check-label">Regular</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="bueno" name="calificacion" value="bueno" class="form-check-input" required>
                            <label for="bueno" class="form-check-label">Bueno</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="excelente" name="calificacion" value="excelente" class="form-check-input" required>
                            <label for="excelente" class="form-check-label">Excelente</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="comentarios" class="form-label">Comentarios Adicionales:</label>
                        <textarea id="comentarios" name="comentarios" class="form-control" placeholder="Deja tus comentarios" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning w-100">Enviar Encuesta</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
