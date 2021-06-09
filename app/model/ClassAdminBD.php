<?php

namespace App\model;

use App\model\ClassConnection;



class AdminBD extends ClassConnection
{

    private $Db;
    use ClassConnection;
    public function RegistroAdmins($Nome, $SobreNome,$username,$password)
    {  
        $this->Db = $this->connectionDB()->prepare("INSERT INTO tb_admin (nome, sobrenome, username, password) VALUES ( ?,?,?,?)");
        $this->Db->execute(array($Nome, $SobreNome, $username, $password));
    }
}
