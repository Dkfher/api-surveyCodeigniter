<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\RestSurveyModel;

class RestSurvey extends ResourceController
{
    protected $modelName = 'App\Models\RestSurveyModel';
    protected $format    = 'json';

    public function index()
    {
        // $model = new RestSurveyModel();
        // echo $model->getDB();
        // $results = $this->model->getDB();

        // foreach ($results as $row)
        // {
        //     echo $row->idUser;
        //     echo $row->name;
        // }

        // echo 'Total Results: ' . count($results);
         return $this->respond($this->model->getDB());
    }

    public function show($idUser = null)
    {

        if($idUser== null){
            return $this->respond(array(null, "ID del usuario no encontrado"));
        }
        // return $this->respond($this->model->findAll());
        return $this->respond($this->model->addDB());
    }
    
    private function genericResponse($data, $msj, $code)
    {
 
        if ($code == 200) {
            return $this->respond(array(
                "data" => $data,
                "code" => $code
            )); //, 404, "No hay nada"
        } else {
            return $this->respond(array(
                "msj" => $msj,
                "code" => $code
            ));
 }
}
}