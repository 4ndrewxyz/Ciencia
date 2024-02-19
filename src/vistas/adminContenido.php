<?php
  use Alansnow\Ciencia\modelo\Lenguas;
  use Alansnow\Ciencia\modelo\Categoria;
  use Alansnow\Ciencia\config\Conexion;

  $lengua=new Lenguas();
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
                albums
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

      <h2 class="text-center mb-5">Agregar contenido</h2>
        <div class="row">
            <section class="col-sm-12 col-md-6 col-lg-6 mb-5 px-5">
                <p>En este apartado podrás añadir contenidos que serán visibles en la página web, especificamente en la pestaña de contenido, en donde aparecerán dentro de cada categoría.
                </p>

                <h4>- Atributos del contenido (página web)</h4>
                <p>Cada contenido o publicación estará presentado en un card con su información correspondiente, los cuales son:</p>
                <ul>
                  <li>Contenido multimedia</li>
                  <li>Titulo</li>
                  <li>Fecha</li>
                  <li>Visualizaciones</li>
                </ul>

                <small class="">Nota: La fecha y visualizaciones son añadidas automáticamente al ingresar un contenido nuevo a la base de datos. Las visualizaciones se irán alojando de manera dinámica.</small>

                <h4 class="mt-3">- Formulario</h4>
                <p>El formulario presentá los campos correspondientes para añadir el contenido a la base de datos, para después ser mostrado en el sitio. Por lo que, es importante ser muy especifico en cuanto al titulo, contenido multimedia a mostrar, la categoría que sera alojada (infografía, videos o el que se añada en la sección de categorías) y la lengua (funciona de la misma manera que la categoria). Como se menciono, las categorías y lenguas aparecerán si estas mismas existen en la base de datos, por lo que si se requiere añadir una categoría y/o lengua nueva, se debe hacer en sus pestañas correspondientes. Una vez selecciones la lengua del contenido te saldran las categorias que tienen esa lengua, asi que, si no hay categorias en la lengua, te saldrá "sin resultados", por lo que debes de añadir la categoria en la lengua del contenido.</p>

                <small>Nota Importante: En el campo de categoría se muestran los tipos de contenido (infografía, videos, etc.) y también el titulo que corresponde a dicha categoría, asi que, si el contenido es una infografía y el titulo es Ch'ol se tiene que escoger la opción: infografía - Ch'ol, por poner un ejemplo. Entonces, es importante escocger un titulo adecuado a la categoría, para que lo encuentre facilmente.</small>

                <br><br>          
                <small>Nota 2: La categoría y lengua son para el ordenamiento del contenido, por lo que se recalca la importancia de añadir correctamente a que categoria y lengua pertenece el contenido. En caso de haber una equivocación, en la pagina de incio del administrador se muestra todo el contenido en formato de tabla, donde se puede editar y/o eliminar.</small>
            </section>
    
            <section class="col-sm-12 col-md-6 col-lg-6">
                <form class="shadow-sm p-3 mb-5 bg-body-tertiary rounded" action="auth-contenido" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titulo</label>
                      <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Contenido (IMG/JPG/PNG/MP4/MP3/PDF)</label>
                        <input class="form-control" name="archivo" type="file" id="formFile" required>
                      </div>
                      <select id="select_lengua" class="form-select mb-3" name="lengua_id" aria-label="Default select example" required>
                        <option selected>Lengua</option>
                        <?php
                          $resultado=$lengua->obtenerLenguas($conectar);
                          foreach ($resultado as $registro) {
                            
                              $lengua->setId($registro['id']);
                              $lengua->setNombre($registro['nombre']);
                            ?>
                            <option value="<?php echo $lengua->getId();?>"><?php echo $lengua->getNombre();?></option>
                          <?php } ?>
                      </select>

                      <select id="select_categoria" class="form-select mb-3" name="categoria_id" aria-label="Default select example" required>
                        <option selected>Categoria</option>
                      </select>

                    <button type="submit" name="subir" class="btn btn-primary">Guardar</button>
                    
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
    <script src="src/assets/js/categoria.js"></script>  
</body>
</html>