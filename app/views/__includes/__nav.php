<!-- ******** Navbar Top ******** -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light p-0" style="height: 20vh;">
  <!-- Left navbar links -->
  <ul class="navbar-nav h-100" style="width: 100%; display: flex; align-items: center;">
    <li class="nav-item h-100" style="    align-items: center;  display: flex;">
      <a class="nav-link h-100" data-widget="pushmenu" href="#" style="display: flex;
    align-items: center;
    justify-content: flex-end;">
        <img src="<?= ASSETS ?>/dist/img/LOGO.png" alt="" role="button" class="w-50">
      </a>
    </li>
    <li class="nav-item h-100" style="flex-grow: 1; display: flex; align-items: center; justify-content: center;">
      <!-- Progress Bar -->
      <div class="progress-container" style="position: relative; width: 100%; max-width: 700px; ">
        <div class="progress">
          <div class="progress-bar" role="progressbar" "></div>
        </div>
        <div class="circle active" style="left: 0;"><i class="bi bi-check-lg"></i></div>
        <div class="circle" style="left: 25%;">2</div>
        <div class="circle" style="left: 50%;">3</div>
        <div class="circle" style="left: 75%;">4</div>
        <div class="circle" style="left: 100%;">5</div>
        <div class="step" style="left: 0; ">Bienvenida</div>
        <div class="step" style="left: 25%; ">Paciente</div>
        <div class="step" style="left: 50%; ">Síntomas</div>
        <div class="step" style="left: 75%; ">Entrevistas</div>
        <div class="step" style="left: 100%; ">Resultados</div>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->