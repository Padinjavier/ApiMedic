<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>


<form id="edadForm" method="POST" action="<?= ROOT ?>paciente/store" class="w-100 h-100">
     <!-- paciente pregunta mayor de edad o no  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 edades" id="edades">
    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class="h-75 d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3">
                <h4 class="textblue_primary">¿Cuál es tu edad?</h4>
            </div>
            <div class="d-flex flex-row gap-15">
                <label for="mayor-18" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded">
                    <input type="radio" id="mayor-18" name="edad" value="18+" class="d-none toggle-div" data-hide=".edades" data-show=".generos">
                    <i class="bi bi-person-fill-add display-1"></i>
                    <p>Tengo 18 años o más</p>
                </label>
                <label for="menor-18" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded">
                    <input type="radio" id="menor-18" name="edad" value="-18" class="d-none toggle-div" data-hide=".edades" data-show=".generos">
                    <i class="bi bi-person-fill-add display-1"></i>
                    <p>Tengo menos de 18 años</p>
                </label>
            </div>
        </div>
        <div class="h-25 bortop_primary conten_buttonatras pl-4 pr-4">
            <button type="button" class="button button_atras nav-link"
            onclick="window.location.href='<?= ROOT ?>inicio'">Atrás</button>
        </div>
    </div>
</div>


<!-- cual es tu genero   -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 generos d-none">
    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
            <div class="mb-3">
                <h4 class="textblue_primary">¿Cúal es tu sexo?</h4>
            </div>
            <div class="d-flex flex-row gap-15">
                <label for="female" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded" style="width: 275px; height: 200px;">
                    <input type="radio" id="female" name="sexo" value="Femenino" class="d-none toggle-div" data-hide=".generos" data-show=".años">
                    <i class="bi bi-gender-female display-1"></i>
                    <p>Femenino</p>
                </label>
                <label for="male" class="d-flex flex-column align-items-center p-5 m-2 textblue_primary bor_primary bgSecundarios_white rounded" style="width: 275px; height: 200px;">
                    <input type="radio" id="male" name="sexo" value="Masculino" class="d-none toggle-div" data-hide=".generos" data-show=".años">
                    <i class="bi bi-gender-male display-1"></i>
                    <p>Masculino</p>
                </label>
            </div>
        </div>
        <div class="h-25 bortop_primary conten_buttonatras pl-4 pr-4">
            <button type="button" class="button button_atras toggle-div" data-hide=".generos" data-show=".edades">Atrás</button>
        </div>
    </div>
</div>

<!-- cuantos años tienes  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 años d-none">
    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class=" h-75  d-flex flex-column align-items-center justify-content-center p-5">
            <h4 class="textblue_primary text-center pb-4">¿Cuantos años tiene usted?</h4>
            <div class="d-flex flex-row align-items-flex-start justify-content-center w-100 h-100">
                <div class="d-flex flex-column gap-15 textblue_primary ">
                    <label for="">Edad</label>
                    <input type="number" name="años" id="años" class="rounded p-3" style="width: 330px; height: 55px;" placeholder="Ingrese su edad" step="1" min="1">
                </div>
                <div class="form-group col-md-6 d-flex justify-content-center align-items-center w-50">
                    <img src="<?= ASSETS ?>/dist/img/Photo3.png" alt="" style="width: inherit;">
                </div>
            </div>
        </div>
        <div class="h-25  bortop_primary conten_button pl-4 pr-4">
            <button type="button" class="button button_atras toggle-div" data-hide=".años" data-show=".generos">Atrás</button>
            <button type="button" class="button button_siguiente toggle-div" data-hide=".años" data-show=".test">Siguiente</button>
        </div>
    </div>
</div>

<!-- preguntas test  -->
<div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 test d-none">
    <div class="bgSecundarios_white w-100 h-100 rounded">
        <div class=" h-75  d-flex flex-column align-items-center justify-content-center">
            <div class="h-25 align-content-center">
                <h4 class="textblue_primary">¿Alguna de las siguientes afirmaciones se aplica a usted?</h4>
            </div>
            <div class="d-flex flex-column gap-15 textblue_primary w-100 h-75 p-4 pt-0 pb-0">
                <table class="table table-sm h-100" style="font-size: 13px; ">
                    <thead style="">
                        <tr style="border: 0px solid red;">
                            <th style="width:50%; border: 0px solid red;"></th>
                            <th style="width:4%; border: 0px solid red;"></th>
                            <th style="width:4%; border: 0px solid red;"></th>
                            <th style="width:4%; border: 0px solid red;"></th>
                        </tr>
                    </thead>
                    <tbody id="" class="textblue_primary" style="border: #0A83A1;">
                        <tr>
                            <td>Recientemente sufrí una lesión.</td>
                            <td><input type="checkbox" name="lesion" value="si">Sí</td>
                            <td><input type="checkbox" name="lesion" value="no">No</td>
                            <td><input type="checkbox" name="lesion" value="nls">No lo sé</td>
                        </tr>
                        <tr>
                            <td>He fumado cigarrillos durante al menos 10 años.</td>
                            <td><input type="checkbox" name="fumador" value="si">Sí</td>
                            <td><input type="checkbox" name="fumador" value="no">No</td>
                            <td><input type="checkbox" name="fumador" value="nls">No lo sé</td>
                        </tr>
                        <tr>
                            <td>Mis padres, hermanos, abuelos o yo tenemos una <br>
                                enfermedad alérgica, p. ej., asma, dermatitis atópica <br>
                                o una alergia alimentaria.</td>
                            <td><input type="checkbox" name="alergias" value="si">Sí</td>
                            <td><input type="checkbox" name="alergias" value="no">No</td>
                            <td><input type="checkbox" name="alergias" value="nls">No lo sé</td>
                        </tr>
                        <tr>
                            <td class="embarazada">Estoy embarazada.</td>
                            <td><input type="checkbox" name="embarazo" value="si">Sí</td>
                            <td><input type="checkbox" name="embarazo" value="no">No</td>
                            <td><input type="checkbox" name="embarazo" value="nls">No lo sé</td>
                        </tr>
                        <tr>
                            <td>Tengo sobrepeso u obesidad.</td>
                            <td><input type="checkbox" name="sobrepeso" value="si">Sí</td>
                            <td><input type="checkbox" name="sobrepeso" value="no">No</td>
                            <td><input type="checkbox" name="sobrepeso" value="nls">No lo sé</td>
                        </tr>
                        <tr>
                            <td>Tengo hipertensión.</td>
                            <td><input type="checkbox" name="hipertension" value="si">Sí</td>
                            <td><input type="checkbox" name="hipertension" value="no">No</td>
                            <td><input type="checkbox" name="hipertension" value="nls">No lo sé</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="h-25  bortop_primary conten_button pl-4 pr-4">
            <button type="button" class="button button_atras toggle-div" data-hide=".test" data-show=".años">Atrás</button>
            <button type="submit" class="button button_siguiente nav-link" onclick="window.location.href='<?= ROOT ?>sintomas'">Siguiente</button>
        </div>
    </div>
</div>

</form>

<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>
