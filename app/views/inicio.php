<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO Principal -->
<div class="bgSecundarios_white p-5  w-100 h-100 principal">
  <div class="row  bgSecundarios_white p-2 w-100 h-100 rounded">
    <div class="form-group col-md-6 w-50" style="    display: flex;
    flex-direction: column;
    justify-content: center;">
      <h2 class="textblue_primary mb-2">Bienvenido al Sistema Experto de Consultas Médicas</h2>
      <p class="textSecundarios_black">Nuestro sistema experto utiliza inteligencia artificial para ofrecerte una
        evaluación preliminar basada en tus síntomas, edad y peso, por favor responde algunas preguntas y recibe
        recomendaciones generales de salud y posibles tratamientos.</p>
      <h5 class="textblue_primary">Nota:</h5>
      <p><i class="bi bi-check-lg fs-4"></i> Esto no sustituye una consulta médica profesional.</p>
      <p><i class="bi bi-check-lg fs-4"></i> Medicamentos sin prescripción médica.</p>
      <button class="button button_siguiente nav-link" style="width: 150px;" onclick="bienvenida()">
        <h4 class="m-0">Empezar</h4>
      </button>

    </div>
    <div class="form-group col-md-6 d-flex justify-content-center align-items-center w-50">
      <img src="<?= ASSETS ?>/dist/img/Photo.png" alt="" style="width: inherit;">
    </div>
  </div>
</div>


<!-- tu contenido de bienvenida  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 bienvenida d-none">

  <div class="bgSecundarios_white w-100 h-100 rounded">
    <div class=" h-75 d-flex flex-row align-items-center justify-content-center">
      <div class="w-50 p-4">
        <h3 class="textblue_primary">Verifique sus síntomas</h3>
        <p class="textSecundarios_black">Realice una breve evaluación (3 min) de sus síntomas. La información que
          proporcione está segura y no será compartida. Sus resultados incluirán:</p>
        <p><i class="bi bi-check-lg"></i> Posibles causas de sus síntomas.</p>
        <p><i class="bi bi-check-lg"></i> Recomendaciones sobre qué hacer a continuación.</p>
        <h5 class="textblue_primary">Nota:</h5>
        <p><i class="bi bi-check-lg"></i> Creado y validado por médicos.</p>
        <p><i class="bi bi-check-lg"></i> Clínicamente validado con casos de pacientes reales.</p>
      </div>
      <div>
        <img src="<?= ASSETS ?>/dist/img/Photo2.png" alt="">
      </div>
    </div>
    <div class="h-25  bortop_primary conten_buttonnext pl-4 pr-4">
      <!-- <button class="button button_atras">Atrás</button> -->
      <button class="button button_siguiente nav-link"
        onclick="window.location.href='<?= ROOT ?>paciente'">Siguiente</button>
    </div>
  </div>
</div>



<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>