@extends('templates.template')
 @section('cuerpoGeneral')
    <form class="" action="{{url('persona/insertar')}}" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" value="">
      <input type="submit" name="" value="Guardar Datos">
      {{csrf_field()}}
    </form>

<style media="screen">
#mostrar{
    background-color: #00ff00;

}
b {
    color: #CC0000;
    }
</style>
<div id="mostrar" style="border: 1px solid #999999; margin: 5px ">
   <b>Nombre:{{$nombre or ' '}} </b> <br>
    <b>Apellido:{{$apellido or ' '}} </b> </div>
@endsection
