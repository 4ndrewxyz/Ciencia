const circuloUno = document.querySelector("#circulo-1");
const circuloDos = document.querySelector("#circulo-2");
const circuloTres = document.querySelector("#circulo-3");
const circuloCuatro = document.querySelector("#circulo-4");
const circuloCinco = document.querySelector("#circulo-5");
const modalUno = document.querySelector("#modal-uno");
const btnCerrar = document.createElement('button');

document.addEventListener('DOMContentLoaded', () => {
    circuloUno.addEventListener('click', () => modalUnoMostrar(circuloUno))
    circuloDos.addEventListener('click', () => modalUnoMostrar(circuloDos))
    circuloTres.addEventListener('click', () => modalUnoMostrar(circuloTres))
    circuloCuatro.addEventListener('click', () => modalUnoMostrar(circuloCuatro))
    circuloCinco.addEventListener('click', () => modalUnoMostrar(circuloCinco))
    btnCerrar.addEventListener('click', cerrarModal)
})

const modalUnoMostrar = (circulo) => {

    if (modalUno.classList.contains('modal-uno-hidden')) {
        modalUno.classList.remove("modal-uno-hidden");
    modalUno.classList.add("modal-uno-normal");
    completarModal(circulo);
    }
    else {
        modalUno.classList.remove("modal-uno-normal");
    modalUno.classList.add("modal-uno-hidden");
    }
}

const completarModal = (circulo) => {

    if (circulo === circuloUno) {
        limpiarHTML();
    
    const imagenModal = document.createElement('img');
    const textoModal = document.createElement('p');
    
    imagenModal.classList.add('img-mod');
    textoModal.classList.add('txt-modal');
    btnCerrar.classList.add('btn-modal');
    imagenModal.src = 'src/assets/img/Diseño sin título.png';
    textoModal.textContent = 'En este periodo estabamos planeando el proyecto...';
    btnCerrar.textContent = 'Cerrar';
    modalUno.appendChild(imagenModal);
    modalUno.appendChild(textoModal);
    modalUno.appendChild(btnCerrar);
    return;
    }

    if (circulo === circuloDos) {
        limpiarHTML();
    
        const imagenModalDos = document.createElement('img');
        const textoModal = document.createElement('p');
        imagenModalDos.classList.add('img-mod');
        textoModal.classList.add('txt-modal');
        btnCerrar.classList.add('btn-modal');
        imagenModalDos.src = 'src/assets/img/Diseño sin título.png';
        textoModal.textContent = 'Aqui ya estabamos desarrollando el proyecto...'
        btnCerrar.textContent = 'Cerrar';
        modalUno.appendChild(imagenModalDos);
        modalUno.appendChild(textoModal);
    modalUno.appendChild(btnCerrar);
        return; 
    }

    if (circulo === circuloTres) {
        limpiarHTML();
    
        const imagenModalDos = document.createElement('img');
        const textoModal = document.createElement('p');
        imagenModalDos.classList.add('img-mod');
        textoModal.classList.add('txt-modal');
        btnCerrar.classList.add('btn-modal');
        imagenModalDos.src = 'src/assets/img/Diseño sin título.png';
        textoModal.textContent = 'Estabamos a la mitad del desarrollo del micrositio'
        btnCerrar.textContent = 'Cerrar';
        modalUno.appendChild(imagenModalDos);
        modalUno.appendChild(textoModal);
    modalUno.appendChild(btnCerrar);
        return; 
    }

    if (circulo === circuloCuatro) {
        limpiarHTML();
    
        const imagenModalDos = document.createElement('img');
        const textoModal = document.createElement('p');
        imagenModalDos.classList.add('img-mod');
        textoModal.classList.add('txt-modal');
        btnCerrar.classList.add('btn-modal');
        imagenModalDos.src = 'src/assets/img/Diseño sin título.png';
        textoModal.textContent = 'Ya se estaban mandando a traducción los elementos...'
        btnCerrar.textContent = 'Cerrar';
        modalUno.appendChild(imagenModalDos);
        modalUno.appendChild(textoModal);
    modalUno.appendChild(btnCerrar);
        return; 
    }

    if (circulo === circuloCinco) {
        limpiarHTML();
    
        const imagenModalDos = document.createElement('img');
        const textoModal = document.createElement('p');
        imagenModalDos.classList.add('img-mod');
        textoModal.classList.add('txt-modal');
        btnCerrar.classList.add('btn-modal');
        imagenModalDos.src = 'src/assets/img/Diseño sin título.png';
        textoModal.textContent = 'Se estaba haciendo unos ajustes en el diseño'
        btnCerrar.textContent = 'Cerrar';
        modalUno.appendChild(imagenModalDos);
        modalUno.appendChild(textoModal);
    modalUno.appendChild(btnCerrar);
        return; 
    }
}

const cerrarModal = () => {
    modalUno.classList.remove("modal-uno-normal");
    modalUno.classList.add("modal-uno-hidden");
}

function limpiarHTML() {
    while (modalUno.firstChild) {
        modalUno.removeChild(modalUno.firstChild);
    }
}