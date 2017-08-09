<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class EjemploController extends Controller
{
	public function actionSumar($valor1,$valor2)
	{
		$suma = $valor1 + $valor2;
		return view('ejemplo/sumar',['valor' => $suma] );
	}
	public function actionOperarSuma()
	{
		return view('ejemplo/operarsuma');
	}
	public function actionMostrarResultado(Request $request)
	{
		$valor1 = $request->input('numero1');
		$valor2 = $request->input('numero2');
		$suma = $valor1 + $valor2;
		return view('ejemplo/mostrarresultado',['valor' => $suma] );
	}
}
?>