<?php
namespace App\model;

use PDO;

class ClassConnection{

    #Realiza Conexao
    public function connectionDB(){

        try{
            $con = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $con;
        }catch(\PDOException $Erro){
             return $Erro->getMessage();
        }
    }
}