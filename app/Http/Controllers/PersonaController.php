<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
	public  function actionEditar($idPersona=null)
	{
		# code...
		//echo $idPersona;exit;
		return view('persona/editar',['idPersona'=>$idPersona]);
	}

	public function actionInsertar(Request $request)
	{
		if($_POST)
		{

			$nombre=$request->input('txtNombre');
			$apellido=$request->input('txtApellido');

			return redirect('/persona/insertar');
		}
			return view ('persona/insertar');

	}



}
