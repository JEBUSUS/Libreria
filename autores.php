<?php
require 'conexion.php';

$stmt = $pdo->query("SELECT nombre, apellido, telefono, ciudad, pais FROM autores");
$autores = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Autores - Librería JMSS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/minty/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container py-4">
  <h2 class="mb-4">📚 Listado de Autores</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Teléfono</th>
        <th>Ciudad</th>
        <th>País</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($autores as $autor): ?>
      <tr>
        <td><?= htmlspecialchars(trim($autor['nombre'])) ?></td>
        <td><?= htmlspecialchars(trim($autor['apellido'])) ?></td>
        <td><?= htmlspecialchars($autor['telefono']) ?></td>
        <td><?= htmlspecialchars($autor['ciudad']) ?></td>
        <td><?= htmlspecialchars($autor['pais']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="index.php" class="btn btn-secondary mt-3">⬅ Volver al Inicio</a>
</body>
</html>
