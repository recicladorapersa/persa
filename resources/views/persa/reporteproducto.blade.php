@extends('persa.tablas')
@section('contenido')

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
<link type="text/css" href="tostaditat.css" rel="stylesheet">
<Center><h1>Reporte de Productos</h1></center>
<br>
<center>
<div class="table-container">
<table class="table-rwd">
<tr>
<td style="color:#FFFFFF";>Clave</td>
<td style="color:#FFFFFF";>Costo</td>
<td style="color:#FFFFFF";>Unidad</td>
<td style="color:#FFFFFF";>Operaciones</td>
</tr>
@foreach($productos as $pro)
<tr>
<td>{{$pro->idtip}}</td>
<td>{{$pro->costo}}</td>
<td>{{$pro->unidad}}</td>
<td>
@if($pro->deleted_at=="")
   <a href="{{URL::action('curso@eliminapro',['idpro'=>$pro->idpro])}}"> 
	<div class="cambiar" aling="left">Inhabilitar</div>  
	</a> 
   <a href="{{URL::action('curso@modificapro',['idpro'=>$pro->idpro])}}"> 
   <div class="cambiar">Modificar</div>
</div>
 @else
    <a href="{{URL::action('curso@restaurapro',['idpro'=>$pro->idpro])}}"> 
 	<div class="cambiar" align="right">Restaurar</div>
    <a href="{{URL::action('curso@efisicapro',['idpro'=>$pro->idpro])}}"> 
   <div class="cambiar">Eliminar</div>  
 @endif
  
</td>
</tr>

@endforeach

</table>
</center>
</div>
@stop
    