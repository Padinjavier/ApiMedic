<?php
class EntrevistasController extends Controller
{

    function index()
    {
        $data['page_title'] = "Entrevistas";   
        foreach ($_SESSION['sintomas'] as $key => $value) {
            $data['sintomas'][$key] = $value;
        }
        $data['irmedico'] = isset($_SESSION['irmedico']) ? $_SESSION['irmedico'] : '';
 
        // Recuperar otras variables según sea necesario
         
        $this->view("entrevistas", $data);
    }

   
}
