<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerConsultas extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - Consultas");
        $this->setDir("ConsultasPen");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}