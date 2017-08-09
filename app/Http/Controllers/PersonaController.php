<?php
namespace App\Http\Controllers;

class PersonaController extends Controller
{
	public function actionIndex()
	{
		return view('index/index');
	}
	public function actionEditar($idPersona=null)
	{
		//echo $idPersona; exit;
		return view('persona/editar',['valor' => $idPersona]);
	}
}
?>