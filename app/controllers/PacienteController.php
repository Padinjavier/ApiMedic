<?php
class PacienteController extends Controller
{

    function index()
    {
        $data['page_title'] = "Paciente";      
        $this->view("paciente", $data);
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
            header('Location: ' . ROOT . 'sintomas');
            exit();
        }
    }
   
}
