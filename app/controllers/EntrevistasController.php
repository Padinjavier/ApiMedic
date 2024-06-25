<?php
class EntrevistasController extends Controller
{

    function index()
    {
        $data['page_title'] = "Entrevistas";   
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
        $this->view("Entrevistas", $data);
    }

   
}
