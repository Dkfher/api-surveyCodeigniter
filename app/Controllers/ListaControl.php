<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\listaModel;

class ListaControl extends Controller
{
    public function index()
    {

        $model = new listaModel();
        
        $data['datos'] = $model->returnLista();
        return view('lista', $data );
        
        
    }

   
}