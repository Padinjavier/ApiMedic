<?php
class ResultadosController extends Controller
{

    private $ResultadosModel;
    
    function __construct() 
    {
        $this->ResultadosModel = $this->loadModel("ResultadosModel");
    }

    function index()
    {
        $data['page_title'] = "resultados";  
        $data['sintomas_paciente'] = [];
        
        $data['sintomas_paciente'] = array_merge($_SESSION['sintomas'], $_SESSION['sintomas2']);

        $db_api_medic = $this->obtenerDataEnfermedades();

        // // Uso del algoritmo
        $diagnostico = $this->best_first_search($data['sintomas_paciente'], $db_api_medic);
        $data['resultado'] = "El diagnóstico más probable es ".mb_strtoupper($diagnostico, 'UTF-8');

        $data['sexo'] = $_SESSION['sexo'];
        $data['anios'] = $_SESSION['años'];
        $data['codigo_enfermedad'] = $this->ResultadosModel->ObtenerCodigoEnfermedad($diagnostico);

        $this->ResultadosModel->registrar($data);

        $this->view("resultados", $data);
    }

    function obtenerDataEnfermedades() {
        $bd_api_medic = [];
        $array_enfermedades = $this->ResultadosModel->obtener_lista_enfermedades();
        foreach($array_enfermedades as $cont => $enfermedad) {
            $bd_api_medic [$enfermedad['NombreEnfermedad']] = $this->ResultadosModel->obtener_lista_sintomas($enfermedad['CodigoEnfermedad']);
        }
        return $bd_api_medic;
    }

    // Función heurística que cuenta cuántos síntomas coinciden con los de cada diagnóstico
    function heuristic($symptoms, $diagnosisSymptoms) {
        return count(array_intersect($symptoms, $diagnosisSymptoms));
    }

    // Best First Search para encontrar el mejor diagnóstico
    function best_first_search($initial_symptoms, $database) {
        $best_diagnosis = null;
        $best_score = -1;
        foreach ($database as $diagnosis => $symptoms) {
            $score = $this->heuristic($initial_symptoms, $symptoms);
            if ($score > $best_score) {
                $best_score = $score;
                $best_diagnosis = $diagnosis;
            }
        }
        return $best_diagnosis;
    }  
}