<?php

namespace App\Model;

use App\Model\ClassConnection;


class EspecialidadeBD extends ClassConnection
{
    
    private $Db;

    protected function RegistroEspecilidade($tipo)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_especialidade VALUES (:codEspecialidade, :tipo)");
        $this->Db->bindParam(":codEspecialidade", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":tipo", $tipo, \PDO::PARAM_STR);


        $this->Db->execute();
    }

}