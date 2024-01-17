<?php
  use Alansnow\Ciencia\config\Conexion;
  use Alansnow\Ciencia\modelo\Contenido;
  use Alansnow\Ciencia\modelo\Categoria;
  use Alansnow\Ciencia\modelo\Tema;

  $categorias=new Categoria();
  $conectar=new Conexion();
  $contenidos=new Contenido();
  $tema = new Tema();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciencia abierta para la comunicación del conocimiento</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="stylesheet" href="src/assets/css/carrousel.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

    <nav id="nav" class="navbar navbar-black navbar-expand-md navbar bg-color">
      <div class="container">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <a class="navbar-brand logo-nav" href="./">
            <img src="src/assets/img/Cienciaabierta2blanco.png" width="50" alt="Logo de la página web">
          </a>
          <ul class="navbar-nav d-flex justify-content-center align-items-center opciones-nav">
          <li class="nav-item dropdown nav-4">
              <a class="nav-link dropdown-toggle text-white" href="que-es" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ¿Qué es?
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-moon-stars" viewBox="0 0 16 16">
                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                  </svg>
              </a>
              <ul id="menu" class="dropdown-menu menu">
                <li><a id="item-1" class="dropdown-item" href="que-es">¿Qué es?</a></li>
                <li><a id="item-5" class="dropdown-item" href="linea-del-tiempo">Línea del tiempo</a></li>
                <li><a id="item-2" class="dropdown-item" href="">Marco legal</a></li>
                <li><a id="item-3" class="dropdown-item" href="directorio">Directorio</a></li>
              </ul>
            </li>
            <li class="nav-item nav-2">
              <a class="nav-link text-white" href="objetivo">
                Objetivo
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-sun" viewBox="0 0 16 16">
                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                  </svg>
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="compromiso-social">
                Compromiso social
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="logo-stars" viewBox="0 0 16 16">
                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
                  </svg>
              </a>
            </li>
            <li class="nav-item dropdown nav-4">
              <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contenido
              </a>
              <ul id="menu" class="dropdown-menu menu">
                <?php
                $res = Tema::obtenerTemas($conectar);
                foreach ($res as $reg) {
                  ?>
                  <li><a id="item-4" class="dropdown-item" href="tema/<?php echo $reg['id']; ?>"><?php echo $reg['nombre'] ?></a></li>
                  <?php
                }
                ?>
              </ul>
            </li>
            <li id="btnModo" class="nav-item nav-5">
              <a class="nav-link text-white" id="eclipse"><span>Eclipse</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header" class="header">
      <div id="header-eclipse" class="nada"></div>
      <div id="header-contenido" class="header-content">
        <div id="alerta-eclipse" class="alerta-eclipse-none">
          <small>¡Dale click en el botón que dice "Normal" para ver el cambio!</small>
          <a id="okay" class="text-white" href="">Entendido</a>
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-header" src="src/assets/img/Ciencia abierta1.png" alt="">
        </div>
      </div>
    </header>
    
    <main class="container seccion-ctn">

      <section class="">
        <h2 id="texto-carousel" class="text-center mb-3 txt-carousel">Lo nuevo...
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="logo-postcard" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
              </svg>
        </h2>

        <div id="carouselExampleDark" class="carousel carousel-dark slide carrusel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
          <?php
            $resultado=$contenidos->ultimosContenidos($conectar);
            $primerElemento = true;
            foreach ($resultado as $registro) {
              $contenidos->setId($registro['id']);
              $contenidos->setArchivo($registro['archivo']);
              $contenidos->setTitulo($registro['titulo_contenido']);
              $contenidos->setFecha($registro['fecha']);
            
          ?>
            <div class="carousel-item <?php echo ($primerElemento) ? 'active' : ''; ?>" data-bs-interval="10000">
            <?php
                  if (strpos($contenidos->getArchivo(), "img") or strpos($contenidos->getArchivo(), "jpg") or strpos($contenidos->getArchivo(), "png") or strpos($contenidos->getArchivo(), "jpeg") or strpos($contenidos->getArchivo(), "pdf")) {

                    ?>
                    <img src="src/assets/multimedia/img/<?php echo $contenidos->getArchivo();?>" class="img-fluid d-block w-75 img-carrusel" height="400px" alt="...">
                    <?php
                  }
                  elseif (strpos($contenidos->getArchivo(), "mp4") or strpos($contenidos->getArchivo(), "mp3")) {
                    
                    ?>
                    <video src="src/assets/multimedia/video/<?php echo $contenidos->getArchivo();?>" class="img-fluid d-block w-75 h-75 img-carrusel" controls></video>
                    <?php
                  }
                ?>
              <div class="carousel-caption d-none d-md-block">
                <a class="link-offset-2 link-underline link-underline-opacity-0" href="doc/<?php echo $contenidos->getId();?>"><h5 class="text-white"><?php echo $contenidos->getTitulo();?></h5></a>
                <p class="text-white"><?php echo $contenidos->getFecha();?></p>
              </div>
            </div>
              <?php 
            $primerElemento = false;
            } ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span id="carousel" class="carousel-control-prev-icon btn-carousel-uno" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span id="carousel-2" class="carousel-control-next-icon btn-carousel-dos" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

      <h2 id="texto-grilla" class="text-center txt-grilla">Categorias...
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="logo-postcard" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
          </svg>
      </h2>

      <section class="seccion-grilla">
      <?php
        $resultado=$categorias->ultimasCategoriasCombinadas($conectar);
        foreach ($resultado as $registro) {
          $categorias->setId($registro['id']);
          $categorias->setArchivo($registro['archivo']);
          $categorias->setTitulo($registro['titulo']);
          $categorias->setTipo($registro['tipo']);
        
      ?>
        <div class="opcion">
          <img src="src/assets/multimedia/img/<?php echo $categorias->getArchivo();?>" alt="Proyecto 1">
          <div class="overlay">
            <p><?php echo $categorias->getTitulo();?> - <?php echo $categorias->getTipo();?></p>
          </div>
        </div>
      <?php } ?>
      </section>

      <section>
        <script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=5eu6nvqrqif&amp;m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
      </section>

      <div class="marquesina-ctn">
        <div class="marquesinas">
            <img class="marquesina-img-uno" src="src/assets/img/CEDES-color-oficial_transp Negro.png" alt="Imagen 1">
            <img class="marquesina-img-uno" src="src/assets/img/unach.png" alt="Imagen 2">
            <img class="marquesina-img-uno" src="src/assets/img/UAM.png" alt="Imagen 3">
            <img class="marquesina-img-uno" src="src/assets/img/50_años_unach_2.png" alt="Imagen 3">
        </div>
    </div>
    </main>

    <button id="btn-subir" class="btn-subir-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi-caret-up-fill" viewBox="0 0 16 16">
        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
      </svg>
    </button>

    <footer id="footer" class="foot-ctn">
      <div class="container d-flex justify-content-between">

        <div class="foot-txt">
          <a href="">Aviso de privacidad</a>
          <a href="">Todos los derechos reservados</a>
        </div>

        <div class="redes-scs">
          <a href="https://www.facebook.com/unachcedes/" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-redes" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
          </a>

          <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fcedesunach" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-redes" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
          </a>
        </div>
      </div>
    </footer>
    
    <script src="src/assets/js/bootstrap.bundle.min.js"></script>
    <script src="src/assets/js/modoEclipse.js"></script>
    <script src="src/assets/js/navbar.js"></script>
    <script src="src/assets/js/btnSubir.js"></script>
    <script src="script.js"></script>
</body>
</html>