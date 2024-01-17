<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/admin.css">
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
    
    <main class="container admin-ctn">

    <h2 class="text-center mb-5">Tablas</h2>
      <section>
      <div class="m-4">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#categorias" class="nav-link active" data-bs-toggle="tab">Categorías</a>
                </li>
                <li class="nav-item">
                    <a href="#contenidos" class="nav-link" data-bs-toggle="tab">Contenidos</a>
                </li>
                <li class="nav-item">
                    <a href="#lenguas" class="nav-link" data-bs-toggle="tab">Lenguas</a>
                </li>
                <li class="nav-item">
                    <a href="#temas" class="nav-link" data-bs-toggle="tab">Temas</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="categorias">
                    <h5 class="card-title">Categorías</h5>
                   <p>Para poder interactuar con todas las categorías, como editar, eliminar y ver todos los atributos a detalle, <a href="tabla-categoria">click aquí</a></p>
                   
                </div>
                <div class="tab-pane fade" id="contenidos">
                    <h5 class="card-title">Contenidos</h5>
                    <p>Para poder interactuar con todos los contenidos, como editar, eliminar y ver todos los atributos a detalle, <a href="tabla-contenido">click aquí</a></p>
                </div>
                <div class="tab-pane fade" id="lenguas">
                    <h5 class="card-title">Lenguas</h5>
                    <p>Para poder interactuar con todas las lenguas, como editar, eliminar y ver todos los atributos a detalle, <a href="tabla-lenguas">click aquí</a></p>
                </div>
                <div class="tab-pane fade" id="temas">
                    <h5 class="card-title">Temas</h5>
                    <p>Para poder interactuar con todos los temas, como editar, eliminar y ver todos los atributos a detalle, <a href="tabla-temas">click aquí</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
      </section>
    </main>

<script src="src/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>