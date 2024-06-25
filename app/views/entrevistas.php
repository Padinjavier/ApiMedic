<?php include_once(__DIR__ . '/__includes/__main_content_header.php'); ?>

<!-- preguntas de sintomas  -->
<form id="sintomasForm" method="POST" action="<?= ROOT ?>entrevista/store" class="w-100 h-100">
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
                <button type="button" class="button button_atras toggle-div" data-hide=".test" data-show=".años">Atrás</button>
                <button type="submit" class="button button_siguiente toggle-div" data-hide=".test" data-show=".años">Siguiente</button>
            </div>
        </div>
    </div>




    
</form>

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
        checkbox.name = 'sintomas[]';
        checkbox.value = sintoma;
        checkboxCell.appendChild(checkbox);
        
        const textCell = document.createElement('td');
        textCell.textContent = sintoma;
        
        row.appendChild(checkboxCell);
        row.appendChild(textCell);
        
        tableBody.appendChild(row);
    });
</script>

<?php include_once(__DIR__ . '/__includes/__main_content_footer.php'); ?>
