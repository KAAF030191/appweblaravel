<?php
Route::get('/', 'IndexController@actionIndex');
Route::get('/persona/editar/{idPersona?}','PersonaController@actioneditar')->where(['idPersona'=>'[0-9]*']);
Route::get('ejemplo/sumar/{parametro1}/{parametro2}','EjemploController@actionesumar')->where(['parametro1'=>'[0-9]','parametro2'=>'[0-9]']);
?>
