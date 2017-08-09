<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PersonaController extends Controller
{
  public function actioneditar($idPersona=null)
  {
    return view('persona.editar',['idPersona'=>$idPersona]);
  }
  public function actionesumar($parametro1,$parametro2)
  {
    return view('persona.sumar',['parametro1'=>$parametro1,'parametro2'=>$parametro2]);
  }

}
