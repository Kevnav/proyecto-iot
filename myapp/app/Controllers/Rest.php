<?php

namespace App\Controllers;
use App\Models\estacion;

class Rest extends BaseController
{
    public function index(){
        return "<h1>primer intento </h1><h2>Prueba</h2>";
    }

    public function listar(){
        $model = new estacion();
        $array = $model->findAll();
        echo '<pre>'; 
        print_r($array); 
        echo '</pre>';
    }

    public function espPost(){
     if ($this->request->getPost()){ 
            $model = new Dht11();
            $data=[ 
                'temperatura'=>$this->request->getVar('temperatura'),
                'humedad'=>$this->request->getVar('humedad'),
                'presion'=>$this->request->getVar('presion'),
                'altitud'=>$this->request->getVar('altitud'),
            ];
            $model->insert($data);
            return "201";
        }
            return "401"; 
    }
}