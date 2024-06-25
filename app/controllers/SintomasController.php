<?php
class SintomasController extends Controller
{

    function index()
    {
        $data['page_title'] = "Sintomas";      
        $this->view("sintomas", $data);
    }

   
}
