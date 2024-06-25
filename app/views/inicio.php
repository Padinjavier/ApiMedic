<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<!-- <link rel="stylesheet" href="<?= ASSETS ?>/dist/css/ApiMedic.css"> -->

<div class="d-flex justify-content-center bgblue_primary pr-5 pl-5 pb-4 pt-4 m-0 h-100">
  <div class="row  bgSecundarios_white p-4 mg-4 rounded">
    <div class="form-group col-md-6" style="    display: flex;
    flex-direction: column;
    justify-content: center;">
      <h3 class="textblue_primary">Verifique sus síntomas</h3>
      <p class="textSecundarios_black">Realice una breve (3 min) evaluación de sus síntomas. La información que
        proporcione está segura y no será compartida.</p>
        <p><i class="bi bi-check-lg"></i> Posibles causas de sus síntomas</p>
        <p><i class="bi bi-check-lg"></i> Recomendaciones sobre qué hacer a continuación</p>
      <h4>Acerca de esta herramienta</h4>
        <p><i class="bi bi-check-lg"></i> Creado y validado por médicos</p>
        <p><i class="bi bi-check-lg"></i> Clínicamente validado con casos de pacientes reales</p>
    </div>
    <div class="form-group col-md-6 d-flex justify-content-center align-items-center">
      <img src="http://192.168.1.41/ApiMedic/public/assets//dist/img/Photo.png" alt="" class="">
    </div>
  </div>
</div>
<script>
        function enterFullscreen() {
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) { // Firefox
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
                document.documentElement.webkitRequestFullscreen();
            } else if (document.documentElement.msRequestFullscreen) { // IE/Edge
                document.documentElement.msRequestFullscreen();
            }
        }

        document.getElementById('fullscreenButton').addEventListener('click', function() {
            enterFullscreen();
        });

        document.addEventListener('fullscreenchange', function() {
            if (!document.fullscreenElement) {
                enterFullscreen();
            }
        });
    </script>




<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>