<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName($name){

        return view('welcome', ['Nombre:'=> $name]);
    }
    public function index(){
        $x=15;
        $y=1584;
        echo 'la suma es: '.$this->sumar($x,$y);
    }
    public function suma(){
        $x=15;
        $y=1584;
        return $x+$y;
    }
    public function sumar($x,$y){
        return $x+$y;
    }
}
