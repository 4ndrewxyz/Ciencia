const lengua = document.querySelector('#select_lengua');
const categoriaInput = document.querySelector('#select_categoria');

lengua.addEventListener('input', (e) => {
    const id = e.target.value;

    fetchDataById(id);
})

const apiUrl = 'http://localhost/Alansnow/Ciencia/categorias'; // Reemplaza esta URL con la URL de tu API

function fetchDataById(id) {
  const url = `${apiUrl}/${id}`;

  fetch(url)
    .then(response => {
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      return response.json();
    })
    .then(data => {
      // Aquí puedes manejar los datos que obtuviste de la API
      mostrarHTML(data);
    })
    .catch(error => {
      // Manejo de errores en caso de que la petición falle
      mostrarError();
    });
}

function mostrarHTML(data) {

    limpiarHTML();

        data.map( datos => {
            const categoriaOpcion = document.createElement('option');
            categoriaOpcion.value = datos.id;
            categoriaOpcion.textContent = `${datos.titulo} - ${datos.tipo}`;
            categoriaInput.appendChild(categoriaOpcion);
            
        })

}

function mostrarError() {

    limpiarHTML();

    const noResultados = document.createElement('option');
    noResultados.textContent = 'Sin resultados';
    categoriaInput.appendChild(noResultados);
}

function limpiarHTML() {
    while (categoriaInput.firstChild) {
        categoriaInput.removeChild(categoriaInput.firstChild);
    }
}