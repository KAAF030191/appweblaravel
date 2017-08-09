<?php
Route::get('/', 'IndexController@actionIndex');


//editar

Route::get('/persona/editar/{idPersona}','PersonaController@actionEditar')->where(['idPersona' => '[0-9]+']);
?>