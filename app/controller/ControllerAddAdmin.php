<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;

class ControllerAddAdmin extends ClassRender implements InterfaceView {

    public function __construct()
    {
        
        $this->setTitle("MedCon - Registro Administrador");
        $this->setDir("RegistroAdmin");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
        
       
        
    }
    

}