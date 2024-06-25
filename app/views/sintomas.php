<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<h1>Sobre síntomas</h1>
<p>Edad: <?= htmlspecialchars($data['edad']) ?></p>
<p>Sexo: <?= htmlspecialchars($data['sexo']) ?></p>
<p>Años: <?= htmlspecialchars($data['años']) ?></p>
<p>lesion: <?= htmlspecialchars($data['lesion']) ?></p>
<p>fumador: <?= htmlspecialchars($data['fumador']) ?></p>
<p>alergias: <?= htmlspecialchars($data['alergias']) ?></p>
<p>embarazo: <?= htmlspecialchars($data['embarazo']) ?></p>
<p>sobrepeso: <?= htmlspecialchars($data['sobrepeso']) ?></p>
<p>hipertension: <?= htmlspecialchars($data['hipertension']) ?></p>

<!-- Mostrar otros datos según sea necesario -->

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>
