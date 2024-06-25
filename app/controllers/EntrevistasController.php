<?php
class EntrevistasController extends Controller
{

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

        $this->view("entrevistas", $data);
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
    
   
}
