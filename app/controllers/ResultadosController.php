<?php
class ResultadosController extends Controller
{

    function index()
    {
        $data['page_title'] = "resultados";  
        

        foreach ($_SESSION['sintomas2'] as $key => $value) {
            $data['sintomas2'][$key] = $value;
        }

       

        $this->view("resultados", $data);
    }

   
}
