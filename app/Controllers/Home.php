<?php

namespace App\Controllers;

use App\Models\CatalogoModel;
use App\Models\JugadoresModel;
use App\Models\TorneosModel;

class Home extends BaseController
{
    public function index()
    {

        echo view('templates/header');
            echo view('home/index');
            echo view('templates/footer');



        //return view('sidebar');

    }

    public function about_me()
    {

        echo view('templates/header');
            echo view('about_me/about_me');
            echo view('templates/footer');



        //return view('sidebar');

    }




    //eliminaCiclo
}
