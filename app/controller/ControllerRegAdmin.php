<?php

namespace App\Controller;




use App\Model\AdminBD;
use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
use App\Model\MedicoBD;

class ControllerRegAdmin 
{



    protected $nome;
    protected $sobrenome;
    protected $username;
    protected $password;
    protected $frame;
    use \Src\Traits\TraitUrlParser;




    public function __Construct()
    {

        
            $Render = new ClassRender;
            $Render->setTitle("MedCon - Registro Administrador");
            $Render->setDescription("MedCon");
            $Render->setKeywords("WebApps");
            $Render->setDir("RegistroAdmin");
            $Render->renderLayout();
        
    }


    public function postMed()
    {
        $data = $_POST;
        $medico = new MedicoBD();
        $medico->insert($data);
    }

    public function deleteMed(array $data)
    {

        $callback["data"] = $data;
        echo json_encode($data);
    }

    public function updateMed()
    {
    }

    public function getMedicos()
    {
        $medico = new MedicoBD();
        $medico->ListarMedico();
    }
}
