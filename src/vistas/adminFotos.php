<?php
  use Alansnow\Ciencia\modelo\Albums;
  use Alansnow\Ciencia\modelo\Categoria;
  use Alansnow\Ciencia\config\Conexion;

  $album=new Albums();
  $categoria=new Categoria();
  $conectar=new Conexion();

?>
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
              <a class="nav-link active text-white" aria-current="page" href="">
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
              <a class="nav-link text-white" href="agregar-album">
                Albums
              </a>
            </li>
            <li class="nav-item nav-3">
              <a class="nav-link text-white" href="agregar-fotos">
                Fotos
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

      <h2 class="text-center mb-5">Agregar Fotos</h2>
        <div class="row">
            <section class="col-sm-12 col-md-6 col-lg-6 mb-5 px-5">
                <h4>Información</h4>
                <p>En esta sección se añaden las fotos que se mostrarán en la página principal, en la sección de "Galeria".</p>
                </ul>

                <p>Nota: La fecha y visualizaciones son añadidas automáticamente al ingresar un contenido nuevo a la base de datos. Las visualizaciones se irán alojando de manera dinámica.</p>
                <p>Si no has creado un album, puedes hacerlo aqui</p> <a href="agregar-album">Crear album</a>
                <br><br>          
            </section>
    
            <section class="col-sm-12 col-md-6 col-lg-6">
    <form class="shadow-sm p-3 mb-5 bg-body-tertiary rounded" action="auth-fotos" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="formFile" class="form-label">Contenido (IMG/JPG/PNG)</label>
            <input class="form-control" name="archivo" type="file" id="formFile" required>
        </div>

        <div class="mb-3">
            <label for="select_album" class="form-label">Seleccionar Álbum</label>
            <select id="select_album" class="form-select" name="album_id" aria-label="Default select example" required>
                <option selected disabled>Seleccione un álbum</option>
                <?php
                $resultado = $album->obtenerAlbums($conectar);
                foreach ($resultado as $registro) {
                    $album->setId($registro['id']);
                    $album->setNombre($registro['nombre']);
                    ?>
                    <option value="<?php echo $album->getId(); ?>"><?php echo $album->getNombre(); ?></option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" name="subir" class="btn btn-primary">Guardar</button>

        <div class="mt-3">
            <?php
            if (isset($_GET['msj'])) {
                $alerta = $_GET['msj'];
                ?>
                <p class="text-center"><?php echo $alerta; ?></p>
            <?php } ?>
        </div>
    </form>
</section>

        </div>
      </main>
    <script src="src/assets/js/bootstrap.bundle.min.js"></script>  
    <script src="src/assets/js/categoria.js"></script>  
</body>
</html>