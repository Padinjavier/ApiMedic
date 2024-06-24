<?php include_once (__DIR__ . '/__includes/__main_content_header.php'); ?>

<style>
    .bgblue_primary {
        background-color: #007bff;
        color: #fff;
    }

    .bgSecundarios_white {
        background-color: #fff;
        color: #333;
    }

    .rounded {
        border-radius: 5px;
    }

    .input-icon {
        position: relative;
    }

    .input-icon input {
        padding-left: 30px;
    }

    .input-icon .fa-search {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
    }

    .suggestions {
        /* border: 1px solid #ccc; */
        max-height: 150px;
        overflow-y: auto;
        /* position: absolute; */
        width: calc(100% - 30px);
        z-index: 1000;
        background: #fff;
    }

    .suggestions div {
        padding: 10px;
        cursor: pointer;
    }

    .suggestions div:hover {
        background-color: #f0f0f0;
    }

    .selected-symptoms {
        display: flex;
        width: 100%;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 10px;
        border: 1px solid red;
        background: #E9E9E9;
    }

    .selected-symptom {
        background-color: #6c757d;
        color: #fff;
        padding: 5px 10px;
        border-radius: 20px;
        display: flex;
        align-items: center;
    }

    .selected-symptom .close {
        margin-left: 10px;
        cursor: pointer;
    }
</style>

<!-- Contenido del formulario -->
<form id="sintomasForm" method="POST" action="<?= ROOT ?>sintomas/store" class="w-100 h-100">
    <div class="bgblue_primary pr-5 pl-5 pb-4 pt-4 w-100 h-100">
        <div class="bgSecundarios_white w-100 h-100 rounded">
            <div class="h-75 d-flex flex-column align-items-center justify-content-center p-5">
                <h4 class="textblue_primary text-center pb-4">Vigilar mis síntomas</h4>
                <div class="d-flex flex-row align-items-flex-start justify-content-center w-100 h-100">
                    <div class="d-flex flex-column gap-15 textblue_primary position-relative" style="width: 333px;">
                        <div class="input-icon">
                            <input type="text" id="sintomaInput" class="rounded p-3" style="width: 100%; height: 35px;"
                                placeholder="Buscar por ejemplo, dolor de cabeza" autocomplete="off">
                            <i class="fa fa-search"></i>
                        </div>
                        <div id="suggestions" class="suggestions"></div>
                        <div class="selected-symptoms" id="selectedSymptoms"></div>
                    </div>
                    <div class="form-group col-md-6 d-flex justify-content-center align-items-center w-50">
                        <img src="<?= ASSETS ?>/dist/img/Photo4.png" alt="" style="width: inherit;">
                    </div>
                </div>
            </div>
            <div class="h-25 bortop_primary conten_button pl-4 pr-4">
                <button type="button" class="button button_atras toggle-div" data-hide=".años"
                    data-show=".generos">Atrás</button>
                <button type="submit" class="button button_siguiente">Siguiente</button>
            </div>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function () {
        const sintomas = ["Dolor de cabeza", "Dolor de garganta", "Fiebre", "Tos", "Náuseas", "Fatiga", "Mareos"];

        $('#sintomaInput').on('input', function () {
            const input = $(this).val().toLowerCase();
            const suggestions = sintomas.filter(sintoma => sintoma.toLowerCase().includes(input));
            $('#suggestions').empty();
            suggestions.forEach(suggestion => {
                $('#suggestions').append('<div>' + suggestion + '</div>');
            });
        });

        $(document).on('click', '#suggestions div', function () {
            const selected = $(this).text();
            const exists = $('#selectedSymptoms').find(`div:contains(${selected})`).length > 0;
            if (!exists) {
                $('#selectedSymptoms').append(`<div class="selected-symptom">${selected} <span class="close">×</span><input type="hidden" name="sintomas[]" value="${selected}"></div>`);
            }
            $('#sintomaInput').val('');
            $('#suggestions').empty();
        });

        $(document).on('click', '.selected-symptom .close', function () {
            $(this).parent().remove();
        });
    });
</script>

<?php include_once (__DIR__ . '/__includes/__main_content_footer.php'); ?>