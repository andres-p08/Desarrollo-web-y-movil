<!--
	Nombre: Andrés Peña
    RUT: 22059517-K
    NRC: 8479
-->
    
<html>
    <head>
         <title>Kessoku Sound | Estudio & Producción Musical</title>
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
                <ul class="navbar-nav mx-auto" style="background-color: #1C1616;">
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
                <li>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Área Artistas</button>
                </li>
            </div>
        </nav>
        
        <header class="container text-center py-5">
            <h1 class="display-4 fw-bold mb-3">Dale Vida y Potencia a tu Sonido</h1>
            <p class="lead text-light col-lg-8 mx-auto">
                Estudio de grabación profesional, mezcla analógica, masterización digital y distribución global para bandas independientes y artistas emergentes.
            </p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="servicios.php" class="btn btn-dark btn-lg px-4 shadow">Reservar Sesión</a>
                <a href="contacto.php" class="btn btn-outline-light btn-lg px-4">Enviar Demo</a>
            </div>
        </header>

        <div class="container px-4 text-center" >
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 card h-100" style="background-color: #212529; color: #822626">
                        <h4>Grabación & Mezcla</h4>
                        <p class="card-text text-secondary">Salas acústicamente tratadas con microfonía vintage y preamplificadores clase A para capturar cada matiz.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 card h-100" style="background-color: #212529; color: #822626">
                        <h4>Mastering Profesional</h4>
                        <p class="card-text text-secondary">Optimización de audio de alto impacto lista para plataformas como Spotify, Apple Music y prensado en vinilo.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 card h-100" style="background-color: #212529; color: #822626">
                        <h4>Sello & Distribución</h4>
                            <p class="card-text text-secondary">Gestión de derechos de autor, monetización de regalías y posicionamiento en playlists editoriales.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid py-4 mt-5 border-top border-dark text-center" style="background-color: #1C1616;">
            <div class="d-flex justify-content-center gap-4 mb-2">
                <a href="empresa.php" class="text-white-50 text-decoration-none">Sobre el Sello</a>
                <a href="servicios.php" class="text-white-50 text-decoration-none">Servicios</a>
                <a href="productos.php" class="text-white-50 text-decoration-none">Instrumentos</a>
                <a href="contacto.php" class="text-white-50 text-decoration-none">Enviar Demo</a>
            </div>
            <small class="text-white-50">© 2026 Kessoku Sound Records. Todos los derechos reservados.</small>
        </footer>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Portal de Artistas & Clientes</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <form action="empresa.php">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Ingresa tu clave" name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Recordar sesión
                            </label>
                        </div>
                    <button type="submit" class="btn btn-primary">Ingresar al panel</button>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
             </div>

                </div>
            </div>
        </div>
                
    </body>
</html>