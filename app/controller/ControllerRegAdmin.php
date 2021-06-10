<?php

namespace App\Controller;

use App\Model\AdminBD;
use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
use App\Controller\Framework;


class ControllerRegAdmin 
{



    protected $nome;
    protected $sobrenome;
    protected $username;
    protected $password;
    protected $frame;




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
        
        $this->recVariaveis();
    
        //$this->AdminBD->RegistroAdmins($this->nome, $this->sobrenome, $this->username, $this->password);
    }
}
