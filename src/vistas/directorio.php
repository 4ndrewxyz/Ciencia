<?php
  use Alansnow\Ciencia\modelo\Tema;
  use Alansnow\Ciencia\config\Conexion;

  $conectar = new Conexion();
  $tema = new Tema();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/assets/css/estilos.css">
    <link rel="stylesheet" href="src/assets/css/traduccion.css">
    <link rel="stylesheet" href="src/assets/css/btnSubir.css">
    <link rel="stylesheet" href="src/assets/css/directorio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" 
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';?>

      <header id="header" class="header">
        <div id="header-eclipse" class="nada"></div>
        <div id="header-contenido" class="header-content">
          <h1 class="text-center que-t">Comité creador</h1>
          <p class="text-center que-es">Ciencia abierta. Comunicación del conocimiento</p>        </div>
      </header>

      <main class="container seccion-ctn">
        <h3 id="txt-directorio" class="text-center mb-3">
              Equipo colaborativo del proyecto
        </h3>

        <h4 id="txt-directorio" class="text-center mb-5">Universidad Autónoma de Chiapas</h4>
        <section class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="ctn-dir">
                  <img src="src/assets/img/doctora_andrea.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Dra. Andrea Mena Álvarez</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Coordinadora General del CEDES</small>
                    </div>
                    <div>
                    <small id="" class="">andrea.mena@unach.mx</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                  <div class="ctn-dir">
                  <img src="src/assets/img/rocio22.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Mtra. Rocío Aguilar Sánchez</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Creadora del proyecto Ciencia Abierta para la Comunicación del Conocimiento</small>
                    </div>
                    <div>
                    <small id="" class="">rocio.aguilar@unach.mx</small>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="ctn-dir">
                  <img src="src/assets/img/alan_img.jpg" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Alan de Jesús Gómez Vera</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Desarrollador del proyecto Ciencia Abierta para la Comunicación del Conocimiento</small>
                    </div>
                    <div>
                    <small id="" class="">correo</small>
                    </div>
                  </div>
                </div>
              </div>
      </section>
      <h4 id="txt-directorio" class="text-center mb-5">Instituto Chiapaneco de Educación para Jóvenes y Adultos</h4>
      <section class="row">
      <div class="col-sm-12 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                  <div class="ctn-dir">
                  <img src="src/assets/img/alejandro_venegas.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Mtro. Alejandro Venegas Becerra</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Jefe del Departamento de Atención a Grupos Étnicos (DAGE) ICHEJA</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">correo</small>
                    </div>
                  </div>
                </div>
              </div>
      </section>
      
      <h4 id="txt-directorio" class="text-center mb-5">Universidad Autónoma Metropolitana</h4>
      <section class="row">
      <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="ctn-dir">
                  <img src="src/assets/img/MARIO.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Mario Andrés De Leo Winkler</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Director de Comunicación del Conocimiento</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">madeleowinkler@correo.uam.mx</small>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="ctn-dir">
                  <img src="src/assets/img/MIRIAM.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Miriam Carrillo Barragán</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Creadora del proyecto Ciencia Abierta para la Comunicación del Conocimiento</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">mcarrillo@correo.uam.mx</small>
                    </div>
                  </div>
                </div>
              </div>
      </section>

      <h4 id="txt-directorio" class="text-center mb-5">Agradecimientos</h4>
      <section class="row">
      <div class="col-sm-12 d-flex justify-content-center">
                <div id="card-categoria" class="card card-id card-principal shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                <div class="ctn-dir">
                  <img src="src/assets/img/rocio22.png" class="img-directorio card-img-top" alt="...">
                  <div class="logos-dir">
                  <a href="https://www.facebook.com/unachcedes/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="logo-dir" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
            </a>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="mb-3">
                      <small id="txt-card" class="">Enrique Zea</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">Universidad Autónoma de Chiapas</small>
                    </div>
                    <div class="mb-3">
                    <small id="" class="">correo</small>
                    </div>
                  </div>
                </div>
              </div>
      </section>
      </main>

      <button id="btn-subir" class="btn-subir-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi-caret-up-fill" viewBox="0 0 16 16">
          <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
        </svg>
      </button>

<?php include 'footer.php';?>
      
      <script src="src/assets/js/bootstrap.bundle.min.js"></script>
      <script src="src/assets/js/navbar.js"></script>
      <script src="src/assets/js/eclipseContenido.js"></script>
      <script src="src/assets/js/btnSubir.js"></script>
      <script src="src/assets/js/contenidoSecciones.js"></script>
</body>
</html>