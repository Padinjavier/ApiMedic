<?php
class InicioController  extends Controller
{

    function index($a="", $b="", $c="", $d="")
    {       
        $data['page_title'] = "Inicio";
        $this->view("inicio", $data);

    }

  
}
