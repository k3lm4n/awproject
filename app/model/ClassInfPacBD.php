<?php

namespace App\Model;

use App\Model\ClassConnection;


class ConsultaBD extends ClassConnection
{
    
    private $Db;

    protected function RegistroConsulta($info, $CodPac, $CodMed)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_consulta VALUES (:codInf, :info, :codPac, :codMed)");
        $this->Db->bindParam(":codInf", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":info", $info, \PDO::PARAM_INT);
        $this->Db->bindParam(":codPac", $CodPac, \PDO::PARAM_STR);
        $this->Db->bindParam(":codMed", $CodMed, \PDO::PARAM_STR);


        $this->Db->execute();
    }
    

}