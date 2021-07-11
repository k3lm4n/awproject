<?php

namespace App\Model;

use App\Model\ClassConnection;



class AdminBD extends ClassConnection
{

    private $Db;

    public function RegistroAdmin($Nome, $SobreNome, $username, $password)
    {
        
        /*
        $Id = 0;
        $sql = ("INSERT INTO tb_admin (codAdmin, nome, sobrenome, username, password) VALUES (?,?,?,?,?)");
        $this->Db = $this->connectionDB()->prepare($sql);
        $this->Db->bindParam("1",$Id,\PDO::PARAM_INT);
        $this->Db->bindParam("2",$Nome,\PDO::PARAM_STR);
        $this->Db->bindParam("3",$SobreNome,\PDO::PARAM_STR);
        $this->Db->bindParam("4",$password,\PDO::PARAM_STR);
        $this->Db->execute();
*/
        $bd = $this->connectionDB();

        try {
            $stmt = $bd->prepare("INSERT INTO tb_admin (`nome`, `sobrenome`, `username`, `password`) values(?,?,?,?)");
            
        } catch (\Exception $e) {
            echo $e->getMessage();
        } finally {

            $stmt->close();
        }
    }
}
