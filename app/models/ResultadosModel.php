<?php

class ResultadosModel
{

    function registrar($data){
        try {
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "INSERT INTO DIAGNOSTICOS
                        (NConsulta, Genero, Edad, Resultado, CodigoEnfermedad)
                      VALUES 
                        (:NConsulta, :Genero, :Edad, :Resultado, :CodigoEnfermedad)";
            $result = $DB->prepare($query);
            $result->execute([
                ':NConsulta'=> $this->obtener_nro_consulta(),
                ':Genero'=> $data['sexo'],
                ':Edad'=> $data['anios'],
                ':Resultado'=> $data['resultado'],
                ':CodigoEnfermedad'=> $data['codigo_enfermedad']
            ]);
            return true;            
        } catch (Exception $e) {
            // echo $e->getMessage();
            // die();
            return false;
        }
    }

    function obtener_nro_consulta(){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT CONCAT('Cslt',LPAD(COUNT(*)+1,3,'0')) AS NConsulta FROM `diagnosticos` WHERE 1;";
            $result = $DB->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC); 
            return $data[0]['NConsulta'];
        }catch(Exception $e) {
            return false;
        }
    }

    function obtener_lista_enfermedades(){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT DISTINCT E.CodigoEnfermedad, E.NombreEnfermedad 
                        FROM `enfermedades` E
                       INNER JOIN enfermedadsintoma ES ON E.CodigoEnfermedad = ES.CodigoEnfermedad
                       WHERE 1;";
            $result = $DB->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC); 
            return $data;
        }catch(Exception $e) {
            return false;
        }
    }

    function obtener_lista_sintomas($codigoEnfermedad){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT S.Sintoma 
                        FROM enfermedadsintoma ES 
                       INNER JOIN sintomas S ON S.ID = ES.SintomaID 
                       WHERE 1=1 
                         AND ES.CodigoEnfermedad = :CODIGO_ENFERMEDAD;";
            $result = $DB->prepare($query);
            $result->execute([
                ':CODIGO_ENFERMEDAD' => $codigoEnfermedad
            ]);
            $sintomas = $result->fetchAll(PDO::FETCH_ASSOC);
            $array_sintomas = [];
            foreach($sintomas as $cont => $sintoma) {
                array_push($array_sintomas, $sintoma['Sintoma']);
            }
            return $array_sintomas;
        }catch(Exception $e) {
            return false;
        }
    }

    function ObtenerCodigoEnfermedad($nombre_enfermedad){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT CodigoEnfermedad FROM enfermedades WHERE NombreEnfermedad = :NOMBRE_ENFERMEDAD;";
            $result = $DB->prepare($query);
            $result->execute([
                ':NOMBRE_ENFERMEDAD' => $nombre_enfermedad
            ]);
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data[0]['CodigoEnfermedad'];
        }catch(Exception $e) {
            return [];
        }
    }
}
