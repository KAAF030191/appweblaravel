<?php

namespace App\Http\Controllers;

class PersonaController extends Controller
{
	public  function actionEditar($idPersona=null)
	{
		# code...
		//echo $idPersona;exit;
		return view('persona/editar',['idPersona'=>$idPersona]);
	}

	public function actioInsertar(Request @requet)
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
