<?php

namespace App;

use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    #Attr

    private  $Method;
    private $Param=[];
    private $Obj;

    
    public function __construct()
    {
        self::AddController();
    }
    #Metodo de Adicao de Controller
    private function AddController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj=new $NameS;

        if(isset($this->parseUrl()[1])){
            self::AddMethod();
        }

    }

    #Metodo de Adicao de Metodo de Controller
    private function AddMethod()
    {
        if(method_exists($this->Obj,$this->parseUrl()[1])){
           
        }else{
            
        }
    }
    #Metodo de Adicao de Parametro de Controller
    private function AddParam()
    {
    }
}
