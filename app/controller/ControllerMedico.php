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
    }

    public function delete()
    {
    }
}
