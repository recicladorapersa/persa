@extends('persa.inicio')
@section('contenido')
<link type="text/css"href="tostadita3.css" rel="stylesheet">
<h1>Modifica Producto</h1>
<br>
<div class="testbox">
<form action =  "{{route('guardamodificapro')}}"  method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}

@if($errors->first('idpro')) 
<i> {{ $errors->first('idpro') }} </i> 
@endif	<br>
        
Clave
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name = 'idpro' value="{{$producto->idpro}}" readonly ='readonly'>
<br>
@if($errors->first('nombre')) 
<i> {{ $errors->first('nombre') }} </i> 
@endif	<br>

Seleccione Tipo
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<select name = 'idtip'>
      <option value = '{{$idtip}}'>{{$tipo}}</option>
	  @foreach($otrostipos as $ot)
	   <option value = '{{$ot->idtip}}'>{{$ot->tipo}}</option>
	  @endforeach
      </select>
<br>
<br>

Costo
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>
<input type = 'text' name  ='costo' value="{{$producto->costo}}">
<br>

@if($errors->first('unidad')) 
<i> {{ $errors->first('unidad') }} </i> 
@endif	<br>
	Unidad:
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<select name="unidad" value ="{{$producto->unidad}}" required="">
    <option value="kgr">kgr</option>
    <option value="lbr">lbr</option>
    <option value="gr">gr</option>
</select>
<br>
<br>

<input type = 'submit' value = 'Guardar'>
</form>


</div>
@stop


















