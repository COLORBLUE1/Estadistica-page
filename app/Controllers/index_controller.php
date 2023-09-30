<?php

namespace App\controllers;
use App\Models\usuario;


class index_controller extends BaseController{

    protected $usuario;

    public function index()
    {
       
         return view('Dashboard/escritorio');
    
    }
}