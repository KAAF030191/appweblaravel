<?php

namespace App\Http\Controllers;


class EjemploController extends Controller
{
     public function actionSumar($nro1,$nro2)
    {
    	$resultado=$nro1+$nro2;
    	return view('ejemplo/sumar',['resultado'=>$resultado]);
    
    }
}
