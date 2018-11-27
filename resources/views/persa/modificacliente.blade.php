@extends('persa.inicio')
@section('contenido')
<h1>Modifica cliente</h1>
<br>
<link type="text/css" href="karen.css" rel="stylesheet">
<div class="testbox">
<form action =  "{{route('guardamodificac')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('idc')) 
<i> {{ $errors->first('idc') }} </i> 
@endif	<br>
        
Clave
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name = 'idc' value="{{$cliente->idc}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name  ='nombre' value="{{$cliente->nombre}}">
<br>

@if($errors->first('ap_cli')) 
<i> {{ $errors->first('ap_cli') }} </i> 
@endif	<br>

Apellido Paterno
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name  ='ap_cli' value="{{$cliente->ap_cli}}">
<br>
@if($errors->first('am_cli')) 
<i> {{ $errors->first('am_cli') }} </i> 
@endif	<br>

Apellido Materno
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name  ='am_cli' value="{{$cliente->am_cli}}">
<br>

@if($errors->first('edad')) 
<i> {{ $errors->first('edad') }} </i> 
@endif	<br>
Edad
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type  ='text' name ='edad' value="{{$cliente->edad}}">
<br>

@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	<br>

Dirección
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name  ='direccion' value="{{$cliente->direccion}}">
<br>

@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>

Codigo Postal 
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text'name = 'cp' value="{{$cliente->cp}}" >
<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>

Telefono 
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text'name = 'telefono' value="{{$cliente->telefono}}" >
<br>

<br>
@if($errors->first('correo')) 
<i> {{ $errors->first('correo') }} </i> 
@endif	<br>

Correo
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label> 
<input type = 'text'name = 'correo' value="{{$cliente->correo}}" >
<br>
<br>

Seleccione Municipio
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<select name = 'idmun'>
      <option value = '{{$idmun}}'>{{$municipio}}</option>
	  @foreach($otrosmunicipios as $oc)
	   <option value = '{{$oc->idmun}}'>{{$oc->municipio}}</option>
	  @endforeach
      </select>
<br>

@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif
<br>
<img src = "{{asset('archivos/'.$cliente->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>
</div>

@stop


















