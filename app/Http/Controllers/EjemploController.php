<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EjemploController extends Controller
{
    public function ActionSumar($numero1, $numero2)
    {
    	$resultado = $numero1 + $numero2;

    	return view('ejemplo/sumar', ['resultado' => $resultado]);
    }
}
