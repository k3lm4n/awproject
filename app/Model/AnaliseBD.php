<?php

namespace App\Model;

use App\Model\ClassConnection;


class AnaliseBD extends ClassConnection
{
    
    private $Db;

    protected function RegistroExame($CodMed, $CodEx,$CodPac)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_exame VALUES (:codAnalise, :codPac, :codExame , :codMed)");
        $this->Db->bindParam(":codAnalise", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":codPac", $CodPac, \PDO::PARAM_INT);
        $this->Db->bindParam(":codExame", $CodEx, \PDO::PARAM_INT);
        $this->Db->bindParam(":codMed", $CodMed, \PDO::PARAM_INT);


        $this->Db->execute();
    }

}