<?php
Route::get('/', 'IndexController@actionIndex');


//PERSONA
Route::get('/persona/editar/{idPersona?}','PersonaController@actionEditar')->where(['idPersona'=>'[0-9]{1,3}']);

//EJEMPLO
Route::get('/ejemplo/sumar/{nro1}/{nro2}','EjemploController@actionSumar')->where(['nro1'=>'[0-9]*'],['nro2'=>'[0-9]*']);
?>