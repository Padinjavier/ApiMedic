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