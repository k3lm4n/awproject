<?php

namespace App\Model;

use App\Model\ClassConnection;


class PacienteBD extends ClassConnection
{

    private $Db;

    protected function RegistroPaciente($Nome, $SobreNome, $DataNasc, $Sexo, $Endereco)
    {
        $Id = 0;
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_paciente VALUES (:codPac, :nomePac, :sobrePac, :dataNasc, :sexo, :endereco)");
        $this->Db->bindParam(":codPac", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":nomePac", $Nome, \PDO::PARAM_STR);
        $this->Db->bindParam(":sobrePac", $SobreNome, \PDO::PARAM_STR);
        $this->Db->bindParam(":dataNasc", $DataNasc, \PDO::PARAM_STR);
        $this->Db->bindParam(":sexo", $Sexo, \PDO::PARAM_STR);
        $this->Db->bindParam(":endereco", $Endereco, \PDO::PARAM_STR);
        $this->Db->execute();
    }
    public function ListaPaciente()
    {
        $query = $this->connectionDB()->query("SELECT * FROM tb_paciente");

        while ($paciente = $query->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $paciente['codPac'] . "</td>";
            echo "<td>" . $paciente['nomePac'] . "</td>";
            echo "<td>" . $paciente['sobrePac'] . "</td>";
            echo "<td>" . $paciente['dataNasc'] . "</td>";
            echo "<td>" . $paciente['sexo'] . "</td>";
            echo "<td>" . $paciente['endereco'] . "</td>";
            echo "<td align=\"center\">" . "<a href=" . DIRPAGE . "RegPacUpdate\\" . $paciente['codPac'] . ">Actualizar</a></td>";
            echo "</tr>";
        }
    }
}
