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
    protected function ListaPaciente()
    {
        $this->Db = $this->connectionDB()->query("SELECT * FROM tb_pacientes");
        $pacientes = $this->Db;
        foreach ($pacientes as $paciente) {
            echo "<tr>
                    <th scope=\"row\">{$paciente["codPac"]}</th>
                    <td>{$paciente["nome"]}</td>
                    <td>{$paciente["sobrePac"]}</td>
                    <td>{$paciente["datanasc"]}</td>
                    <td>{$paciente["sexo"]}</td>
                    <td>{$paciente["endereco"]}</td>
                   
                </tr>";
        }
    }
}
