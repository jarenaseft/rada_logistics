<?php

namespace App\Controllers;

use App\Models\CatalogoModel;
use App\Models\JugadoresModel;
use App\Models\TorneosModel;

class Home extends BaseController
{
    public function index()
    {
        if(isset($lang)){
            $data["idioma"] = $lang; 
         }else{
             $data["idioma"] = ""; 
         }
        echo view('templates/header');
        echo view('home/index');
        echo view('templates/footer',$data);



        //return view('sidebar');

    }

    public function home($lang='en')
    {
        if(isset($lang)){
            $data["idioma"] = $lang; 
         }else{
             $data["idioma"] = ""; 
         }
        echo view('templates/header');
        echo view('home/index');
        echo view('templates/footer',$data);



        //return view('sidebar');

    }

    public function about_me($lang='en')
    {

        if(isset($lang)){
           $data["idioma"] = $lang; 
        }else{
            $data["idioma"] = ""; 
        }
        echo view('templates/header');
        echo view('about_me/about_me');
        echo view('templates/footer',$data);



        //return view('sidebar');

    }

    public function contact($lang='en')
    {

        if(isset($lang)){
            $data["idioma"] = $lang; 
         }else{
             $data["idioma"] = ""; 
         }
        echo view('templates/header');
        echo view('contact/index');
        echo view('templates/footer',$data);



        //return view('sidebar');

    }

    public function email()
    {

        $data["mensaje"] = "orem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat rhoncus elit varius dictum. Ut semper ante nec congue facilisis. Nulla aliquam lacus id erat rutrum mollis. Suspendisse viverra justo sed lorem tincidunt vehicula sit amet eu velit. Morbi sodales, nunc a convallis eleifend, metus massa lobortis erat, facilisis dapibus arcu lectus eget ex. Nullam metus risus, pharetra non sollicitudin ac, efficitur vitae mauris. Donec pulvinar, augue non feugiat posuere, tortor tortor blandit tortor, ut placerat metus elit at nisl. Suspendisse potenti. Donec quis est vulputate, convallis mi vel, efficitur orci. V";
        $data["correo"] = "email@prueba.com";
        $data["tel"] = "6642647819";
        echo view('contact/email_template',$data);


        //return view('sidebar');

    }




    //eliminaCiclo
}
