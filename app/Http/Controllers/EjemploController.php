<?php
namespace App\Http\Controllers;

class EjemploController extends Controller
{
	public function actionSumar($numeroUno, $numeroDos)
	{
		$resultado=$numeroUno+$numeroDos;

		return view('ejemplo/sumar', ['resultado' => $resultado]);
	}
}
?>