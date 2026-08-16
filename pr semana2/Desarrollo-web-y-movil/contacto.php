<!--
	Nombre: Andrés Peña
    RUT: 22059517-K
    NRC: 8479
-->

<html>
    <head>
        <title>Pagina Contacto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body style="background-color: #822626;">
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #1C1616;">
            <div class="container-fluid">
                <li>
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                        <img src="https://cdn.cosmos.so/2415f99c-7636-4023-b91e-9dd8e2a56b8a?format=webp" alt="Avatar Logo" style="width:100px;" > 
                        </a>
                    </div>
                </li>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" style = "color:white"  href="#" role="button" data-bs-toggle="dropdown">Catálogo</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lanzamientos Recientes</a></li>
                            <li><a class="dropdown-item" href="#">Artistas & Bandas</a></li>
                            <li><a class="dropdown-item" href="#">Vinilos & Merch</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style = "color:white" href="servicios.php">Servicios de Estudio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style = "color:white" href="productos.php">Equipamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style = "color:white" href="contacto.php">Contacto & Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
        <ul>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label" style = "color: #E1EFF7">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <label for="comment" style = "color: #E1EFF7">Comments:</label>
            <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            <a href="index.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color: #1C1616; color: #E1EFF7">volver</a>
        </ul>
    </body>
</html>