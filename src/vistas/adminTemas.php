<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tema</title>
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
                <a class="nav-link text-white" href="">
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

      <main class="container admin-ctn">

      <h2 class="text-center mb-5">Agregar tema</h2>
        <div class="row">
        <section class="col-sm-12 col-md-6 col-lg-6 mb-5">
                <p>En este apartado podrás añadir los temas para poder hacer referencia a las categorías. Por ejemplo, si deseas añadir una categoría en un tema que no aparece en el sistema, puedes cargarlo desde aquí.</p>

                <small>Nota: Cada tema añadido aparecera en el formulario de categorías.</small>
                <br><br>
                <small>Nota 2: En caso de haber una equivocación, en la pagina de incio del administrador se muestran los enlaces para acceder a todo el contenido en formato de tabla, donde se puede editar y/o eliminar.</small>
        </section>

        <section class="col-sm-12 col-md-6 col-lg-6 mb-5">
        <form class="shadow-sm p-3 mb-5 bg-body-tertiary rounded" action="auth-tema" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tema:</label>
              <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" name="agregar" class="btn btn-primary">Agregar</button>

            <div class="mt-3">
                    <?php
                      if (isset($_GET['msj'])) {
                        $alerta = $_GET['msj'];
                        ?>
                        <p class="text-center"><?php echo $alerta; ?></p>
                        <?php }?>
                        
                    </div>
          </form>
        </section>    
        </div>
      </main>
    
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>