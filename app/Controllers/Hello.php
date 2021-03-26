<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Saludo;

class Hello extends Controller
{
    public function index()
    {
        $model = new Saludo();
        
        $data['title'] = $model->returnSaludo();
        $data['msg'] = $model->returnMsg();
        return view('holaMundo', $data );
        
        // echo("This Controller");
    }

   
}