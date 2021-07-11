<?php

namespace App\Model;

use App\Model\ClassConnection;


class MedicoBD extends ClassConnection
{

    private $Db;


    protected function RegistroMedico($Nome, $SobreNome, $username, $password, $Esp, $Sexo, $CentroReg, $Experiencia)
    {
        $Id = 0;

        $this->Db = $this->connectionDB()->prepare("INSERT INTO `tb_medico` VALUES (:codMed, :nomeMed, :sobreMed, :sexo, :experiencia, :codEsp, :centroReg, :username, :password)");
        $this->Db->bindParam(":codMed", $Id, \PDO::PARAM_INT);
        $this->Db->bindParam(":nomeMed", $Nome, \PDO::PARAM_STR);
        $this->Db->bindParam(":sobreMed", $SobreNome, \PDO::PARAM_STR);
        $this->Db->bindParam(":sexo", $Sexo, \PDO::PARAM_STR);
        $this->Db->bindParam(":experienca", $Experiencia, \PDO::PARAM_STR);
        $this->Db->bindParam(":codEsp", $Esp, \PDO::PARAM_INT);
        $this->Db->bindParam(":centroReg", $CentroReg, \PDO::PARAM_STR);
        $this->Db->bindParam(":username", $username, \PDO::PARAM_STR);
        $this->Db->bindParam(":password", $password, \PDO::PARAM_STR);
        $this->Db->execute();
    }
    public function insert($data)
    {



        $nome = $data['nome'];
        $sobrenome = $data['sobre'];
        $sexo = $data['sexo'];
        $experiencia = $data['expe'];
        $especialidade = $data['espe'];
        $centroReg = $data['centro'];
        $especialidade = $data['espe'];
        $username = $data['user'];
        $password = $data['pass'];
        $query = "INSERT INTO `tb_medico`( `nomeMed`, `sobreMed`, `sexo`, `experiencia`, `especialidade`, `centroReg`, `username`, `password`) VALUES ('$nome','$sobrenome','$sexo','$experiencia','$especialidade','$centroReg','$username','$password')";
        if (mysqli_query($this->connectionDB(), $query)) {
            echo json_encode("Sucesso!!");
        } else {
            echo json_encode("ERROR: Hush! Sorry $query. "
                . mysqli_error($this->connectionDB()));
        }
    }

    public function ListarMedico()
    {
        $query = $this->connectionDB()->query("SELECT * FROM tb_medico");

        echo json_encode($query->fetch_all(MYSQLI_ASSOC));

       /* while ($paciente = $query->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $paciente['nomeMed'] . "</td>";
            echo "<td>" . $paciente['sobreMed'] . "</td>";
            echo "<td>" . $paciente['experiencia'] . "</td>";
            echo "<td>" . $paciente['sexo'] . "</td>";
            echo "<td>" . $paciente['especialidade'] . "</td>";
            echo "<td>" . $paciente['centroReg'] . "</td>";
            echo "<td colspan=\"2\">" . "<a id=\"idlock\" class=\" btn btn-outline-warning\" href=\"#\" data-action=" . DIRPAGE . "AdminMenu\updateMed\" data-id=" . $paciente['codMed'] . " style=\"margin-right: 5px;\">Editar</a>";
            echo "<a id=\"idlock\" class=\" btn btn-outline-danger\" href=\"#\" data-action=" . DIRPAGE . "AdminMenu/deleteMed/" . $paciente['codMed'] . ">Eliminar</a></td>";
            echo "</tr>";
        }*/
    }
}

/*
class TableRows extends \RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDBPDO";

try {
    $conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    foreach (new TableRows(new \RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
        echo $v;
    }
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
*/