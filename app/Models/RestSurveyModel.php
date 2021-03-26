<?php namespace App\Models;
 
use CodeIgniter\Model;
use CodeIgniter\Config\Config;

class RestSurveyModel extends Model
{
    

    public function getData()
    {
        return
                $array = array(
                    "Nombre" => "Luis ",
                    "Apellido" => "Sierra",
                    "Edad" => "25",
                );
    }

    public function getDB()
    {
        $db = \Config\Database::connect();
        $query = $db->query('select idUser, name from users');
        if ($query)
        {

            return $results = $query->getResult();
        }
        else
        {
            echo "Query failed!";
        }
    }
    
    public function addDB()
    {
        $data = array(
            'name' => 'Juan',
            'lastName' => 'Gutierrez',
            'ranking' => '3',
            'obser' => 'sirve'
        );
        $db = \Config\Database::connect();
        $results = $db -> table('users')->insert($data);
        return $results;
    }
}