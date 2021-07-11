<?php

namespace App\Model;

use App\Model\ClassConnection;


class ConsultaBD extends ClassConnection
{
    
    private $Db;

    protected function RegistroConsulta($Especialidade, $CodPac, $Data, $CodMed)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_consulta VALUES (:codCon, :especialidade, :codPac, :codMed, :data)");
        $this->Db->bindParam(":codCon", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":escialidade", $Especialidade, \PDO::PARAM_INT);
        $this->Db->bindParam(":codPac", $CodPac, \PDO::PARAM_STR);
        $this->Db->bindParam(":codMed", $CodMed, \PDO::PARAM_STR);
        $this->Db->bindParam(":data", $Data, \PDO::PARAM_STR);

        $this->Db->execute();
    }

}