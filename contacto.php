<?php
include 'conexion.php';
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    try {
        $sql = "INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$correo, $nombre, $asunto, $comentario]);
        $mensaje = "¡Mensaje enviado correctamente!";
    } catch (PDOException $e) {
        $mensaje = "Error al guardar el mensaje: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Contacto - Librería JMSS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/flatly/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilos.css">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2><i class="bi bi-envelope"></i> Formulario de Contacto</h2>

    <?php if ($mensaje): ?>
      <div class="alert alert-info"><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <form method="POST" class="card p-4 shadow-sm">
      <div class="mb-3">
        <label for="correo" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="correo" name="correo" required>
      </div>
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="asunto" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" required>
      </div>
      <div class="mb-3">
        <label for="comentario" class="form-label">Comentario</label>
        <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Enviar</button>
      <a href="index.php" class="btn btn-danger">Volver</a>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    const form = document.querySelector("form");
    form.addEventListener("submit", function(e) {
      const campos = form.querySelectorAll("input, textarea");
      for (let campo of campos) {
        if (!campo.value.trim()) {
          e.preventDefault();
          Swal.fire({
            icon: 'warning',
            title: 'Campos incompletos',
            text: 'Por favor, rellena todos los campos antes de enviar.'
          });
          return;
        }
      }
    });
  </script>
</body>
</html>
