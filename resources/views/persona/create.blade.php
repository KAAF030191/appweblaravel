@extends('templates.template')
 @section('cuerpoGeneral')
<form action="{{url('persona/insertar')}}" class="" method="post">
    <div class="row">
        <div class="col-sm-4"> 
            <label class="control-label" for="nombre">Nombre</label>
              <input class="form-control" name="nombre" type="text" value="">          
        </div>

        <div class="col-sm-4">
          <label for="apellido">Apellido</label>
        
         <div> 
            <input class="form-control" name="apellido" type="text" value="">
          </div>

        </div>
       
        <div class="col-sm-4">
          <label for=""></label>
            <div>
              {{csrf_field()}}
              <input class="form-control btn btn-primary btn btn-xs" name="" type="submit" value="Guardar Datos">
            </div>  
        </div>
        
       
    </div>
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
    <b>
        Nombre:{{$nombre or ' '}}
    </b>
    <br>
        <b>
            Apellido:{{$apellido or ' '}}
        </b>
    </br>
</div>
@endsection
