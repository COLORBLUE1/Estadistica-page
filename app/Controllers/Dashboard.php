<?php

namespace App\Controllers;


use App\Models\CrudModel;


class Dashboard extends BaseController
{
    /*RUTAS PAGUINAS*/

    public function index()
    {
        return view("Dashboard/escritorio");
    }
    public function examenes()
    {
        return view("Paginas/examenes");
    }
    public function historia()
    {
        return view("Paginas/historia");
    }
    public function ejercicios()
    {
        return view("Paginas/ejercicios");
    }
    public function estadistica_2()
    {
        return view("Paginas/estadistica_2");
    }
    public function ejercicios_2()
    {
        return view("Paginas/ejercicios_2");
    }
    public function carga_historia()
    {
        return view("Paginas/carga_historia");
    }
    public function carga_home()
    {
        return view("Paginas/carga_home");
    }
    public function carga_ejercicios()
    {
        return view("Paginas/carga_ejercicios");
    }


    /*Ruta paginas de ejercicios*/

    public function ejercicios_probabilidad()
    {
        return view("Paginas/ejercicios_probabilidad");
    }
    public function ejercicios_class_variable()
    {
        return view("Paginas/ejercicios_class_variable");
    }
    public function carga_examenes()
    {
        return view("Paginas/carga_examenes");
    }

    public function usuarios_registrados()
    {
        return view("Paginas/usuarios_registrados");
    }
    public function lenguajes_usados()
    {
        return view("Paginas/lenguajes_usados");
    }
    public function Login()
    {
        return view("Login/index");
    }
    public function largo()
    {
        return view("Recursos/sweetalert2.all.min");
    }

    /*RUTAS IMAGENES*/


    public function img1()
    {
        return view("Recursos/img1.png");
    }
    public function img2()
    {
        return view("Recursos/img2.png");
    }
    public function img3()
    {
        return view("Recursos/img3.png");
    }
    public function img4()
    {
        return view("Recursos/img4.png");
    }

    /*RUTAS VIDEOS*/

    public function Ejercicio_1()
    {
        return view("Recursos/Ejercicio_1.mp4");
    }
    public function Ejercicio_2()
    {
        return view("Recursos/Ejercicio_2.mp4");
    }
}
