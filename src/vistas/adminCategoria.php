<?php
  use Alansnow\Ciencia\modelo\Lenguas;
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $tema = new Tema();
  $lengua=new Lenguas();
  $conectar=new Conexion();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Categorías</title>
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
            <a class="nav-link text-white" href="agregar-album">
                Albums
              </a>
              <a class="nav-link text-white" href="agregar-fotos">
                Fotos
              </a>
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

      <h2 class="text-center mb-5">Categorías de contenido</h2>
        <div class="row">
            <section class="col-sm-12 col-md-6 col-lg-6 mb-5 px-5">
                <p>En este apartado podrás añadir las categorías para poder mostrar de manera ordenada el contenido mostrado en la página web.</p>

                <h4>- Atributos del contenido (página web)</h4>
                <p>Este apartado sera visualizado en la pestaña de contenido, en la página web. Sera mostrado en su pestaña correspondiente, ya sean videos, infografías, etc. Los atributos mostrados son los siguientes:</p>

                <ul>
                  <li>Imágen</li>
                  <li>Titulo</li>
                  <li>Fecha</li>
                  <li>Descripción (breve)</li>
                </ul>

                <small>Nota: La fecha es generada de manera automáticamente al añadir una nueva categoria.</small>

                <h4 class="mt-3">- Formulario</h4>
                <p>Cada campo del formulario reprsenta al valor mostrado en la página web, por lo que se tiene que ser muy especifico y exacto al momento de llenar cada uno (principalmente en el campo de tipo de contenido alojado). El campo de lengua, estos son cargados de los campos añadidos previamente en su pestaña correspondiente, por lo que, si se necesita añadir otro lenguaje que no aparece, se debe de hacer en su apartado.</p>

                <p>En el campo de titulo se ingresa el titulo o nombre de la categoría, esta es la que servirá de referencia para añadir contenido a dicha categoría, así que, poner mucha atención a este campo porque es el más importante, además del tipo de contenido alojado y lengua.</p>

                <p>En el campo llamado tipo de contenido alojado se pondra como su nombre lo dice, el contenido que alojara dicha categoria. Si la categoría alojara infografías en la lengua chol, se debe de poner en el campo Infografía y en el campo de lengua, la lengua correspondiente.</p>

                <small>Nota: En caso de haber una equivocación, en la pagina de incio del administrador se muestra todo el contenido en formato de tabla, donde se puede editar y/o eliminar.</small>
            </section>
    
            <section class="col-sm-12 col-md-6 col-lg-6">
                <form class="shadow-sm p-3 mb-5 bg-body-tertiary rounded" action="auth-categoria" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titulo</label>
                      <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Imágen (IMG/JPG/PNG)</label>
                        <input class="form-control" name="archivo" type="file" id="formFile" required>
                      </div>
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Contenido alojado</label>
                        <select name="tipo" class="form-select" required>
                          <option selected>Seleccionar</option>
                          <option value="Video">Video</option>
                          <option value="Infografia">Infografía</option>
                        </select>
                      </div>
                      <select class="form-select mb-3" name="temaId" aria-label="Default select example" required>
                        <option selected>Tema</option>
                        <?php
                          $resultado=Tema::obtenerTemas($conectar);
                          foreach ($resultado as $registro) {
                            
                              $tema->setId($registro['id']);
                              $tema->setNombre($registro['nombre']);
                            ?>
                            <option value="<?php echo $tema->getId();?>"><?php echo $tema->getNombre();?></option>
                          <?php } ?>
                      </select>
                      <select class="form-select mb-3" name="lenguaId" aria-label="Default select example" required>
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
                    <button type="submit" name="subir" class="btn btn-primary">Subir</button>
                    
                    <div class="mt-3">
                    <?php
                      if (isset($_GET['msj'])) {
                        $alerta = urldecode($_GET['msj']);
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