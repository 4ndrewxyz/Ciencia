<?php

  use Alansnow\Ciencia\modelo\Visitas;
  use Alansnow\Ciencia\config\Conexion;

  $visitas = new Visitas();
  $conectar = new Conexion();
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Álbums</title>
      <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="src/assets/css/admin.css">
      <link rel="stylesheet" href="src/assets/css/visitas.css">
  </head>
  <body>
  
  <nav id="nav" class="navbar navbar-black navbar-expand-md navbar bg-color">
      <div class="container">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <a class="navbar-brand logo-nav" href="administrador">
            <img src="src/assets/img/CEDES-color-oficial_transp Negro.png" width="40" alt="Logo de la página web">
          </a>
          <ul class="ms-auto navbar-nav d-flex justify-content-center align-items-center opciones-nav">
            <li class="nav-item nav-1">
              <a class="nav-link active text-white" aria-current="page" href="agregar-contenido">
                Agregar contenido
              </a>
            </li>
            <li class="nav-item nav-2">
              <a class="nav-link text-white" href="agregar-categoria">
                Categorías
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="agregar-lenguas">
                Lenguas
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="agregar-temas">
                Temas
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="agregar-albums">
                albums
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="agregar-fotos">
                Fotos
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="admin-visitas">
                Visitas
              </a>
            </li>
            <li class="nav-item dropdown nav-4">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                use Alansnow\Ciencia\lib\Session;

                echo Session::sesion();

                ?>
              </a>
              <ul id="menu" class="dropdown-menu menu">
                <li><a id="item-1" class="dropdown-item" href="">Agregar administrador</a></li>
                <li><a id="item-2" class="dropdown-item" href="salir">Salir</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <section id="statistic" class="statistic-section one-page-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12 col-md-3">
                <div class="counter">
                    <i class="fa fa-coffee fa-2x stats-icon"></i>
                    <h2 class="timer count-title count-number" data-count="<?php echo $visitas->obtenerVisitas($conectar)['total_visitors']; ?>">0</h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">Total de visitantes</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="counter">
                    <i class="fa fa-code fa-2x stats-icon"></i>
                    <h2 class="timer count-title count-number" data-count="<?php echo $visitas->visitasHoy($conectar)['visitas_hoy']; ?>">0</h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">Visitas de hoy</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="counter">
                    <i class="fa fa-clock-o fa-2x stats-icon"></i>
                    <h2 class="timer count-title count-number" data-count="<?php echo $visitas->visitasMes($conectar)['visitas_mes']; ?>">0</h2>
                    <div class="stats-line-black"></div>
                    <p class="stats-text">Visitas este mes</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
            <div class="counter">
                <i class="fa fa-laptop fa-2x stats-icon"></i>
                <?php
                 $lastVisit = $visitas->obtenerUltimaVisita($conectar)['last_visit'];
                 if ($lastVisit) {
                 $date = new DateTime($lastVisit);
                 $formattedDate = $date->format('j \d\e F Y, g:i a');
                echo '<h2 class="fecha-title count-number">' . $formattedDate . '</h2>';
                 } else {
                        echo '<h2 class="count-title count-number">N/A</h2>';
                        }
                        ?>
            <div class="stats-line-black"></div>
            <p class="stats-text">Última Visita</p>
            </div>
        </div>
    </div>
</div>
</section>
  

<img src="/src/assets/img/globe.png" alt="">





<script src="src/assets/js/bootstrap.bundle.min.js"></script>
<script src="src/assets/js/visitas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> 

</body>
</html>