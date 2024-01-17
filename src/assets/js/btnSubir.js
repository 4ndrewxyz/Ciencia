const btnSubir = document.querySelector('#btn-subir');

// Mostrar u ocultar el botón según el scroll
window.addEventListener('scroll', () => {
    if (window.scrollY >= 800) {
        btnSubir.classList.remove('btn-subir-none');
        btnSubir.classList.add('btn-subir');
    } else {
        if (window.scrollY < 800) {
            
            btnSubir.classList.remove('btn-subir');
            btnSubir.classList.add('btn-subir-none');
        }
    }
});

// Scroll suave al principio cuando se hace clic en el botón
btnSubir.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
