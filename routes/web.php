<?php

Route::get('/', 'IndexController@actionIndex');
Route::get('/persona/editar/{idPersona?}','PersonaController@actioneditar')->where(['idPersona'=>'[0-9]*']);
Route::get('ejemplo/sumar/{parametro1}/{parametro2}','EjemploController@actionesumar')->where(['parametro1'=>'[0-9]','parametro2'=>'[0-9]']);
Route::get('ejemplo/operarSuma','EjemploController@actionoperarSuma');
Route::post('ejemplo/mostrarResultado','EjemploController@actionomostrarResultado');
//persona
//Route::math(['get','post'],'/persona/insertar','PersonaController@actionInsertar');
Route::get('/persona/insertar','PersonaController@actionInsertar');
Route::post('/persona/insertar','PersonaController@actionInsertar');

?>
