<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {   
        $data['titulo'] = "Home";
        return view('home/index',$data);
    }

    public function admin()
    {   
        $data['titulo'] = "Home";
        return view('home/admin',$data);
    }
    public function funcionarios() 
    {   
        $data['titulo'] = "Home";
        return view('home/funcionarios',$data);
    }

}
