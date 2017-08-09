<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EjemploController extends Controller
{
  public function actionesumar($parametro1,$parametro2)
  {
   $Resultado=$parametro1+$parametro2;

        return view('ejemplo.sumar',['Resultado'=>$Resultado]);
  }

}
