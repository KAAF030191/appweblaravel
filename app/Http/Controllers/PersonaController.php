<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cliente\Http\Requests;
class PersonaController extends Controller

{
  public function actionInsertar(Request $request)
  {
    if($_POST)
		{
      $nombre= $request['nombre'];
      $apellido=$request['apellido'];
      return view('persona/create',['nombre'=>$nombre,'apellido'=>$apellido]);
      //return redirect('/persona/insertar');
			}
      return view('persona/create');
  }
  public function actioneditar($idPersona=null)
  {
    return view('persona.editar',['idPersona'=>$idPersona]);
  }
  public function actionesumar($parametro1,$parametro2)
  {
    return view('persona.sumar',['parametro1'=>$parametro1,'parametro2'=>$parametro2]);
  }

}
