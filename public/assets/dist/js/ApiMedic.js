document.addEventListener('DOMContentLoaded', function() {
    const circles = document.querySelectorAll('.circle');
    const sidebar = document.querySelector('.main-sidebar.sidebar-dark-primary.elevation-4');
  
    circles.forEach(circle => {
      circle.addEventListener('click', function() {
        if (sidebar) {
          sidebar.classList.toggle('d-none');
        }
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
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
  
    // Obtén el índice de la etapa actual
    var currentStepIndex = stepMap[lastSegment];
  
    // Verifica que la URL esté en el mapa
    if (currentStepIndex !== undefined) {
      // Selecciona todas las etapas y círculos
      var circles = document.querySelectorAll('.circle');
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
  