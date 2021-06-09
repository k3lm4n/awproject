<?php

namespace App\Model;

use App\Model\ClassConnection;


class ExameBD extends ClassConnection
{
    
    private $Db;

    protected function RegistroExame($Especialidade, $CodEsp)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_exame VALUES (:codEx, :Tipo, :codEspecialidade)");
        $this->Db->bindParam(":codEx", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":Tipo", $Especialidade, \PDO::PARAM_STR);
        $this->Db->bindParam(":codEspecialidade", $CodEsp, \PDO::PARAM_STR);


        $this->Db->execute();
    }

}