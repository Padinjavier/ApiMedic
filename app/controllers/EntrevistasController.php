<?php
class EntrevistasController extends Controller
{
    private $EntrevistasModel;
    
    function __construct() 
    {
        $this->EntrevistasModel = $this->loadModel("EntrevistasModel");
    }

    function index()
    {
        $data['page_title'] = "Entrevistas";   
        // Verificar si la sesión de síntomas está definida y tiene datos
        if (isset($_SESSION['sintomas']) && !empty($_SESSION['sintomas'])) {
            foreach ($_SESSION['sintomas'] as $key => $value) {
                $data['sintomas'][$key] = $value;
            }
        } else {
            $data['sintomas'] = [];
        }

        $data['irmedico'] = isset($_SESSION['irmedico']) ? $_SESSION['irmedico'] : '';

        // Recuperar otras variables según sea necesario

        $this->view("entrevistas", $data);
    }
    
    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Inicializar la sesión si no está ya iniciada
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
    
            // Limpiar la variable de sesión para evitar duplicados
            $_SESSION['sintomas2'] = [];
            
            // Verificar si se han enviado síntomas
            if (isset($_POST['sintomas2']) && is_array($_POST['sintomas2'])) {
                // Recorrer el array de 'sintomas[]' y guardarlos en la sesión
                foreach ($_POST['sintomas2'] as $sintoma) {
                    $_SESSION['sintomas2'][] = htmlspecialchars($sintoma);
                }
            }

            // Redirigir a la vista de síntomas
            header('Location: ' . ROOT . 'resultados');
            exit();
        }
    }
    
   function ObtenerSintomasG2() {
        $data = [];
        $data['sintomas'] = "";
        $data['cod_posible_enfermedad'] = "";

        foreach ($_SESSION['sintomas'] as $index => $sintoma) {
            $data['sintomas'] = $data['sintomas']."'".$sintoma."',";
        }
        
        $data['sintomas'] = rtrim($data['sintomas'],",");
        $posibles_enfermedades = $this->EntrevistasModel->listar_enfermedades($data);
        
        foreach ($posibles_enfermedades as $index => $enfermedad) {
            $data['cod_posible_enfermedad'] = $data['cod_posible_enfermedad']."'".$enfermedad['CodigoEnfermedad']."',";
        }

        $data['cod_posible_enfermedad'] = rtrim($data['cod_posible_enfermedad'],",");
        $array_sintomas_G2 = $this->EntrevistasModel->listar_sintomas_G2($data);

        $sintomas_G2 = [];
        foreach($array_sintomas_G2 as $index => $item_sintoma) {
            array_push($sintomas_G2, $item_sintoma['Sintoma']);
        }
        
        http_response_code(200);
        echo json_encode($sintomas_G2, JSON_UNESCAPED_UNICODE);
   }
}
