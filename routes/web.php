<?php
Route::get('/', 'IndexController@actionIndex');

//PERSONA
Route::match(['get', 'post'], '/persona/insertar', 'PersonaController@actionInsertar');
//Route::get('/persona/editar/{idPersona?}', 'PersonaController@actionEditar')->where(['idPersona' => '[0-9]*']);

//EJEMPLO
Route::get('/ejemplo/sumar/{numeroUno}/{numeroDos}', 'EjemploController@actionSumar')->where(['numeroUno' => '[0-9]+', 'numeroDos' => '[0-9]+']);
Route::get('/ejemplo/operarsuma', 'EjemploController@actionOperarSuma');
Route::post('/ejemplo/mostrarresultado', 'EjemploController@actionMostrarResultado');
?>