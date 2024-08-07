const lengua = document.querySelectorAll('.traduccion');
const txtLengua = document.querySelector('#txt-eclipse');

lengua.forEach( item => {
    item.addEventListener('click', mostrarTexto);
})

//Este documento es encargado de las traducciones de la seccion de Que-es//

function mostrarTexto(e) {
    e.preventDefault();
    lenguaNombre = e.target.textContent;

    if (lenguaNombre === "Español") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'Ciencia abierta. Comunicación del conocimiento es una plataforma digital que tiene contenidos científicos, culturales y humanísticos, con perspectiva de género y acceso a la información dirigida a las personas hablantes de Tseltal, Tsotsil, CHol, Tojol-abal y Zoque. \n Dos instituciones -El Centro de Estudios para el Desarrollo Municipal y Políticas Públicas de la Universidad Autónoma de Chiapas (CEDES-UNACH) y la Dirección de Comunicación del Conocimiento de la Universidad Autónoma Metropolitana (DCC-UAM) hacen sinergia con el Departamento de Atención a Grupos Étnicos del Instituto Chiapaneco de Educación para Jóvenes y Adultos (DAGE-ICHEJA) para generar productos audiovisuales con contenido traducido e interpretado, de manera especializada, a fin de comunicar el conocimiento a la comunidad chiapaneca.';
        return
    }
    
    if (lenguaNombre === "CH'ol") {
        txtLengua.textContent = '';
        txtLengua.textContent = 'x';
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

