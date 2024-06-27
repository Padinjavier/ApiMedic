<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- Contenido del formulario -->
<form id="sintomasForm" method="POST" action="<?= ROOT ?>sintomas/store" class="w-100 h-100">
    <div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 enfermedades">
        <div class="bgSecundarios_white w-100 h-100 rounded">
            <div class="h-75 d-flex flex-column align-items-center justify-content-center p-5 mt-2">
                <h4 class="textblue_primary text-center pb-4">Vigilar mis síntomas</h4>
                <div class="d-flex flex-row align-items-flex-start justify-content-center w-100 h-100">
                    <div class="d-flex flex-column gap-15 textblue_primary position-relative" style="width: 333px;">
                        <div class="input-icon">
                            <input type="text" id="sintomaInput" class="rounded p-3" style="width: 100%; height: 35px;"
                                placeholder="Buscar por ejemplo, dolor de cabeza" autocomplete="off">
                            <i class="fa fa-search"></i>
                        </div>
                        <div id="suggestions" class="suggestions"></div>
                        <!-- los sintomas estan en el JS linea 105  -->
                        <div class="selected-symptoms" id="selectedSymptoms">
                            <span id="defaultText" class="textSecundarios_black">Por favor, ingrese más síntomas.</span>
                        </div>
                        <div id="warningMessage"><i class="fa fa-exclamation-circle"></i> ¡Por favor, intente agregar más síntomas.</div>
                    </div>
                    <div class="form-group col-md-6 d-flex justify-content-center align-items-center w-50">
                        <img src="<?= ASSETS ?>/dist/img/Photo4.png" alt="" style="width: initial;">
                    </div>
                </div>
            </div>
            <div class="h-25 bortop_primary conten_button pr-4 pl-4">
                <button type="button" class="button button_atras nav-link" onclick="window.location.href='<?= ROOT ?>pacientes'">Atrás</button>
                <!-- Agregamos el botón submit dentro del formulario -->
                <button type="button" class="button button_siguiente buttondisabled toggle-div " data-hide=".enfermedades" data-show=".irmedico">Siguiente</button>
            </div>
        </div>
    </div>

    <!-- Consulta a un profesional -->
    <div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 irmedico d-none">
        <div class="bgSecundarios_white w-100 h-100 rounded">
            <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
                <div class="mb-3 text-center">
                    <h4 class="textblue_primary">¿Está pensando consultar a un profesional médico? </h4>
                    <p class="textblue_primary">Selecciona una opción</p>
                </div>
                <div class="d-flex flex-row gap-15">
                    <!-- Añadimos el formulario para los radio buttons -->
                    <form method="POST" action="<?= ROOT ?>sintomas/store" class="w-100">
                        <label for="si" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded" style="width: 275px; height: 200px;">
                            <input type="radio" id="si" name="irmedico" value="si" class="d-none " onclick="this.form.submit()">
                            <i class="bi bi-check-circle display-1"></i>
                            <p>Si</p>
                        </label>
                        <label for="no" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded" style="width: 275px; height: 200px;">
                            <input type="radio" id="no" name="irmedico" value="no" class="d-none "  onclick="this.form.submit()">
                            <i class="bi bi-x-circle display-1"></i>
                            <p>No</p>
                        </label>
                        <label for="nolose" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded" style="width: 275px; height: 200px;">
                            <input type="radio" id="nolose" name="irmedico" value="no lo se" class="d-none"  onclick="this.form.submit()">
                            <i class="bi bi-arrow-right-circle display-1"></i>
                            <p>No lo sé</p>
                        </label>
                    </form>
                </div>
            </div>
            <div class="h-25 bortop_primary conten_buttonatras pl-4 pr-4">
                <button type="button" class="button button_atras  toggle-div" data-hide=".irmedico" data-show=".enfermedades">Atrás</button>
            </div>
        </div>
    </div>

</form>

<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>
