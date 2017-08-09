<?php
namespace App\http\controllers;

class EjemploController extends Controller 
{
	public function actionsumar($numerouno,$numerodos)
	{
		$resultado=$numerouno+$numerodos;
		return view('ejemplo/sumar', ['resultado' = $resultado]); 
	}
}

?>