<?php
require 'conexion.php';

$stmt = $pdo->query("SELECT * FROM titulos");
$titulos = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Catálogo - Librería JMSS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/minty/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container py-4">
  <h2 class="mb-4">📖 Catálogo de Libros</h2>
  <table class="table table-hover table-bordered">
    <thead class="table-dark">
      <tr>
        <th>Título</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Avance</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($titulos as $libro): ?>
      <tr>
        <td><?= htmlspecialchars($libro['titulo']) ?></td>
        <td><?= htmlspecialchars($libro['tipo']) ?></td>
        <td>$<?= number_format($libro['precio'], 2) ?></td>
        <td><?= htmlspecialchars($libro['avance']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <a href="index.php" class="btn btn-secondary mt-3">⬅ Volver al Inicio</a>
</body>
</html>
