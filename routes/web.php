<?php
Route::get('/', 'IndexController@actionIndex');

//PERSONA
Route::get('/persona/editar/{idPersona?}', 'PersonaController@actionEditar')->where(['idPersona' => '[0-9]*']);



?>