<?php
namespace App\http\controllers;

class EjemploController extends Controller 
{
	public function actionsumar($idSumar=null)
	{
		return view('ejemplo/sumar', ['idSumar' => $idSumar]);
	}
}

?>