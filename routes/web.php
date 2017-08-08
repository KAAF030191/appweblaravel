<?php
Route::get('/', 'IndexController@actionIndex');

//Persona
Route::get('/persona/editar/{idPersona?}', 'PersonaController@ActionEditar')->where(['idPersona' => '[0-9]*']);

Route::get('/ejemplo/sumar/{numero1}/{numero2}', 'EjemploController@ActionSumar')->
			where(['numero1' => '[0-9]+', 'numero2' => '[0-9]+']);
?>