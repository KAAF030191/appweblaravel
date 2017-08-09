<?php
Route::get('/', 'IndexController@actionIndex');

//persona
Route::get('/persona/editar/{idPersona?}', 'PersonaController@actionEditar')->where(['idPersona' =>'[0-9]{1,3}']);
//sumar
Route::get('/ejemplo/sumar/{numerouno}/{numerodos}','SumarController@ationSumar');
?>