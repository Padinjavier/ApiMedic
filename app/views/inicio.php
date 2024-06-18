<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<div class=" container bgblue_primary p-4">
       <div class=" row align-items-center bgSecundarios_white p-4">
       <div class="form-group col-md-6">
       <h2 class="textblue_primary">Verifique sus síntomas</h2>
        <p class="textSecundarios_black">Realice una breve (3 min) evaluación de sus síntomas. La información que proporcione está segura y no será compartida.</p>
        <ul>
            <li><i class="bi bi-check-lg"></i> Posibles causas de sus síntomas</li>
            <li><i class="bi bi-check-lg"></i> Recomendaciones sobre qué hacer a continuación</li>
        </ul>
        <h3>Acerca de esta herramienta</h3>
        <ul>
            <li><i class="bi bi-check-lg"></i> Creado y validado por médicos</li>
            <li><i class="bi bi-check-lg"></i>Clinicamente validado con casos de pacientes reales</li>
        </ul>
       </div>
       <div class="form-group col-md-6">
        <img src="<?= ASSETS ?>/dist/img/Photo.png" alt="">
    </div>
       </div>
       
    </div>




<style>
    :root{
          --Blue_primary: #0A83A1;
          --Secundarios_black: #313030;
          --Secundarios_white: #FEFEFE;
    }
    .textblue_primary{
        color: var(--Blue_primary);
    }
    .textSecundarios_black{
        color: var(--Secundarios_black);
    }

    .bgblue_primary{
        background: var(--Blue_primary);
    }
    .bgSecundarios_white{
        background: var(--Secundarios_white);
    }
    ul{
        list-style: none;
    }
</style>

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>


