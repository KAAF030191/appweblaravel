<?php
namespace App\Http\Controllers;

class EjemploController extends Controller
{
	public function actionSumar($valor1,$valor2)
	{
		$suma = $valor1 + $valor2;
		return view('ejemplo/sumar',['valor' => $suma] );
	}
}
?>