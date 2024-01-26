<?php

use Alansnow\Ciencia\controlador\AdminCategoria;
use Alansnow\Ciencia\controlador\LineaTiempo;
use Alansnow\Ciencia\controlador\Menu;
use Alansnow\Ciencia\controlador\prueba;
use Alansnow\Ciencia\controlador\SeccionQEs;
use Alansnow\Ciencia\controlador\Objetivo;
use Alansnow\Ciencia\controlador\Admin;
use Alansnow\Ciencia\controlador\CompromisoSocial;
use Alansnow\Ciencia\controlador\Videos;
use Alansnow\Ciencia\controlador\Infografias;
use Alansnow\Ciencia\controlador\VistaContenido;
use Alansnow\Ciencia\controlador\AdminContenido;
use Alansnow\Ciencia\controlador\AdminLenguas;
use Alansnow\Ciencia\controlador\AdminTemas;
use Alansnow\Ciencia\controlador\Directorio;
use Alansnow\Ciencia\controlador\vistaMarco;
use Alansnow\Ciencia\controlador\MarcoLegal;
use Alansnow\Ciencia\controlador\CompromisoGaleria;
use Alansnow\Ciencia\controlador\TablaAlbums;
use Alansnow\Ciencia\controlador\AdminFotos;

$router = new \Bramus\Router\Router();


$router->get('/', function() {
    $menu=new Menu();
    $menu->inicio();
});

$router->get('/que-es', function() {
    $queEs=new SeccionQEs();
    $queEs->queEs();
});

$router->get('/marco-legal', function() {
   $MarcoLegal=new MarcoLegal();
   $MarcoLegal->vistaMarco();
});

$router->get('/objetivo', function() {
   $objetivo=new Objetivo();
   $objetivo->objetivo();
});


$router->get('/compromiso-social', function() {
   $compromiso=new CompromisoSocial();
   $compromiso->compromisoVista();
});

$router->get('/compromiso-galeria', function() {
   $galeria=new CompromisoGaleria();
   $galeria->galeriaVista();
});

$router->get('/linea-del-tiempo', function() {
   $linea = new LineaTiempo();
   $linea->vistaLinea();
});

$router->get('/directorio', function() {
   $directorio = new Directorio();
   $directorio->vistaDirectorio();
});

$router->get('/videos/{id}', function($id) {
   $videos=new Videos();
   $videos->videosVista(['id' => $id]);
});

$router->get('/infografias/{id}', function($id) {
   $info=new Infografias();
   $info->infoVista(['id' => $id]);
});

$router->get('/contenido/{id}', function($id) {
   $contenido=new VistaContenido();
   $contenido->contenidoVista(['id' => $id]);
});

$router->get('/doc/{id}', function($id) {
   $con=new VistaContenido();
   $con->contenidoIdVista(['id' => $id]);
});

$router->get('/tema/{id}', function($id) {
   $adminTemas = new AdminTemas();
   $adminTemas->vistaTemas(['id' => $id]);
});

$router->get('/login', function() {
    $admin=new Admin();
    $admin->login();
 });

 $router->post('/autenticar', function() {
    $admin=new Admin();
    $admin->autenticar($_POST);
 });

 $router->get('/administrador', function() {
   $admin=new Admin();
   $admin->menuAdmin();
}); 

$router->get('agregar-contenido', function() {
   $contenido=new AdminContenido();
   $contenido->adminContenido();
}); 

$router->get('agregar-lenguas', function() {
   $adminLenguas=new AdminLenguas();
   $adminLenguas->adminLenguas();
}); 

$router->get('agregar-categoria', function() {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->categoriaVista();
});

$router->get('agregar-temas', function() {
   $adminTemas=new AdminTemas();
   $adminTemas->adminTemas();
});

$router->get('agregar-album', function() {
   $TablaAlbums=new TablaAlbums();
   $TablaAlbums->adminAlbums();
});

$router->get('agregar-fotos', function() {
   $adminFotos=new AdminFotos();
   $adminFotos->adminFotos();
});

$router->get('tabla-albums', function() {
   $TablaAlbums=new TablaAlbums();
   $TablaAlbums->tablaAlbums();
});

$router->get('tabla-categoria', function() {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->tablaCategoria();
});

$router->get('tabla-contenido', function() {
   $adminContenido=new AdminContenido();
   $adminContenido->tablaContenido();
});

$router->get('tabla-lenguas', function() {
   $adminLenguas=new AdminLenguas();
   $adminLenguas->tablaLenguas();
});

$router->get('tabla-temas', function() {
   $adminTemas = new AdminTemas();
   $adminTemas->tablaTemas();
});

$router->post('auth-lengua', function() {
   $adminLenguas=new AdminLenguas();
   $adminLenguas->agregarLenguas($_POST);
});

$router->post('auth-categoria', function() {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->agregarCategorias($_POST,$_FILES);
});

$router->post('auth-contenido', function() {
   $adminContenido=new AdminContenido();
   $adminContenido->agregarContenido($_POST,$_FILES);
});

$router->post('auth-album', function() {
   $TablaAlbums=new TablaAlbums();
   $TablaAlbums->agregarAlbum($_POST);
});

$router->post('auth-fotos', function() {
   $AdminFotos=new AdminFotos();
   $AdminFotos->agregarFotos($_POST, $_FILES);
});

$router->post('auth-tema', function() {
   $adminTemas = new AdminTemas();
   $adminTemas->agregarTemas($_POST);
});

$router->post('editar-categoria', function() {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->editarCategoria($_POST,$_FILES);
});

$router->post('editar-contenido', function() {
   $adminContenido=new AdminContenido();
   $adminContenido->editarContenido($_POST,$_FILES);
});

$router->post('editar-lenguas', function() {
   $adminLenguas=new AdminLenguas();
   $adminLenguas->editarLenguas($_POST);
});

$router->post('editar-albums', function() {
   $TablaAlbums=new TablaAlbums();
   $TablaAlbums->editarAlbums($_POST);
});

$router->post('editar-temas', function() {
   $adminTemas = new AdminTemas();
   $adminTemas->editarTema($_POST);
});

$router->get('eliminar-album/{id}', function($id) {
   $TablaAlbums=new TablaAlbums();
   $TablaAlbums->eliminarAlbum(['id' => $id]);
});

$router->get('eliminar-categoria/{id}', function($id) {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->eliminarCategoria(['id' => $id]);
});

$router->get('eliminar-contenido/{id}', function($id) {
   $adminContenido=new AdminContenido();
   $adminContenido->eliminarContenido(['id' => $id]);
});

$router->get('eliminar-lenguas/{id}', function($id) {
   $adminLenguas=new AdminLenguas();
   $adminLenguas->eliminarLenguas(['id' => $id]);
});

$router->get('eliminar-temas/{id}', function($id) {
   $adminTemas = new AdminTemas();
   $adminTemas->eliminarTema(['id' => $id]);
});

$router->get('/salir', function() {
   $admin=new Admin();
   $admin->cerrarSesion();
});

$router->get('/categorias/{id}', function($id) {
   $adminCategoria=new AdminCategoria();
   $adminCategoria->obtenerCategorias(['id' => $id]);
});

$router->get('/prueba', function() {
   $prueba=new Prueba();
   $prueba->vistaPrueba();
});

 $router->before('GET', '/administrador', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/agregar-categoria', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/agregar-contenido', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/agregar-lenguas', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/agregar-temas', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/tabla-categoria', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/tabla-contenido', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/tabla-lenguas', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/tabla-temas', function() {
   session_start();
   if (!isset($_SESSION['usuario'])) {
       header('location:login');
       exit();
   }
});

$router->before('GET', '/login', function() {
   session_start();
      if (isset($_SESSION['usuario'])) {
         header('location:administrador');
         exit();
      }
});

$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo "Página no encontrada";
});



$router->run();