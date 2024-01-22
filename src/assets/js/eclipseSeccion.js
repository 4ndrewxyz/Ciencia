// Obteniendo los elementos HTML en base a su id, para almacenarlos en variables
const btnEclipse = document.querySelector('#eclipse');
const nav = document.querySelector('#nav');
const btnModo = document.querySelector('#btnModo');
const menuUno = document.querySelector('#menu-1');
const menu = document.querySelector('#menu');
const menuDos = document.querySelector('#menu-2');
const listaUno = document.querySelector('#item-1');
const listaDos = document.querySelector('#item-2');
const listaTres = document.querySelector('#item-3');
const listaCinco = document.querySelector('#item-5');
const listaCuatro = document.querySelectorAll('#item-4');
const header = document.querySelector('#header');
const headEclipse = document.querySelector('#header-eclipse');
const headerContenido = document.querySelector('#header-contenido');
const carouselUno = document.querySelector('#carousel');
const carouselDos = document.querySelector('#carousel-2');
const footer = document.querySelector('#footer');
const titulo =document.querySelector('#titulo');
const txtEclipse = document.querySelector('#txt-eclipse');
const traducciones = document.querySelector('#traducciones');
const traduccion = document.querySelector('#traduccion');
const traduccionDos = document.querySelector('#traduccion-2');
const traduccionTres = document.querySelector('#traduccion-3');
const traduccionCuatro = document.querySelector('#traduccion-4');
const traduccionCinco = document.querySelector('#traduccion-5');
const gallery = document.querySelector('#titulo_galeria');
let body = document.body;

// Función para cambiar el modo a "Normal" o "Eclipse"
function cambiarModo(modo) {
  if (modo === 'Eclipse') {
    body.classList.add('cuerpo');
    nav.classList.remove('bg-color');
    nav.classList.add('nav-color');
    btnModo.classList.remove('nav-5');
    btnModo.classList.add('nav-cinco');
    menuUno.classList.remove('menu')
    menuUno.classList.add('menuEclipse');
    menu.classList.remove('menu');
    menu.classList.add('menuEclipse');
    menuDos.classList.remove('menu');
    menuDos.classList.add('menuEclipse');
    listaUno.classList.add('menuItem');
    listaDos.classList.add('menuItem');
    listaTres.classList.add('menuItem');
    listaCinco.classList.add('menuItem');
    listaCuatro.forEach(lista => {
      lista.classList.add('menuItem');
    })
    nav.classList.remove('navbar-black');
    nav.classList.add('navbar-eclipse');
    header.classList.remove('header');
    headEclipse.classList.remove('nada');
    header.classList.add('header-nuevo');
    headEclipse.classList.add('header-eclipse');
    headerContenido.classList.remove('header-content');
    headerContenido.classList.add('header-contenido');
    footer.classList.remove('foot-ctn');
    footer.classList.add('foot-ctn-eclipse');
    txtEclipse.classList.add('p-eclipse');
    titulo.classList.remove('titulo');
    titulo.classList.add('titulo-eclipse');
    traducciones.classList.remove('traducciones');
    traducciones.classList.add('traducciones-eclipse');
    traduccion.classList.remove('traduccion');
    traduccion.classList.add('traduccion-eclipse');
    traduccionDos.classList.add('traduccion-eclipse');
    traduccionTres.classList.add('traduccion-eclipse');
    traduccionCuatro.classList.add('traduccion-eclipse');
    traduccionCinco.classList.add('traduccion-eclipse');
    cambiarEclipse();
  } else if (modo === 'Normal') {
    body.classList.remove('cuerpo');
    nav.classList.add('bg-color');
    nav.classList.remove('nav-color');
    btnModo.classList.add('nav-5');
    btnModo.classList.remove('nav-cinco');
    menu.classList.add('menu');
    menu.classList.remove('menuEclipse');
    menuUno.classList.remove('menuEclipse');
    menuUno.classList.add('menu');
    menuDos.classList.add('menu');
    menuDos.classList.remove('menuEclipse');
    listaUno.classList.remove('menuItem');
    listaDos.classList.remove('menuItem');
    listaTres.classList.remove('menuItem');
    listaCinco.classList.remove('menuItem');
    listaCuatro.forEach(lista => {
      lista.classList.remove('menuItem');
    })
    nav.classList.add('navbar-black');
    nav.classList.remove('navbar-eclipse');
    header.classList.add('header');
    headEclipse.classList.add('nada');
    header.classList.remove('header-nuevo');
    headEclipse.classList.remove('header-eclipse');
    headerContenido.classList.add('header-content');
    headerContenido.classList.remove('header-contenido');
    footer.classList.add('foot-ctn');
    footer.classList.remove('foot-ctn-eclipse');
    txtEclipse.classList.remove('p-eclipse');
    traducciones.classList.add('traducciones');
    titulo.classList.remove('titulo-eclipse');
    titulo.classList.add('titulo');
    traducciones.classList.remove('traducciones-eclipse');
    traduccion.classList.add('traduccion');
    traduccion.classList.remove('traduccion-eclipse');
    traduccionDos.classList.remove('traduccion-eclipse');
    traduccionTres.classList.remove('traduccion-eclipse');
    traduccionCuatro.classList.remove('traduccion-eclipse');
    traduccionCinco.classList.remove('traduccion-eclipse');
    cambiarNormal();
  }
}

// Función para cambiar el texto del botón a "Normal"
function cambiarNormal() {
  limpiarHTML();

  const textoEclipse = document.createElement('span');
  textoEclipse.textContent = 'Normal';
  btnEclipse.appendChild(textoEclipse);
}

// Función para cambiar el texto del botón a "Eclipse"
function cambiarEclipse() {
  limpiarHTML();

  const modoEclipse = document.createElement('span');
  modoEclipse.textContent = 'Eclipse';
  btnEclipse.appendChild(modoEclipse);
}

// Función para limpiar el contenido del botón
function limpiarHTML() {
  while (btnEclipse.firstChild) {
    btnEclipse.removeChild(btnEclipse.firstChild);
  }
}

// Función para obtener el modo actual desde el localStorage
function obtenerModoActual() {
  return localStorage.getItem('modo') || 'Normal';
}

// Función para guardar el modo actual en el localStorage
function guardarModoActual(modo) {
  localStorage.setItem('modo', modo);
}

// Obtener el modo actual del localStorage y aplicarlo al cargar la página
const modoActual = obtenerModoActual();
cambiarModo(modoActual);

// Función para manejar el evento del botón de eclipse
function manejarBotonEclipseClick() {
  let modo = document.querySelector('#eclipse').textContent;
  if (modo === 'Eclipse') {
    cambiarModo('Normal');
  } else if (modo === 'Normal') {
    cambiarModo('Eclipse');
  }

  // Obtener el modo actual y guardarlo en el localStorage
  modo = document.querySelector('#eclipse').textContent;
  guardarModoActual(modo);
}

btnEclipse.addEventListener('click', manejarBotonEclipseClick);