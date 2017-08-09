<?php

namespace App\Http\Controllers;

class EjemploController extends Controller
{
	public  function actionSumar($valora,$valorb)
	{
		# code...
		
		$sumar=$valora + $valorb;
		return view('ejemplo/sumar',['sumar'=>$sumar]);
	}

}
