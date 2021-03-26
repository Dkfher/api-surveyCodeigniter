<?php

namespace App\Models;

use CodeIgniter\Model;

class Saludo extends Model
{
    public function returnSaludo()
    {
        return "hola mundillo cruelillo";
    }
    public function returnMsg()
    {
        return "un mensaje para todo el mundo";
    }
}