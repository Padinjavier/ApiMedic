<?php
include_once (__DIR__ . '/__includes/__main_content_header.php');
?>

<div class="d-flex justify-content-center align-items-center bgblue_primary pr-5 pl-5 pb-4 pt-4 m-0 h-100">
  <div class="row bgSecundarios_white p-4 rounded w-50 H-85">
    <form class="login-form" name="formLogin" id="formLogin" action="">
      <div class="row justify-content-between align-items-center mb-4">
        <div class="text-start w-50">
          <h5 class="m-7 textblue_primary">¡Bienvenido de nuevo!</h5>
          <p class="m-0 textSecundarios_black" style="size: 10px;">Logéate para acceder a la Agencia</p>
        </div>
        <img src="<?= ASSETS ?>/dist/img/LOGO.png" alt="" class="w-25 h-25">
      </div>
      <div class="form-group">
        <label class="control-label">Correo</label>
        <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Ingresar correo" autofocus="">
      </div>
      <div class="form-group">
        <label class="control-label">Contraseña</label>
        <div class="input-group">
          <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Ingresar contraseña">
          <div class="input-group-append" onclick="togglePasswordVisibility()" style="position: absolute; right: 5px; top: 50%; transform: translateY(-50%); z-index: 10000;">
            <span class="input-group-text bg-white border-0 bg-transparent" id="togglePassword">
              <i class="fas fa-eye-slash" aria-hidden="true"></i>
            </span>
          </div>
          <script>
            function togglePasswordVisibility() {
              const input = document.getElementById("txtPassword");
              const toggleIcon = document.getElementById("togglePassword").querySelector("i");
              const tipo = input.getAttribute("type") === "password" ? "text" : "password";
              input.setAttribute("type", tipo);
              toggleIcon.classList.toggle("fa-eye-slash");
              toggleIcon.classList.toggle("fa-eye");
            }

            function showResetPasswordForm() {
              document.getElementById('formLogin').classList.add('d-none');
              document.getElementById('formRecetPass').classList.remove('d-none');
            }

            function showLoginForm() {
              document.getElementById('formLogin').classList.remove('d-none');
              document.getElementById('formRecetPass').classList.add('d-none');
            }
          </script>
        </div>
      </div>
      <div class="form-group">
        <div class="utility">
          <p class="semibold-text mb-2 textSecundarios_black"><a href="#" onclick="showResetPasswordForm()">¿Olvidaste tu contraseña?</a></p>
        </div>
      </div>
      <div id="alertLogin" class="text-center"></div>
      <div class="form-group btn-container">
        <button type="submit" class="btn bgblue_primary txblanco btn-block rounded">Iniciar sesión</button>
      </div>
    </form>
    <form id="formRecetPass" name="formRecetPass" class="forget-form d-none p-4" action="">
    <div class="row justify-content-between align-items-center mb-4">
        <div class="text-start w-50">
          <h5 class="m-7 textblue_primary">¿Olvidaste tu contraseña?</h5>
          <p class="m-0 textSecundarios_black" style="size: 10px;">Introduce tu dirección de correo electrónico para que podamos enviarte un enlace para restablecer tu contraseña.</p>
        </div>
        <img src="<?= ASSETS ?>/dist/img/LOGO.png" alt="" class="w-25 h-25">
      </div>
      <div class="form-group">
        <label class="control-label">Correo</label>
        <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Ingresar correo electrónico">
      </div>
      <div class="form-group btn-container">
        <button type="submit" class="btn btn-primary btn-block">Enviar enlace de restablecimiento</button>
      </div>
      <div class="form-group mt-3">
        <p class="semibold-text mb-0"><a href="#" onclick="showLoginForm()">Iniciar sesión</a></p>
      </div>
    </form>
  </div>
</div>

<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>
