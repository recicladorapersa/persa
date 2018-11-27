@extends('persa.inicio')


@section('contenido')


<link type="text/css" href="tostadita1.css" rel="stylesheet">
<head><h1><center><img src="https://img.icons8.com/ios/50/000000/client-company.png">Registro Empleados</center></h1></head>
    <title>Empleados</title>
	
	<div class="testbox">
    <center>
 <form action =  "{{route('guardaempleado')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}
    @if($errors->first('idem')) 
    <i> {{ $errors->first('idem') }} </i> 
    @endif  <br>
    Clave
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name = 'idem' value="{{$idems}}" readonly ='readonly' required>
    <br>
    @if($errors->first('nombre')) 
    <i> {{ $errors->first('nombre') }} </i> 
    @endif  <br>
    <div class="form-group">
    Nombre
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='nombre' placeholder="Escriba el Nombre" value="{{old('nombre')}}" required>
    </div>
    <br>

    @if($errors->first('ap_emp')) 
    <i> {{ $errors->first('ap_emp') }} </i> 
    @endif  <br>
    <div class="form-group">
    Apellido Paterno
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='ap_emp' placeholder="Escriba Apellido Paterno" value="{{old('ap_emp')}}" required>
    </div><br>

    @if($errors->first('am_emp')) 
    <i> {{ $errors->first('am_emp') }} </i> 
    @endif  <br>
    <div class="form-group">
    Apellido materno
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='am_emp' placeholder="Escriba Apellido Materno" value="{{old('am_emp')}}" required>
    </div>
    <br>
    @if($errors->first('direccion')) 
    <i> {{ $errors->first('direccion') }} </i> 
    @endif  <br>
    <div class="form-group">
    Dirección
	<br>
    <label id="icon" for="name"><i class="icon-envelope "></i></label>		
	<input type = 'text' name  ='direccion'  placeholder="Escriba su Dirección" value="{{old('direccion')}}" required>
        <br>
        <br>
    <div class="form-group">
        Seleccione Municipio
		<br>
		<label id="icon" for="name"><i class="icon-envelope "></i></label>	
		<select name = 'idmun' required>
            
            @foreach($municipio as $mun)
            <option value = '{{$mun->idmun}}'>{{$mun->municipio}}</option>
            @endforeach
            
                          </select>
    </div>
    <br>
    @if($errors->first('cp')) 
    <i> {{ $errors->first('cp') }} </i> 
    @endif  <br>
    <div class="form-group">
    Codigo Postal
	<br>
    <label id="icon" for="name"><i class="icon-envelope "></i></label>		
	<input type = 'text' name = 'cp' placeholder="Escriba su Codigo Postal" value="{{old('cp')}}" required>
    </div>
    @if($errors->first('telefono')) 
    <i> {{ $errors->first('telefono') }} </i> 
    @endif  <br>
    <div class="form-group">
    Telefono
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='telefono' placeholder="Escriba su telefono" value="{{old('telefono')}}" required>
    </div>
    <br>

    @if($errors->first('contraseña')) 
    <i> {{ $errors->first('contraseña') }} </i> 
    @endif  <br>
    <div class="form-group">
    Contraseña
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'password' name  ='contraseña' placeholder="Escriba su contraseña" value="{{old('contraseña')}}" required>
    <br>
    <br>
        Activo
		<br>
		<label id="icon" for="name"><i class="icon-envelope "></i></label>	
		<select required="">
        <option value=""></option>
        <option value="1">SI</option>
        <option value="2">NO</option>
    </select> 
    <br>


    @if($errors->first('correo')) 
    <i> {{ $errors->first('correo') }} </i> 
    @endif  <br>
    <div class="form-group">
    Correo Electrónico
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text'name = 'correo' placeholder="Escriba su correo" value="{{old('correo')}}" required>
    </div>
    <br>



    <br>

    @if($errors->first('archivo')) 
    <i> {{ $errors->first('archivo') }} </i> 
    @endif  <br>
    <div class="form-group">
    Foto
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type='file' name ='archivo' placeholder="Seleccione una imagen" required>
    </div>
    <br>

    <input type="submit" value="Registrar"> <input type="reset" value="Borrar">
</div>
</form>
</center>

@stop