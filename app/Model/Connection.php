<?php
namespace App\Model;



abstract class ClassConnection{

    #Realiza Conexao
    public function connectionDB(){

        try{
            $con = new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $con;
        }catch(\PDOException $Erro){
             return $Erro->getMessage();
        }
    }
}