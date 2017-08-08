<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonaController extends Controller
{
    public function ActionEditar($idPersona=null)
    {
		return view('persona/editar', ['idPersona' => $idPersona]);
    }
}
