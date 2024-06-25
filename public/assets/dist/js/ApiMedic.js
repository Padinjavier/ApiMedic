document.addEventListener('DOMContentLoaded', function() {
  const circles = document.querySelectorAll('.circle');
  const sidebar = document.querySelector('.main-sidebar.sidebar-dark-primary.elevation-4');
  const inicioNav = document.querySelector('nav.inicio');
  const progressBarNav = document.querySelector('nav.progress_bar');

  circles.forEach(circle => {
    circle.addEventListener('click', function() {
      if (sidebar) {
        sidebar.classList.toggle('d-none');
      }
    });
  });

  // Obtén la URL actual
  var currentUrl = window.location.pathname;

  // Obtén solo la última parte de la URL
  var urlSegments = currentUrl.split('/');
  var lastSegment = '/' + urlSegments[urlSegments.length - 1];
  console.log(lastSegment); // Esto debería imprimir '/paciente', '/bienvenida', etc.

  // Mapeo de URLs a los índices de las etapas
  var stepMap = {
    '/bienvenida': 0,
    '/paciente': 1,
    '/sintomas': 2,
    '/entrevistas': 3,
    '/resultados': 4
  };

  // Verifica si la URL termina en '/APIMEDIC/'
  if (currentUrl.endsWith('/ApiMedic/')) {
    if (inicioNav) {
      console.log(currentUrl.endsWith('/ApiMedic/'))
      inicioNav.classList.remove('d-none');
      progressBarNav.classList.add('d-none');
    }
    // if (progressBarNav) {
    //   progressBarNav.classList.add('d-none');
    //   inicioNav.classList.remove('d-none');
    // }
  }else{
    console.log(currentUrl.endsWith('/ApiMedic/'))
  
    progressBarNav.classList.remove('d-none');
    inicioNav.classList.add('d-none');
  }

  // Obtén el índice de la etapa actual
  var currentStepIndex = stepMap[lastSegment];

  // Verifica que la URL esté en el mapa
  if (currentStepIndex !== undefined) {
    // Selecciona todas las etapas y círculos
    var progressBar = document.querySelector('.progress-bar');

    // Marca todas las etapas anteriores y la actual como completadas
    for (var i = 0; i <= currentStepIndex; i++) {
      circles[i].classList.add('active');
      if (i !== 0) {
        circles[i].innerHTML = '<i class="bi bi-check-lg"></i>';
      }
    }

    // Actualiza el ancho de la barra de progreso
    progressBar.style.width = ((currentStepIndex + 1) * 25) + '%';
  }
});




function bienvenida(){
  const principal = document.querySelector('div.principal');
  principal.classList.add('d-none');

  const bienvenida = document.querySelector('div.bienvenida');
  bienvenida.classList.remove('d-none');

  const inicioNav = document.querySelector('nav.inicio');
  inicioNav.classList.add('d-none')

  const progressBarNav = document.querySelector('nav.progress_bar');
  progressBarNav.classList.remove('d-none')
}