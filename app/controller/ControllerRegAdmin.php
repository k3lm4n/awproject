<?php

namespace App\Controller;


use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
use App\Model\AdminBD;


class ControllerRegAdmin extends AdminBD
{



    protected $nome;
    protected $sobrenome;
    protected $username;
    protected $password;





    public function __Construct()
    {

        $Render = new ClassRender;
        $Render->setTitle("MedCon - Registro Administrador");
        $Render->setDescription("MedCon");
        $Render->setKeywords("WebApps");
        $Render->setDir("RegistroAdmin");
        $Render->renderLayout();
    }



    private function recVariaveis()
    {
        if (isset($_POST['nome'])) {
            $this->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['sobrenome'])) {
            $this->sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['username'])) {
            $this->username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['password'])) {
            $this->password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }




    public function Registrar()
    {
        $Reg = new AdminBD;
        $this->recVariaveis();
        $this-> RegistroAdmins($this->nome, $this->sobrenome, $this->username, $this->password);
    }
}
