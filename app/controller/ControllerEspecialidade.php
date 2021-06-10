<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerEspecialidade extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - Especialidade");
        $this->setDir("especialidade");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}