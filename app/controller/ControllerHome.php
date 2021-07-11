<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerHome extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - Pagina Inicial");
        $this->setDir("home");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}