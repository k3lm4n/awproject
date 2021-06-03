<?php

namespace App;

use Src\classes\ClassRoutes;

class Dispatch extends ClassRoutes
{
    #Attr

    private  $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod()
    {
        return $this->Method;
    }
    public function setMethod($Method)
    {
        $this->Method = $Method;
    }
    protected function getParam()
    {
        return $this->Param;
    }
    public function setParam($Param)
    {
        $this->Param = $Param;
    }

    public function __construct()
    {
        self::AddController();
    }
    #Metodo de Adicao de Controller
    private function AddController()
    {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;

        if (isset($this->parseUrl()[1])) {
            self::AddMethod();
        }
    }

    #Metodo de Adicao de Metodo de Controller
    private function AddMethod()
    {
        if (method_exists($this->Obj, $this->parseUrl()[1])) {
            $this->setMethod("{$this->parseUrl()[1]}");
            self::AddParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        }
    }
    #Metodo de Adicao de Parametro de Controller
    private function AddParam()
    {
        $contArray = count($this->parseUrl());
        if ($contArray > 2) {
            foreach ($this->parseUrl() as $Key => $value) {
                if ($Key > 1) {
                    $this->setParam($this->Param += [$Key => $value]);
                }
            }
        }
    }
}
