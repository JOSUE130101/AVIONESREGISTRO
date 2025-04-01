<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Avion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h3>Nuevo Avion</h3>
        </div>
        <div class="card-body">
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Marca</label>
                    <input type="text" name="titulo" 
                           placeholder="Ingrese el título" 
                           class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Modelo</label>
                    <input type="text" name="autor" 
                           placeholder="Nombre del autor" 
                           class="form-control" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Propietario</label>
                    <input type="text" name="editorial" 
                           placeholder="Nombre de la editorial" 
                           class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-success">Nuevo Avion</button>
                <a href="<?= RUTA_APP ?>/Aviones" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</body>
</html>