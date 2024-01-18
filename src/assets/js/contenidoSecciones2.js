const lengua = document.querySelectorAll('.traduccion');
const txtLengua = document.querySelector('#txt-eclipse');

lengua.forEach( item => {
    item.addEventListener('click', mostrarTexto);
})
// Este documento es enacargado de las traducciones de la seccion objetivo//
function mostrarTexto(e) {
    e.preventDefault();
    lenguaNombre = e.target.textContent;

    if (lenguaNombre === "Español") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Impulsar el mejoramiento del nivel de desarrollo sustentable de los municipios de la entidad a través de contenidos científicos dirigido a los municipios, principalmente aquellos de menor índice de desarrollo humano.';
        return
    }
    
    if (lenguaNombre === "CH'ol") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'y';
        return
    }

    if (lenguaNombre === "Tojol-ab'al") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Contenido en lengua tojol';
        return
    }

    if (lenguaNombre === "Tseltal") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Contenido en lengua Tseltal';
        return
    }

    if (lenguaNombre === "Tsotsil") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Contenido en lengua Tsotsil';
        return
    }

    if (lenguaNombre === "Zoque") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Contenido en lengua zoque';
        return
    }
}

