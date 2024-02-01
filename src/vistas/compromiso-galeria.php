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

    // Check if the album name has changed
    if ($currentAlbum != $registro['nombre_album']) {
        // Print the album name if it has changed
        if ($currentAlbum !== null) {
            echo '</div>'; // Close the previous album's div
            echo '<p class="descripcion">' . $currentDescripcion . '</p>';
        }
        echo '<h1 id="titulo_galeria" class="titulo_galeria">' . $registro['nombre_album'] . '</h1>';
        echo '<div class="gallery" onclick="openLightbox(event)">';
        $currentAlbum = $registro['nombre_album'];
        $currentDescripcion = $registro['descripcion']; // Save the current album's description
    }

    // Print the photo for the current album
    echo '<img src="src/assets/multimedia/img/' . $registro['archivo'] . '" alt="Image 1">';
}

// Close the last album's div and display the last album's description
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