<!DOCTYPE html>
<html>
<head>
    <title>Biblioteca</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { padding: 20px; }
        .table-hover tbody tr:hover { background-color: #f8f9fa; }
        .action-buttons .btn { margin: 2px; }
    </style>
</head>
<body class="container mt-4">
    <h1 class="mb-4">Lista de Aviones</h1>
    
    <a href="<?= RUTA_APP ?>/Aviones/alta" class="btn btn-success mb-3">
        <i class="fas fa-plus-circle me-2"></i>Dar de alta un Avion
    </a>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>marca</th>
                    <th>modelo</th>
                    <th>propietario</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $Avion): ?>
                <tr>
                    <td><?= htmlspecialchars($Avion['id']) ?></td>
                    <td><?= htmlspecialchars($Avion['titulo']) ?></td>
                    <td><?= htmlspecialchars($Avion['autor']) ?></td>
                    <td><?= htmlspecialchars($Avion['editorial']) ?></td>
                    <td class="text-center action-buttons">
                        <a href="<?= RUTA_APP ?>/Aviones/modificar/<?= $Avion['id'] ?>" 
                           class="btn btn-warning btn-sm"
                           title="Editar registro">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= RUTA_APP ?>/Aviones/borrar/<?= $Avion['id'] ?>" 
                           class="btn btn-danger btn-sm"
                           title="Eliminar registro"
                           onclick="return confirm('¿Estás seguro de eliminar este Avion?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
</body>
</html>