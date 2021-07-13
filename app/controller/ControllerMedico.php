<?php

namespace App\Controller;

use App\Model\MedicoBD;


class ControllerMedico extends MedicoBD
{


    public function post()
    {
        $data = $_POST;
        $medico = new MedicoBD();
        $medico->insert($data);
    }

    public function get()
    {
        $this->ListarMedico();
    }

    public function put()
    {
       $id = $_POST['id'];
        
        echo json_encode($id);
       
    }

    public function delete()
    {
        $id = $_POST['id'];
        
        echo json_encode($_POST['id']); 
        /*
        if(empty($data["id"])){
            return;
        }else{
            $id = filter_var($data["id"],FILTER_VALIDATE_INT);
            $this->eliminar($id);
        }*/
    }
}
