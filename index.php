
<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería JMSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #fff);
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background-color: #0d47a1;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        header {
            padding: 3rem 1rem;
            background-color: #1565c0;
            color: white;
            text-align: center;
        }
        .section-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        }
        footer {
            background-color: #0d47a1;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 3rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Librería JMSS</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="autores.php">Autores</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <h1 class="display-4">Bienvenidos a la Librería JMSS</h1>
        <p class="lead">Tu puerta de entrada al conocimiento literario</p>
    </header>

    <main class="container py-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card section-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-book-half"></i> Catálogo</h5>
                        <p class="card-text">Explora nuestra colección de libros y encuentra tus favoritos.</p>
                        <a href="catalogo.php" class="btn btn-primary">Ver Catálogo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card section-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-lines-fill"></i> Autores</h5>
                        <p class="card-text">Descubre a los autores que forman parte de nuestra librería.</p>
                        <a href="autores.php" class="btn btn-primary">Ver Autores</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card section-card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-envelope-paper"></i> Contacto</h5>
                        <p class="card-text">Comunícate con nosotros para sugerencias o dudas.</p>
                        <a href="contacto.php" class="btn btn-primary">Ir a Contacto</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Librería JMSS. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
