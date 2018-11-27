@extends('persa.inicio')
@section('contenido')

<link type="text/css" href="karen.css" rel="stylesheet">
    <head><h1><center>Registro Clientes</center></h1></head>
	<div class="testbox">
    <center>
 <form action =  "{{route('guardacliente')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}
    @if($errors->first('idc')) 
    <i> {{ $errors->first('idc') }} </i> 
    @endif  <br>
    Clave
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name = 'idc' value="{{$idcs}}" readonly ='readonly'>
    <br>
    @if($errors->first('nombre')) 
    <i> {{ $errors->first('nombre') }} </i> 
    @endif  <br>
    <div class="form-group">
    Nombre
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='nombre' placeholder="Escriba el Nombre" value="{{old('nombre')}}">
    </div>
    <br>

    @if($errors->first('ap_cli')) 
    <i> {{ $errors->first('ap_cli') }} </i> 
    @endif  <br>
    <div class="form-group">
    Apellido Paterno
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='ap_cli' placeholder="Escriba Apellido Paterno" value="{{old('ap_cli')}}">
    </div><br>

    @if($errors->first('am_cli')) 
    <i> {{ $errors->first('am_cli') }} </i> 
    @endif  <br>
    <div class="form-group">
    Apellido materno
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='am_cli' placeholder="Escriba Apellido Materno" value="{{old('am_cli')}}">
    </div>
    <br>

    @if($errors->first('edad')) 
    <i> {{ $errors->first('edad') }} </i> 
    @endif  <br>
    <div class="form-group">
    Edad
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type  ='text' name ='edad'  placeholder="Escriba la edad" value="{{old('edad')}}">
    </div>
    <br>

    @if($errors->first('direccion')) 
    <i> {{ $errors->first('direccion') }} </i> 
    @endif  <br>
    <div class="form-group">
    Dirección 
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='direccion'  placeholder="Escriba su Dirección" value="{{old('direccion')}}">
        <br>
        <br>
    <div class="form-group">
        Seleccione Municipio
		<br>
		<label id="icon" for="name"><i class="icon-envelope "></i></label>
		<select name = 'idmun' >
            
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
	<input type = 'text' name = 'cp' placeholder="Escriba su Codigo Postal" value="{{old('cp')}}" >
    </div>
    @if($errors->first('telefono')) 
    <i> {{ $errors->first('telefono') }} </i> 
    @endif  <br>
    <div class="form-group">
    Telefono
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='telefono' placeholder="Escriba su telefono" value="{{old('telefono')}}">
    </div>
    <br>
    @if($errors->first('correo')) 
    <i> {{ $errors->first('correo') }} </i> 
    @endif  <br>
    <div class="form-group">
    Correo Electrónico
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text'name = 'correo' placeholder="Escriba su correo" value="{{old('correo')}}" >
    </div>
    <br>

    @if($errors->first('archivo')) 
    <i> {{ $errors->first('archivo') }} </i> 
    @endif  <br>
    <div class="form-group">
    Foto
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type='file' name ='archivo' placeholder="Seleccione una imagen">
    </div>
    <br>

    <input type="submit" value="Registrar"> <input type="reset" value="Borrar">

</form>
</div>
@stop