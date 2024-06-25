<?php
class PacienteController extends Controller
{

    function index()
    {
        $data['page_title'] = "Paciente";      
        $this->view("paciente", $data);
    }

   
}
