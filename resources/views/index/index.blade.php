@extends('template.templategeneric')
@section('cuerpoGeneral')
<b>Holaaaa!!!!!</b>
<br><br>
<?php
$nombre='Juan';

echo 'Hola $nombre';
echo '<br>';
echo "Hola $nombre";
?>
<br><br>
{{'Este es $nombre'}}
<br>
{{"Este es $nombre"}}
@endsection