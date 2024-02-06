<?php
 use Alansnow\Ciencia\modelo\Tema;
 use Alansnow\Ciencia\config\Conexion;
 use Alansnow\Ciencia\modelo\Fotos;
 $conectar = new Conexion();
 $tema = new Tema();  
 $fotos=new Fotos();
 $conectar=new Conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compromiso social</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/galeria.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/traduccion.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<header id="header" class="header">
        <div id="header-eclipse" class="nada"></div>
        <div id="header-contenido" class="header-content">
          <h1 class="text-center que-t">Galería</h1>
          <p class="text-center que-es">Ciencia abierta. Comunicación del conocimiento</p>        </div>
      </header>



      <?php
$resul = $fotos->obtenerFotos($conectar);
$currentAlbum = null;

foreach ($resul as $registro) {
    $fotos->setId($registro['id']);

    // Checa si cambio el nombre del album
    if ($currentAlbum != $registro['nombre_album']) {
        // Imprime el nombre del album si cambio
        if ($currentAlbum !== null) {
            echo '</div>'; // Cierra la seccion del album
            echo '<p class="descripcion">' . $currentDescripcion . '</p>';
        }
        echo '<h1 id="titulo_galeria" class="titulo_galeria">' . $registro['nombre_album'] . '</h1>';
        echo '<div class="gallery ' . str_replace(' ', '_', $registro['nombre_album']) . '" onclick="openLightbox(event, \'' . $registro['nombre_album'] . '\')">';
        $currentAlbum = $registro['nombre_album'];
        $currentDescripcion = $registro['descripcion']; // Guarda la descripcion actual
    }

    // Imprime foto del album actual
    echo '<img src="src/assets/multimedia/img/' . $registro['archivo'] . '" alt="Image 1" data-album="' . $registro['nombre_album'] . '">';
}

// Cierra la ultima seccion de album, con la descripcion
if ($currentAlbum !== null) {
    echo '</div>';
    echo '<p class="descripcion">' . $currentDescripcion . '</p>';
}
?>
      




    
    <!-- Lightbox container -->
    <div id="lightbox">
        <!-- Close button -->
        <span id="close-btn" onclick="closeLightbox()">&times;</span>

        <!-- Main lightbox image -->
        <img id="lightbox-img" src="" alt="lightbox image">

        <!-- Thumbnails container -->
        <div id="thumbnail-container">
            <!-- Thumbnails will be added dynamically using JavaScript -->
        </div>

        <!-- Previous and Next buttons -->
        <button id="prev-btn" onclick="changeImage(-1)">&lt;Anterior</button>
        <button id="next-btn" onclick="changeImage(1)">Siguiente &gt;</button>
    </div>


<?php include 'footer.php'; ?>
    
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
      <script src="src/assets/js/navbar.js"></script>
      <script src="src/assets/js/galeria.js"></script>
      <script src="src/assets/js/eclipseSeccion.js"></script>
      <script src="src/assets/js/contenidoSecciones3.js"></script>
</body>
</html>