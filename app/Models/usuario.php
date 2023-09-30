<?php 

namespace App\Models;
use CdeIgniter\Model;

class usuario extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id';

    public function buscarusuarioporemail($email)
    {
        $db =db_connect();
        $buider = $db->table($this->table)->where('email', $email);
        $resultado = $builder->get();
        return $resultado->getResult()? $resultado->getResult()[0]: false;
    }
    public function buscarusuarios($usuario){ 
    $db = db_connect();
    $buider = $db->table($this->table)->where('usuario', $usuario);
    $resultado = $builder->get();
    return $resultado->getResult() ? $resultado->getResult()[0]: false;
    }

}