const lengua = document.querySelectorAll('.traduccion');
const txtLengua = document.querySelector('#txt-eclipse');

lengua.forEach( item => {
    item.addEventListener('click', mostrarTexto);
})

//esta pagina es encargado de las traducciones de la seccion de compromiso social//

function mostrarTexto(e) {
    e.preventDefault();
    lenguaNombre = e.target.textContent;

    if (lenguaNombre === "Español") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Se busca el acercamiento de la información con transparencia y acceso a la información en beneficio de las comunidades en su contexto sociocultural, étnico y geográfico que conforman el Estado de Chiapas; especialmente dirigido a grupos sub-representados y vulnerables, a fin de contribuir al desarrollo municipal, estatal y regional con un enfoque nacional e internacional.';
        return
    }
    
    if (lenguaNombre === "CH'ol") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'z';
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

