<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<h1>Sobre Resultados</h1>
<?php

if (isset($_SESSION['sintomas2']) && !empty($_SESSION['sintomas2'])) {
    foreach ($_SESSION['sintomas2'] as $sintoma) {
        echo "Síntoma2: " . $sintoma . "<br>";
    }
}
echo "--------------------------------------vas a morir ----------------------------------------------------";


?>

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>



