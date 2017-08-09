<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
	public  function actionSumar($valora,$valorb)
	{
		# code...
		
		$sumar=$valora + $valorb;
		return view('ejemplo/sumar',['sumar'=>$sumar]);
	}

	public  function actionOperarSuma()
	{
		return view ('ejemplo/operarsuma');
	}

	public function actionMostrarResultado(Request $request)
	{
		$numero1=$request->input('txtnumero1');
		$numero2=$request->input('txtnumero2');

		$resultado = $numero1 + $numero2;

		return view ('ejemplo/mostrarresultado',['resultado'=>$resultado]);

	}

}
