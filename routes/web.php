<?php
Route::get('/', 'IndexController@actionIndex');

//Route::get('/persona/editar/{idPersona}', 'PersonaController@actionEditar');
//Route::get('/persona/editar/{idPersona}', 'PersonaController@actionEditar')->where(['idPersona' => '[0-9]{1,3}+']);
Route::get('/persona/editar/{idPersona?}', 'PersonaController@actionEditar')->where(['idPersona' => '[0-9]*']);

Route::get('/persona/insertar/', 'PersonaController@actionInsertar');
Route::post('/persona/insertar/', 'PersonaController@actionInsertar');



Route::get('/ejemplo/sumar/{valor1}/{valor2}/', 'EjemploController@actionSumar')->where(['valor1' => '[0-9]+'],['valor2' => '[0-9]+']);

Route::get('/ejemplo/operarsuma/', 'EjemploController@actionOperarSuma');

Route::post('/ejemplo/mostrarresultado/', 'EjemploController@actionMostrarResultado');

?>