<?php
Route::get('/', 'IndexController@actionIndex');


//editar

Route::get('/persona/editar/{idPersona?}','PersonaController@actionEditar')->where(['idPersona' => '[0-9]*']);

//sumar

Route::get('/ejemplo/operarsuma','EjemploController@actionOperarSuma');

//mostrarresultado
Route::post('/ejemplo/mostrarresultado','EjemploController@actionMostrarResultado');


?>