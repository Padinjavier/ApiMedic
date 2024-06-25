<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<h1>Sobre Resultados</h1>
<<<<<<< HEAD

=======
<?php

if (isset($_SESSION['sintomas2']) && !empty($_SESSION['sintomas2'])) {
    foreach ($_SESSION['sintomas2'] as $sintoma) {
        echo "Síntoma2: " . $sintoma . "<br>";
    }
}
echo "--------------------------------------vas a morir ----------------------------------------------------";


?>
>>>>>>> d928979c0ad61545db82ec904a4761f14b507c9e

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>



