<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
	public function actionSumar($numeroUno, $numeroDos)
	{
		$resultado=$numeroUno+$numeroDos;

		return view('ejemplo/sumar', ['resultado' => $resultado]);
	}

	public function actionOperarSuma()
	{
		return view('ejemplo/operarsuma');
	}

	public function actionMostrarResultado(Request $request)
	{
		$n1=$request->input('txtNumeroUno');
		$n2=$request->input('txtNumeroDos');

		$resultado=$n1+$n2;

		return view('ejemplo/mostrarresultado', ['resultado' => $resultado]);
	}
}
?>