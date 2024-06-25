<<<<<<< HEAD
<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- TU CONTENIDO -->

<h1>Sobre entrevistas</h1>


<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>



=======
<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- preguntas de sintomas  -->
<form id="sintomasForm" method="POST" action="<?= ROOT ?>resultados/store" class="w-100 h-100">
    <div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100 preguntasdesitomas">
        <div class="bgSecundarios_white w-100 h-100 rounded">
            <div class="h-75 d-flex flex-column align-items-center justify-content-center">
                <div class="h-25 align-content-center">
                    <h4 class="textblue_primary">¿Tiene usted alguno de los siguientes síntomas?</h4>
                    <p>Seleccione todas las respuestas que correspondan</p>
                </div>
                <div class="d-flex flex-column gap-15 align-items-center textblue_primary w-100 h-75 p-4 pt-0 pb-0">
                    <table class="table table-sm w-50" style="font-size: 13px;">
                        <thead>
                            <tr style="border: 0px solid red;">
                                <th style="width:4%; border: 0px solid red;"></th>
                                <th style="width:50%; border: 0px solid red;"></th>
                            </tr>
                        </thead>
                        <tbody id="sintomasTableBody" class="textblue_primary" style="border: #0A83A1;">
                            <!-- Aquí se generarán dinámicamente las filas de síntomas -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="h-25 bortop_primary conten_button pl-4 pr-4">
                <button type="button" class="button button_atras toggle-div" data-hide=".test"
                    data-show=".años">Atrás</button>
                <button type="submit" class="button button_siguiente toggle-div" data-hide=".test"
                    data-show=".años">Siguiente</button>
            </div>
        </div>
    </div>

    <!-- pbarra del 1 al 10 -->
    <style>
        .slider-container {
            width: 600px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .slider-step {
            width: 55px;
            height: 30px;
            background-color: #d3d3d3;
            /* Color plomo inicial */
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            margin: 0 1px;
            cursor: pointer;
            position: relative;
            box-sizing: border-box;
            /* Para incluir el borde en el tamaño total */
        }

        .slider-step:hover {
            border: 2px solid blue;
            /* Marco azul */
        }

        .slider-number {
            position: absolute;
            top: -20px;
            color: black;
            font-weight: bold;
        }

        .slider-number.selected {
            background-color: blue;
            color: white;
            padding: 5px 10px;
            border-radius: 10px;
            top: -35px;
        }
    </style>
    <div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100">
        <div class="bgSecundarios_white w-100 h-100 rounded">
            <div class="h-75 d-flex flex-column align-items-center justify-content-center">
                <div class="h-25 " style="display: flex; flex-direction: column;  align-items: center;">
                    <h4 class="textblue_primary">¿Cuál es la intensidad de su dolor de cabeza?</h4>
                    <p>Seleccione una respuesta</p>
                </div>
                <div
                    class="d-flex flex-column gap-15 align-items-center justify-content-center textblue_primary w-100 h-75 p-4 pt-0 pb-0">

                    <div class="slider-container">
                        <div class="slider-step" data-value="1">
                            <span class="slider-number">1</span>
                        </div>
                        <div class="slider-step" data-value="2">
                            <span class="slider-number">2</span>
                        </div>
                        <div class="slider-step" data-value="3">
                            <span class="slider-number">3</span>
                        </div>
                        <div class="slider-step" data-value="4">
                            <span class="slider-number">4</span>
                        </div>
                        <div class="slider-step" data-value="5">
                            <span class="slider-number">5</span>
                        </div>
                        <div class="slider-step" data-value="6">
                            <span class="slider-number">6</span>
                        </div>
                        <div class="slider-step" data-value="7">
                            <span class="slider-number">7</span>
                        </div>
                        <div class="slider-step" data-value="8">
                            <span class="slider-number">8</span>
                        </div>
                        <div class="slider-step" data-value="9">
                            <span class="slider-number">9</span>
                        </div>
                        <div class="slider-step" data-value="10">
                            <span class="slider-number">10</span>
                        </div>
                    </div>
                    <div class="h-25  pl-4 pr-4"
                        style="display: flex; width: 60%;  padding-top: 15px;  flex-direction: row;justify-content: space-between;">
                        <p>algo leve</p>
                        <p>insoportable</p>
                    </div>
                </div>
            </div>
            <div class="h-25 bortop_primary conten_button pl-4 pr-4">
                <button type="button" class="button button_atras toggle-div" data-hide=".test"
                    data-show=".años">Atrás</button>
                <button type="submit" class="button button_siguiente toggle-div" data-hide=".test"
                    data-show=".años">Siguiente</button>
            </div>
        </div>
    </div>

</form>


<script>
    const steps = document.querySelectorAll('.slider-step');

    steps.forEach((step, index) => {
        step.addEventListener('mouseover', () => {
            steps.forEach((s, i) => {
                if (i <= index) {
                    const percentage = (i + 10) / steps.length;
                    s.style.backgroundColor = `rgba(255, ${255 - 100 * percentage}, 0, 1)`;
                } else {
                    s.style.backgroundColor = '#d3d3d3';
                }
            });
        });

        step.addEventListener('click', () => {
            steps.forEach(s => {
                s.querySelector('.slider-number').classList.remove('selected');
            });
            step.querySelector('.slider-number').classList.add('selected');
        });
    });
</script>

<script>
    const sintomas = [
        "Escalofríos",
        "Fatiga",
        "Garganta roja",
        "Dolor muscular",
        "Disminución del apetito",
        "Vómitos",
        "Tengo hipertensión."
    ];

    const tableBody = document.getElementById('sintomasTableBody');

    sintomas.forEach((sintoma, index) => {
        const row = document.createElement('tr');

        const checkboxCell = document.createElement('td');
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.name = 'sintomas2[]';
        checkbox.value = sintoma;
        checkboxCell.appendChild(checkbox);

        const textCell = document.createElement('td');
        textCell.textContent = sintoma;

        row.appendChild(checkboxCell);
        row.appendChild(textCell);

        tableBody.appendChild(row);
    });
</script>

<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>
>>>>>>> d928979c0ad61545db82ec904a4761f14b507c9e
