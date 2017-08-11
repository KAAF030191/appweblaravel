<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
	public function actionInsertar(Request $request)
	{
		if($_POST)
		{
			$nombre = $request->input('txtNombre');
			$apellido = $request->input('txtApellido');	
			return view ('persona/insertar',['nombre' => $nombre,'apellido' => $apellido]);
		}
		return view('persona/insertar');
	}
}
?>