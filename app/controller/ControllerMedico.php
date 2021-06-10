<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerMedico extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - Medico");
        $this->setDir("MedRegistro");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}