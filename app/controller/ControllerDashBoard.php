<?php
namespace App\Controller;

use Src\classes\ClassRender;
use Src\interfaces\InterfaceView;
class ControllerDashBoard extends ClassRender implements InterfaceView {

    public function __construct()
    {
        $this->setTitle("MedCon - DashBoard");
        $this->setDir("DashBoardAdmin");
        $this->setDescription("MedCon");
        $this->setKeywords("WebApps");
        $this->renderLayout();
    }
    
}