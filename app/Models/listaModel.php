<?php

namespace App\Models;

use CodeIgniter\Model;

class listaModel extends Model
{
    public function returnLista()
    {
        return
        
        $array = array(
            "Nombre" => "Luis ",
            "Apellido" => "Sierra",
            "Edad" => "30",
        );
    

    }
    
}