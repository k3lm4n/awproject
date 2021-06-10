<?php

namespace App\Controller;


use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;


use App\Model\PacienteBD as ModelRegistroPaciente;

class ControllerRegistroPaciente 
{



    protected $nome;
    protected $sobrenome;
    protected $DataNasc;
    protected $Sexo;
    protected $Endereco;





    public function __construct()
    {

        $Render = new ClassRender();
        $Render->setTitle("MedCon - Registro Paciente");
        $Render->setDescription("MedCon");
        $Render->setKeywords("WebApps");
        $Render->setDir("RegistroPaciente");
        $Render->renderLayout();
        $this->ListaPaciente();
        
    }



    private function recVariaveis()
    {
        if (isset($_POST['nome'])) {
            $this->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['sobrenome'])) {
            $this->sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['datanasc'])) {
            $this->DataNasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['sexo'])) {
            $this->Sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['endereco'])) {
            $this->Endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
    public function Registrar()
    {
        
        $this->recVariaveis();
    
        //$this->PacienteBD->RegistroPaciente($this->nome, $this->sobrenome, $this->DataNasc, $this->$Sexo, $this->Endereco);
    }
}