<?php
class EntrevistasController extends Controller
{

    function index()
    {
        $data['page_title'] = "Entrevistas";      
        $this->view("Entrevistas", $data);
    }

   
}
