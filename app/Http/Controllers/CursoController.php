<?php

namespace App\Http\Controllers;

use Exception;
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
    public function resta(){
        $x=15;
        $y=10;
        return $x-$y;
    }
    public function multiplicacion(){
        $x=15;
        $y=4;
        return $x*$y;
    }
    public function division() {
        try {
            $x = 15845;
            $y = 8;
            if ($y == 0) {
                throw new Exception("No se puede dividir entre cero");
            }
            return $x / $y;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function sumar($x,$y){
        return $x+$y;
    }
}
