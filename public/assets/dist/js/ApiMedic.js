document.addEventListener("DOMContentLoaded", function () {
  const circles = document.querySelectorAll(".circle");
  const sidebar = document.querySelector(
    ".main-sidebar.sidebar-dark-primary.elevation-4"
  );
  const inicioNav = document.querySelector("nav.inicio");
  const progressBarNav = document.querySelector("nav.progress_bar");

  circles.forEach((circle) => {
    circle.addEventListener("click", function () {
      if (sidebar) {
        sidebar.classList.toggle("d-none");
      }
    });
  });

  // Obtén la URL actual
  var currentUrl = window.location.pathname;

  // Obtén solo la última parte de la URL
  var urlSegments = currentUrl.split("/");
  var lastSegment = "/" + urlSegments[urlSegments.length - 1];

  // Mapeo de URLs a los índices de las etapas
  var stepMap = {
    "/bienvenida": 0,
    "/paciente": 1,
    "/sintomas": 2,
    "/entrevistas": 3,
    "/resultados": 4,
  };

  // Verifica si la URL termina en '/APIMEDIC/'
  if (currentUrl.endsWith("/ApiMedic/")) {
    if (inicioNav) {
      console.log(currentUrl.endsWith("/ApiMedic/"));
      inicioNav.classList.remove("d-none");
      progressBarNav.classList.add("d-none");
    }
  } else {
    progressBarNav.classList.remove("d-none");
    inicioNav.classList.add("d-none");
  }

  // Obtén el índice de la etapa actual
  var currentStepIndex = stepMap[lastSegment];

  // Verifica que la URL esté en el mapa
  if (currentStepIndex !== undefined) {
    // Selecciona todas las etapas y círculos
    var progressBar = document.querySelector(".progress-bar");

    // Marca todas las etapas anteriores y la actual como completadas
    for (var i = 0; i <= currentStepIndex; i++) {
      circles[i].classList.add("active");
      if (i !== 0) {
        circles[i].innerHTML = '<i class="bi bi-check-lg"></i>';
      }
    }

    // Actualiza el ancho de la barra de progreso
    progressBar.style.width = (currentStepIndex + 1) * 25 + "%";
  }

  const edadInput = document.getElementById("años");

  edadInput.addEventListener("keydown", function (event) {
    if (event.key === "e") {
      event.preventDefault();
      console.log("No se permiten números en notación científica.");
      // alert('No se permiten números en notación científica.');
    }
  });
});

function bienvenida() {
  const principal = document.querySelector("div.principal");
  principal.classList.add("d-none");

  const bienvenida = document.querySelector("div.bienvenida");
  bienvenida.classList.remove("d-none");

  const inicioNav = document.querySelector("nav.inicio");
  inicioNav.classList.add("d-none");

  const progressBarNav = document.querySelector("nav.progress_bar");
  progressBarNav.classList.remove("d-none");
}

document.addEventListener("DOMContentLoaded", function () {
  const toggleInputs = document.querySelectorAll(".toggle-div");

  toggleInputs.forEach((input) => {
    input.addEventListener("click", function () {
      const hideClass = this.getAttribute("data-hide");
      const showClass = this.getAttribute("data-show");

      document.querySelector(hideClass).classList.add("d-none");
      document.querySelector(showClass).classList.remove("d-none");
    });
  });
});

/* seleccion de sintomas  */
$(document).ready(function () {

  $.ajax({
    url: 'http://localhost/ApiMedic/sintomas/ObtenerSintomas',
    type: 'POST',
    success: function (response) {

        const sintomas = JSON.parse(response);
        // Ahora puedes usar la variable sintomas como necesites
        // const sintomas = [
        //   "Dolor de cabeza",
        //   "Dolor de garganta",
        //   "Fiebre",
        //   "Tos",
        //   "Náuseas",
        //   "Fatiga",
        //   "Mareos",
        //   "Mareo2",
        //   "Mareo3",
        //   "Mareos4",
        //   "Mareos5",
        //   "Mareos6",
        //   "Mareos7",
        // ];
      
        $("#sintomaInput").on("input", function () {
          const input = $(this).val().toLowerCase();
          const suggestions = sintomas.filter((sintoma) =>
            sintoma.toLowerCase().includes(input)
          );
          $("#suggestions").empty();
          suggestions.forEach((suggestion) => {
            $("#suggestions").append("<div>" + suggestion + "</div>");
          });
        });
    },
    error: function (error) {
        console.log("Error al obtener los datos:", error);
    }
  });

  $(document).on("click", "#suggestions div", function () {
    const selected = $(this).text();
    const exists =
      $("#selectedSymptoms").find(`div:contains(${selected})`).length > 0;
    if (!exists) {
      $("#selectedSymptoms").append(
        `<div class="selected-symptom">${selected} <span class="close">×</span><input type="hidden" name="sintomas[]" value="${selected}"></div>`
      );
      $("#selectedSymptoms").addClass("has-symptoms");
      $("#selectedSymptoms").css({ "min-height": "auto", background: "white" });
      $("#defaultText").hide();
      updateWarningMessage();
    }
    $("#sintomaInput").val("");
    $("#suggestions").empty();
  });

  $(document).on("click", ".selected-symptom .close", function () {
    $(this).parent().remove();
    if ($("#selectedSymptoms").children(".selected-symptom").length === 0) {
      $("#selectedSymptoms").removeClass("has-symptoms");
      $("#selectedSymptoms").css("min-height", "140px");
      $("#defaultText").show();
    }
    updateWarningMessage();
  });

  // Función para actualizar el mensaje de advertencia y validar el botón de Siguiente
  function updateWarningMessage() {
    const symptomCount =
      $("#selectedSymptoms").children(".selected-symptom").length;

    if (symptomCount < 3) {
      $("#warningMessage").show();
    } else {
      $("#warningMessage").hide();
    }
  }
  // // Función para actualizar el mensaje de advertencia y validar el botón de Siguiente
  // function updateWarningMessagebtn() {
  //   const symptomCount =
  //     $("#selectedSymptoms").children(".selected-symptom").length;
  //   const botonSiguiente2 = document.querySelector(".button_siguiente");

  //   if (symptomCount < 3) {
  //     botonSiguiente2.disabled = true;
  //   } else {
  //     botonSiguiente2.disabled = false;
  //   }
  // }
  // // Llamada inicial para deshabilitar el botón de Siguiente si no hay suficientes síntomas seleccionados
  // updateWarningMessagebtn();
});
/* seleccion de sintomas  */

// logica pasientes
document.addEventListener("DOMContentLoaded", function () {
  const edadInput = document.getElementById("años");
  const sexoFemenino = document.getElementById("female");
  const preguntaEmbarazo = document.querySelector(".embarazada");
  const mayor18 = document.getElementById("mayor-18");
  const menor18 = document.getElementById("menor-18");
  const botonSiguiente = document.querySelector(".button_siguiente");

// Función para manejar la visibilidad de la pregunta de embarazo y resetear checkboxes
function toggleEmbarazoVisibility() {
  //alert('entra a función toggleEmbarazoVisibility');
  if (sexoFemenino.checked) {
      alert('entra a función toggleEmbarazoVisibility 1');
      preguntaEmbarazo.classList.remove("d-none"); // Mostrar la pregunta si es Femenino
      // Mostrar todas las alternativas de la pregunta de embarazo
      document
          .querySelectorAll('input[type="checkbox"][name="embarazo"]')
          .forEach((checkbox) => {
              checkbox.checked = false; // Deseleccionar la checkbox
              checkbox.closest("td").classList.remove("d-none");
          });
  } else {
      preguntaEmbarazo.classList.add("d-none"); // Ocultar la pregunta si es Masculino
      // Ocultar y deseleccionar todas las alternativas de la pregunta de embarazo
      document
          .querySelectorAll('input[type="checkbox"][name="embarazo"]')
          .forEach((checkbox) => {
              checkbox.checked = false; // Deseleccionar la checkbox
              checkbox.closest("td").classList.add("d-none"); // Ocultar el contenedor de la checkbox (td)
          });
      //alert('entra a función toggleEmbarazoVisibility 2');
  }
}

  // Función para deshabilitar el botón siguiente si no hay una edad válida
  function updateAgeValidation() {
    const edad = parseInt(edadInput.value);

    if (mayor18.checked && (edad < 18 || isNaN(edad))) {
      edadInput.classList.add("input-error");
      botonSiguiente.disabled = true;
    } else if (menor18.checked && (edad > 17 || isNaN(edad))) {
      edadInput.classList.add("input-error");
      botonSiguiente.disabled = true;
    } else {
      edadInput.classList.remove("input-error");
      botonSiguiente.disabled = false;
    }
  }

  // Manejar cambios en la selección de mayor o menor de 18 años
  document.querySelectorAll('input[name="edad"]').forEach((radio) => {
    radio.addEventListener("change", function () {
      updateAgeValidation();
      if (this.checked && this.value === "18+") {
        edadInput.setAttribute("min", "18");
        edadInput.removeAttribute("max");
      } else if (this.checked && this.value === "-18") {
        edadInput.setAttribute("max", "17");
        edadInput.removeAttribute("min");
      }
    });
  });

  // Llamar a las funciones al cargar la página
  toggleEmbarazoVisibility();
  updateAgeValidation();

  // Manejar cambios en el campo de edad directamente
  edadInput.addEventListener("input", updateAgeValidation);

  // Manejar cambios en la selección de género para la pregunta de embarazo
  sexoFemenino.addEventListener("change", toggleEmbarazoVisibility);
  document
    .getElementById("male")
    .addEventListener("change", toggleEmbarazoVisibility);
});
// logica pasientes



$(document).ready(function () {
    $.ajax({
        url: 'http://localhost/ApiMedic/entrevistas/ObtenerSintomasG2',
        type: 'POST',
        success: function (response) {
            // const sintomas = [
            //     "Escalofríos",
            //     "Fatiga",
            //     "Garganta roja",
            //     "Dolor muscular",
            //     "Disminución del apetito",
            //     "Vómitos",
            //     "Tengo hipertensión."
            // ];

            const sintomas = JSON.parse(response);
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

        },
        error: function (error) {
            console.log("Error al obtener los datos:", error);
        }
    });
});

$(document).on("click", ".btnPreguntasSintomas", function () {
  const spanSintoma = document.getElementById('spanSintoma');
  spanSintoma.innerText = "sintomas";
});