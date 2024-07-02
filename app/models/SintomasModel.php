<?php

class SintomasModel
{
    function listar_sintomas(){
        try{
            $DB = new Database();
            $DB = $DB->db_connect();
            $query = "SELECT sintoma FROM sintomas WHERE 1";
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
