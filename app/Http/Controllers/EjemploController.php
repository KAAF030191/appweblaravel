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
  public function actionoperarSuma()
  {
        return view('ejemplo.operarSuma');
  }

  public function actionoMostrarResultado(Request $request)
  {
        $numero1=$request['numero1'];
        $numero2=$request['numero2'];
       echo $resultado=$numero1+$numero2;

        return view('ejemplo.mostrarResultado',['resultado'=>$resultado]);
  }


}
