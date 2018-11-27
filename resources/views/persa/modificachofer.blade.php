@extends('persa.inicio')
@section('contenido')
<h1>Modifica cliente</h1>
<link type="text/css" href="tostadita2.css" rel="stylesheet">
<br>
<div class="testbox">
<form action =  "{{route('guardamodificacho')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('idcho')) 
<i> {{ $errors->first('idcho') }} </i> 
@endif	<br>
        
Clave
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type = 'text' name = 'idcho' value="{{$chofer->idcho}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Nombre
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type = 'text' name  ='nombre' value="{{$chofer->nombre}}">
<br>

@if($errors->first('ap_emp')) 
<i> {{ $errors->first('ap_emp') }} </i> 
@endif	<br>

Apellido Paterno
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type = 'text' name  ='ap_emp' value="{{$chofer->ap_emp}}">
<br>
@if($errors->first('am_emp')) 
<i> {{ $errors->first('am_emp') }} </i> 
@endif	<br>

Apellido Materno
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type = 'text' name  ='am_emp' value="{{$chofer->am_emp}}">
<br>

@if($errors->first('direccion')) 
<i> {{ $errors->first('direccion') }} </i> 
@endif	<br>

Dirección
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type = 'text' name  ='direccion' value="{{$chofer->direccion}}">
<br>

@if($errors->first('cp')) 
<i> {{ $errors->first('cp') }} </i> 
@endif	<br>

Codigo Postal
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	  
<input type = 'text'name = 'cp' value="{{$chofer->cp}}" >
<br>
@if($errors->first('telefono')) 
<i> {{ $errors->first('telefono') }} </i> 
@endif	<br>

Telefono
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	  
<input type = 'text'name = 'telefono' value="{{$chofer->telefono}}" >
<br>

@if($errors->first('licencia')) 
<i> {{ $errors->first('licencia') }} </i> 
@endif	<br>
Licencia
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
<input type  ='text' name ='licencia' value="{{$chofer->licencia}}">
<br>

<br>
@if($errors->first('ruta')) 
<i> {{ $errors->first('ruta') }} </i> 
@endif	<br>

Ruta
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	     
<select name='ruta'  value ="{{$chofer->ruta}}" required="">
        <option value="1">            </option>
        <option value="San Mateo Atenco">San Mateo Atenco</option>
        <option value="Lerma">Lerma</option>
        <option value="Ocoyoacac">Ocoyocac</option>
        <option value="Santiago">Santiago</option>
        <option value="Toluca">Toluca</option>
        <option value="Metepec">Metepec</option>
    </select> 

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
<img src = "{{asset('archivos/'.$chofer->archivo)}}"
        height =100 width=100>
<br>
Seleccione foto
<br>
<br>
<input type='file' name ='archivo'>
<BR>
<input type = 'submit' value = 'Guardar'>
</form>

</div>
@stop


















