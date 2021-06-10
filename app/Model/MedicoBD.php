

<?php

namespace App\Model;

use App\Model\ClassConnection;


class MedicoBD extends ClassConnection
{

    private $Db;

    protected function RegistroPaciente($Nome, $SobreNome, $username, $password, $Esp, $Sexo, $CentroReg, $Experiencia)
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
    protected function ListarMedico()
    {
        $this->Db = $this->connectionDB()->prepare("SELECT * FROM tb_medico;");
    }
}


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
