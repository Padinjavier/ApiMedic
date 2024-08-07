<?php
class SintomasController extends Controller
{
    private $sintomasModel;
    
    function __construct() 
    {
        $this->sintomasModel = $this->loadModel("SintomasModel");
    }
    function index()
    {
        $data['page_title'] = "Sintomas";
        $data['edad'] = isset($_SESSION['edad']) ? $_SESSION['edad'] : '';
        $data['sexo'] = isset($_SESSION['sexo']) ? $_SESSION['sexo'] : '';
        $data['años'] = isset($_SESSION['años']) ? $_SESSION['años'] : '';
        $data['lesion'] = isset($_SESSION['lesion']) ? $_SESSION['lesion'] : '';
        $data['fumador'] = isset($_SESSION['fumador']) ? $_SESSION['fumador'] : '';
        $data['alergias'] = isset($_SESSION['alergias']) ? $_SESSION['alergias'] : '';
        $data['embarazo'] = isset($_SESSION['embarazo']) ? $_SESSION['embarazo'] : '';
        $data['sobrepeso'] = isset($_SESSION['sobrepeso']) ? $_SESSION['sobrepeso'] : '';
        $data['hipertension'] = isset($_SESSION['hipertension']) ? $_SESSION['hipertension'] : '';

        
        // Obtener los síntomas actuales si existen
        $data['sintomas'] = isset($_SESSION['sintomas']) ? $_SESSION['sintomas'] : [];

        // Limpiar las variables de sesión de síntomas para evitar duplicados
        unset($_SESSION['sintomas']);

        // Obtener la respuesta de si vas a ir al medico o no 
        $data['irmedico'] = isset($_SESSION['irmedico']) ? $_SESSION['irmedico'] : [];

        // Limpiar las variables de la respuesta
        unset($_SESSION['irmedico']);

        // Recuperar otras variables según sea necesario

        $this->view("sintomas", $data);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Suponiendo que los datos se envían como un array en el campo 'sintomas[]'
            if (isset($_POST['sintomas']) && is_array($_POST['sintomas'])) {
                // Recorrer el array de 'sintomas[]'
                foreach ($_POST['sintomas'] as $sintoma) {
                    // Guardar cada valor en una variable de sesión
                    $_SESSION['sintomas'][] = $sintoma;
                }
                $_SESSION['irmedico'] = $_POST['irmedico'];

            }

            // Guardar otras variables según sea necesario
        }

        // show($_SESSION);
        // die();
        // Redirigir a la vista de síntomas
        header('Location: ' . ROOT . 'entrevistas');
        exit();
    }

    function ObtenerSintomas() {

        $sintomas = [];
        $data = $this->sintomasModel->listar_sintomas();
        // show($data);
        foreach($data as $index => $sintoma) {
            array_push($sintomas, $sintoma['sintoma']);
        }
        
        http_response_code(200);
        echo json_encode($sintomas, JSON_UNESCAPED_UNICODE);
    }
}