<?php
Route::get('/', 'IndexController@actionIndex');


//editar

Route::get('/persona/editar/{idPersona}','PersonaController@actionEditar');
?>