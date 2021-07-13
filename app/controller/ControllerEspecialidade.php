<?php
namespace App\Controller;

use App\Model\EspecialidadeBD;

class ControllerEspecialidade extends EspecialidadeBD {

    
    public function post()
    {
        $data = $_POST;
        echo json_encode(var_dump($data['tipo']));
        $this->insert($data);
    }

    public function get()
    {
       $this->ListarEspecialidade();
    }

    public function put()
    {
    }

    public function delete()
    {
    }
    
}