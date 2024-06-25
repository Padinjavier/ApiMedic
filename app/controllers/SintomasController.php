<?php
class SintomasController extends Controller
{
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
 
        // Recuperar otras variables según sea necesario
        
        $this->view("sintomas", $data);
    }

    function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['edad'] = $_POST['edad'];
            $_SESSION['sexo'] = $_POST['sexo'];
            $_SESSION['años'] = $_POST['años'];
            $_SESSION['lesion'] = $_POST['lesion'];
            $_SESSION['fumador'] = $_POST['fumador'];
            $_SESSION['alergias'] = $_POST['alergias'];
            $_SESSION['embarazo'] = $_POST['embarazo'];
            $_SESSION['sobrepeso'] = $_POST['sobrepeso'];
            $_SESSION['hipertension'] = $_POST['hipertension'];
            
            
            
            
            
            // Guardar otras variables según sea necesario

            // Redirigir a la vista de síntomas
            header('Location: ' . ROOT . 'entrevistas');
            exit();
        }
    }
}
?>
