<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100">

    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3">
                <h4 class="textblue_primary">¿Cuantos años tiene usted?</h4>
            </div>
            <div class="d-flex flex-column gap-15 textblue_primary"  >
                <p>Escriba su edad.</p>
                <p>La edad debe ser mayor o igual a 18.</p>
                <input type="number" name="" id="" min="18">
                <p>Háganos saber de algún problema con esta pregunta</p>
            </div>
        </div>
        <div class="h-25  bortop_primary conten_button pl-4 pr-4">
            <button class="button button_atras">Atrás</button>
            <button class="button button_siguiente">Siguiente</button>
        </div>
    </div>

</div>

<!-- inicio pregunta mayor de edad o no  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100">

    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3">
                <h4 class="textblue_primary">¿Para quién es el chequeo?</h4>
            </div>
            <div class="d-flex flex-row gap-15">
                <button class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded">
                <i class="bi bi-person-fill-add display-1"></i>
                    <p>Tengo menos de 18 años</p>
                </button>
                <button class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded">
                <i class="bi bi-person-fill-add display-1"></i>
                    <p>Tengo más de 18 años</p>
                </button>
            </div>
        </div>
        <div class="h-25  bortop_primary conten_button pl-4 pr-4">
            <button class="button button_atras">Atrás</button>
            <button class="button button_siguiente">Siguiente</button>
        </div>
    </div>
</div>

<!-- preguta sexo  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100">

<div class="bgSecundarios_white w-100 h-100 rounded">
    <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
        <div class="mb-3">
            <h4 class="textblue_primary">¿Cúal es tu sexo?</h4>
        </div>
        <div class="d-flex flex-row gap-15"  >
            <button class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded"  style="width: 275px; height: 200px;">
            <i class="bi bi-gender-female display-1"></i>
                <p>Mujer</p>
            </button>
            <button class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded"  style="width: 275px; height: 200px;">
            <i class="bi bi-gender-male display-1"></i>
                <p>Hombre</p>
            </button>
        </div>
    </div>
    <div class="h-25  bortop_primary conten_button pl-4 pr-4">
        <button class="button button_atras">Atrás</button>
    </div>
</div>

</div>


<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>