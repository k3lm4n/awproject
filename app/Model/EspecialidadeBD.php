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

    public function insert($data)
    {
        $tipo = $data['tipo'];
        $query = "INSERT INTO tb_especialidade ( `Tipo`) VALUES ('$tipo')";
        if (mysqli_query($this->connectionDB(), $query)) {
            echo json_encode("Sucesso!!");
        } else {
            echo json_encode("ERROR: Hush! Sorry $query. ". mysqli_error($this->connectionDB()));
        }
    }

    public function ListarEspecialidade()
    {
        $query = $this->connectionDB()->query("SELECT * FROM tb_especialidade");

        echo json_encode($query->fetch_all(MYSQLI_ASSOC));
    }
}
