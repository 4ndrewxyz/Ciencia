// Obteniendo los elementos HTML en base a su id, para almacenarlos en variables
const btnEclipse = document.querySelector('#eclipse');
const nav = document.querySelector('#nav');
const btnModo = document.querySelector('#btnModo');
const menu = document.querySelectorAll('#menu');
const listaUno = document.querySelector('#item-1');
const listaDos = document.querySelector('#item-2');
const listaTres = document.querySelector('#item-3');
const listaCinco = document.querySelector('#item-5');
const listaCuatro = document.querySelectorAll("#item-4");
const header = document.querySelector('#header');
const headerContenido = document.querySelector('#header-contenido');
const carouselUno = document.querySelector('#carousel');
const carouselDos = document.querySelector('#carousel-2');
const txtCarousel = document.querySelector('#texto-carousel');
const txtGrilla = document.querySelector('#texto-grilla');
const footer = document.querySelector('#footer');
const alerta = document.querySelector('#alerta-eclipse');
let body = document.body;

document.addEventListener('DOMContentLoaded', () => {
  btnEclipse.addEventListener('click', manejarBotonEclipseClick);
  
})

if (!localStorage.getItem('mensajeMostrado')) {
  
  setTimeout(() => {
    alerta.classList.remove('alerta-eclipse-none');
    alerta.classList.add('alerta-eclipse');
    
    const btnAlerta = document.querySelector('#okay');
    btnAlerta.addEventListener('click', (e) => {
      e.preventDefault();
      alerta.classList.remove('alerta-eclipse');
      alerta.classList.add('alerta-eclipse-none');
      
      localStorage.setItem('mensajeMostrado', 'true');
    });
  }, 3000);
}


// Función para cambiar el modo a "Normal" o "Eclipse"
function cambiarModo(modo) {
  if (modo === 'Eclipse') {
    alerta.classList.remove('alerta-eclipse');
    alerta.classList.add('alerta-eclipse-none');
    localStorage.setItem('mensajeMostrado', 'true');
    body.classList.add('cuerpo');
    nav.classList.remove('bg-color');
    nav.classList.add('nav-color-inicio');
    btnModo.classList.remove('nav-5');
    btnModo.classList.add('nav-cinco');
    menu.forEach(menu => {
      menu.classList.remove('menu');
    menu.classList.add('menuEclipse');
    })
    listaUno.classList.add('menuItem');
    listaDos.classList.add('menuItem');
    listaTres.classList.add('menuItem');
    listaCinco.classList.add('menuItem');
    listaCuatro.forEach(lista => {
      lista.classList.add('menuItem');
    })
    nav.classList.remove('navbar-black');
    nav.classList.add('navbar-eclipse');
    carouselUno.classList.remove('btn-carousel-uno');
    carouselUno.classList.add('carousel-eclipse-uno');
    carouselDos.classList.remove('btn-carousel-dos');
    carouselDos.classList.add('carousel-eclipse-dos');
    txtCarousel.classList.remove('txt-carousel');
    txtCarousel.classList.add('txt-carousel-eclipse');
    txtGrilla.classList.remove('txt-grilla');
    txtGrilla.classList.add('txt-grilla-eclipse');
    footer.classList.remove('foot-ctn');
    footer.classList.add('foot-ctn-eclipse');
    cambiarEclipse();
  } else if (modo === 'Normal') {
    body.classList.remove('cuerpo');
    nav.classList.add('bg-color');
    nav.classList.remove('nav-color-inicio');
    btnModo.classList.add('nav-5');
    btnModo.classList.remove('nav-cinco');
    menu.forEach(menu => {
      menu.classList.add('menu');
    menu.classList.remove('menuEclipse');
    })
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
    headerContenido.classList.add('header-content');
    headerContenido.classList.remove('header-contenido');
    carouselUno.classList.add('btn-carousel-uno');
    carouselUno.classList.remove('carousel-eclipse-uno');
    carouselDos.classList.add('btn-carousel-dos');
    carouselDos.classList.remove('carousel-eclipse-dos');
    txtCarousel.classList.add('txt-carousel');
    txtCarousel.classList.remove('txt-carousel-eclipse');
    txtGrilla.classList.add('txt-grilla');
    txtGrilla.classList.remove('txt-grilla-eclipse');
    footer.classList.add('foot-ctn');
    footer.classList.remove('foot-ctn-eclipse');
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
