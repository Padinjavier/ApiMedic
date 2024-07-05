<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<div class="bgSecundarios_white p-5 w-100 h-100 principal">
    <h4>Luego de analizar sus síntomas:</h4>
    <ul>
        <?php
            if (isset($data['sintomas_paciente']) && !empty($data['sintomas_paciente'])) {
                foreach ($data['sintomas_paciente'] as $sintoma) {
                    echo "<li>* " . $sintoma . "</li>";
                }
            } 
        ?>
    </ul>
    <h4><?= $data['resultado'] ?></h4>
</div>

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>