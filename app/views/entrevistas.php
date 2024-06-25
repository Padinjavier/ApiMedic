<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<h1>Sobre entrevistas</h1>
<?php foreach ($data['sintomas'] as $sintoma): ?>
    <p>Síntoma: <?= htmlspecialchars($sintoma) ?></p>
<?php endforeach; ?>
<p>irmedico: <?= htmlspecialchars($data['irmedico']) ?></p>

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>



