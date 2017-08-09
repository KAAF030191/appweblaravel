<?php
namespace App\http\controllers;

class PersonaController extends Controller 
{
	public function actionEditar($idPersona=null)
	{
		return view('persona/editar', ['idPersona' => $idPersona]);
	}
}

?>