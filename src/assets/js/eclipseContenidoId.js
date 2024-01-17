// Obteniendo los elementos HTML en base a su id, para almacenarlos en variables
const btnEclipse = document.querySelector('#eclipse');
const nav = document.querySelector('#nav');
const btnModo = document.querySelector('#btnModo');
const menu = document.querySelectorAll('#menu');
const listaUno = document.querySelector('#item-1');
const listaDos = document.querySelector('#item-2');
const listaTres = document.querySelector('#item-3');
const listaCinco = document.querySelector('#item-5');
const listaCuatro = document.querySelectorAll('#item-4');
const footer = document.querySelector('#footer');
const card = document.querySelector('#card-categoria');
const txtIcono = document.querySelector('#txt-icono');
const txtIconoDos = document.querySelector('#txt-icono-2');
const txtCard = document.querySelectorAll('#txt-card');
const cardOpciones = document.querySelectorAll('#card-opciones');
const mensajeError = document.querySelector('#mensaje-error');
let body = document.body;

// Función para cambiar el modo a "Normal" o "Eclipse"
function cambiarModo(modo) {
  if (modo === 'Eclipse') {
    body.classList.add('cuerpo');
    nav.classList.remove('bg-color');
    nav.classList.add('color');
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
    footer.classList.remove('foot-ctn');
    footer.classList.add('foot-ctn-eclipse');
    txtCard.forEach( txt => {
      txt.classList.remove('p-normal');
      txt.classList.add('p-eclipse');
    })
    cardOpciones.forEach( cards => {
      cards.classList.remove('card-secciones');
      cards.classList.add('card-secciones-eclipse');
    })
    if (mensajeError) {
      mensajeError.classList.add('msj-error-eclipse');
    }
    cambiarEclipse();
  } else if (modo === 'Normal') {
    body.classList.remove('cuerpo');
    nav.classList.add('bg-color');
    nav.classList.remove('color');
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
    footer.classList.add('foot-ctn');
    footer.classList.remove('foot-ctn-eclipse');
    txtCard.forEach( txt => {
      txt.classList.add('p-normal');
      txt.classList.remove('p-eclipse');
    })
    cardOpciones.forEach( card => {
      card.classList.add('card-secciones');
      card.classList.remove('card-secciones-eclipse');
    })
    if (mensajeError) {
      mensajeError.classList.remove('msj-error-eclipse');
    }
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