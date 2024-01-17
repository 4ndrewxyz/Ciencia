const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', function() {
    if (body.classList.contains('cuerpo')) {
      if (window.scrollY >= 80 && navbar.classList.contains('color')) {
        navbar.classList.remove('color');
        navbar.classList.add('navbar-scrolled-eclipse');
      }
      else if(this.window.scrollY < 80 && navbar.classList.contains('navbar-scrolled-eclipse')) {
        navbar.classList.remove('navbar-scrolled-eclipse');
        navbar.classList.add('color');
      }
    }
    else {
      if (window.scrollY >= 80 || navbar.classList.contains('bg-color') || navbar.classList.contains('color')) {
        navbar.classList.remove('color');
        navbar.classList.add('bg-color');
        navbar.classList.remove('bg-color');
        navbar.classList.add('navbar-scrolled');
      }
      else if(this.window.scrollY < 80 || navbar.classList.contains('navbar-scrolled') || navbar.classList.contains('navbar-scrolled-eclipse')) {
        navbar.classList.remove('navbar-scrolled-eclipse');
        navbar.classList.add('navbar-scrolled');
        navbar.classList.remove('navbar-scrolled');
        navbar.classList.add('bg-color');
      }
    }
  });