<?php

class Database
{
    public function db_connect()
    {
        try{
            $db = new PDO(
                    DB_TYPE.":host=".DB_HOST."; dbname=".DB_NAME.";charset=utf8mb4",
                    DB_USER,
                    DB_PASS
                );
           
            return  $db;
            // show($db);

        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

}
