<?php
class ResultadosController extends Controller
{

    function index()
    {
<<<<<<< HEAD
        $data['page_title'] = "resultados";      
=======
        $data['page_title'] = "resultados";  
        

        foreach ($_SESSION['sintomas2'] as $key => $value) {
            $data['sintomas2'][$key] = $value;
        }

       

>>>>>>> d928979c0ad61545db82ec904a4761f14b507c9e
        $this->view("resultados", $data);
    }

   
}
