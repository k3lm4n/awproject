<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerMarcarConsulta extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - Marcação de Consulta");
        $this->setDir("MarcarConsulta");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}