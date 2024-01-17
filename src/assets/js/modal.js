const form = document.querySelector('#formEditar');

document.querySelector("#tabla").addEventListener('click', (e) => {
    obtenerId(e);
})

function obtenerId(e) {

    limpiarHTML();

    if (e.target.classList.contains('btnEditar')) {
        
        const id = e.target.getAttribute('data-id');

        const inputHTML = document.createElement('input');
        inputHTML.setAttribute('readonly', 'true');
        inputHTML.setAttribute('hidden', 'true');
        inputHTML.setAttribute('name', 'id')
        inputHTML.value = id;
        
        form.appendChild(inputHTML);
    }
}

function limpiarHTML() {
    while (form.firstChild) {
        form.removeChild(form.firstChild);
    }
}