<?php

namespace App\Http\Controllers;

class PersonaController extends Controller
{
	public  function actionEditar($idPersona)
	{
		# code...
		//echo $idPersona;exit;
		return view('persona/editar',['idPersona'=>$idPersona]);
	}

}
