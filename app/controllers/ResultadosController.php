<?php
class ResultadosController extends Controller
{

    function index()
    {
        $data['page_title'] = "resultados";      
        $this->view("resultados", $data);
    }

   
}
