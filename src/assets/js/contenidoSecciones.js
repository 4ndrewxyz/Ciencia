const lengua = document.querySelectorAll('.traduccion');
const txtLengua = document.querySelector('#txt-eclipse');

lengua.forEach( item => {
    item.addEventListener('click', mostrarTexto);
})

function mostrarTexto(e) {
    e.preventDefault();
    lenguaNombre = e.target.textContent;
    
    if (lenguaNombre === "CH'ol") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Este es una prueba para el contenido en lengua CHol';
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

