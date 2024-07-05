<?php

class EntrevistasModel
{
    function listar_enfermedades($data){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT DISTINCT E.CodigoEnfermedad, E.NombreEnfermedad
                        FROM enfermedadsintoma ES
                       INNER JOIN sintomas S ON ES.SintomaID = S.ID
                       INNER JOIN enfermedades E ON E.CodigoEnfermedad = ES.CodigoEnfermedad
                       WHERE 1=1
                         AND S.Sintoma IN (".$data['sintomas'].");";
            $result = $DB->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }catch(Exception $e) {
            // echo $e->getMessage();
            // die();
            return [];
        }
    }

    function listar_sintomas_G2($data){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT DISTINCT S.ID, S.Sintoma
                        FROM enfermedadsintoma ES
                       INNER JOIN sintomas S ON ES.SintomaID = S.ID
                       INNER JOIN enfermedades E ON E.CodigoEnfermedad = ES.CodigoEnfermedad
                       WHERE 1=1
                         AND E.CodigoEnfermedad IN (".$data['cod_posible_enfermedad'].")
                         AND S.Sintoma NOT IN (".$data['sintomas'].")
                        LIMIT 7;";
            $result = $DB->prepare($query);
            $result->execute();
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }catch(Exception $e) {
            // echo $e->getMessage();
            // die();
            return [];
        }
    }
}