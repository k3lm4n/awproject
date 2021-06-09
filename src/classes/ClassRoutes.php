<?php

namespace Src\classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes
{
    use TraitUrlParser;
    private $Rota;

    public function getRota()
    {
        $url = $this->parseUrl();
        $I = $url[0];
        $this->Rota = array(
            "" => "ControllerHome",
            "home" => "ControllerHome",
            "sitemap" => "ControllerSiteMap",
            "MarcarConsulta" => "ControllerMarcarConsulta",
            "DashBoard" => "ControllerDashBoard",
            "RegAdmin" => "ControllerRegAdmin",
            "MarcarConsulta" => "ControllerMarcarConsulta",
            "RegPac"=>"ControllerRegistroPaciente"
            
        );
        if (array_key_exists($I, $this->Rota)) {
            if (file_exists(DIRREQ . "app/controller/{$this->Rota[$I]}.php")) {
                return $this->Rota[$I];
            } else {
                return "ControllerHome";
            }
        } else {
            return "Controller404";
        }
    }
}
