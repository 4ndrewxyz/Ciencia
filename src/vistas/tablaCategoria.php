<?php

  use Alansnow\Ciencia\modelo\Categoria;
  use Alansnow\Ciencia\modelo\Lenguas;
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $categoria=new Categoria();
  $lengua=new Lenguas();
  $tema = new Tema();
  $conectar=new Conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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

    <h2 class="text-center mb-5">Tabla categoría</h2>
    <div class="mt-3">
                    <?php
                      if (isset($_GET['msj'])) {
                        $alerta = urldecode($_GET['msj']);
                        ?>
                        <p class="text-center"><?php echo $alerta; ?></p>
                        <?php }?>
                        
                    </div>
      <section>
      <div class="card">
  <div class="card-body">
  <div class="table-responsive">
                    <table class="table" id="tabla">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Descripción</th>
      <th scope="col">Imágen</th>
      <th scope="col">Categoría</th>
      <th scope="col">Tema</th>
      <th scope="col">Lengua</th>
      <th scope="col">Usuario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $resul=$categoria->obtenerTodos($conectar);
      foreach ($resul as $registro) {
        $categoria->setId($registro['id']);
        $categoria->setTitulo($registro['titulo']);
        $categoria->setFecha($registro['fecha']);
        $categoria->setDescripcion($registro['descripcion']);
        $categoria->setArchivo($registro['archivo']);
        $categoria->setTipo($registro['tipo']);
        $temas=$registro['tema'];
        $lenguas=$registro['nombre'];
        $usuario=$registro['usuario'];
      
    ?>
    <tr>
      <td><?php echo $categoria->getTitulo(); ?></td>
      <td><?php echo $categoria->getFecha(); ?></td>
      <td><?php echo $categoria->getDescripcion(); ?></td>
      <td><?php echo $categoria->getArchivo(); ?></td>
      <td><?php echo $categoria->getTipo(); ?></td>
      <td><?php echo $temas; ?></td>
      <td><?php echo $lenguas; ?></td>
      <td><?php echo $usuario; ?></td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button data-id="<?php echo $categoria->getId(); ?>" id="btnEditar" type="button" class="btn btn-primary btnEditar" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Editar
      </button>
      <a href="eliminar-categoria/<?php echo $categoria->getId(); ?>" type="button" class="btn btn-primary">Eliminar</a>
      </div> 
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
                    </div>
  </div>
</div>
      </section>
    </main>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="editar-categoria" method="post" enctype="multipart/form-data">
          <div id="formEditar"></div>
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
                      <select class="form-select mb-3" name="tema_id" aria-label="Default select example" required>
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
                      <select class="form-select mb-3" name="lengua_id" aria-label="Default select example" required>
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
                    <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
                    
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script src="src/assets/js/bootstrap.bundle.min.js"></script>
<script src="src/assets/js/modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> 

<script>
      $(document).ready( function () {
        let tablaDos =document.querySelector('#tabla');
        
        $(tablaDos).DataTable();
      });
    </script>

</body>
</html>