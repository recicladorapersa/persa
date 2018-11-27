@extends('persa.tablas')
@section('contenido')
<h3><center>Reporte de Clientes</center></h3>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
<link type="text/css" href="tostaditat2.css" rel="stylesheet">
<br>
<Center>
<div class="table-container">
      <table class="table-rwd">
<tr>
<th style="color:#FFFFFF";>Clave</th><th style="color:#FFFFFF";>Imagen</th>
<th style="color:#FFFFFF";>Nombre</th>
<th style="color:#FFFFFF";>Apellido Paterno</th><th style="color:#FFFFFF";>Apellido Materno</th>
<th style="color:#FFFFFF";>Edad</td>
<th style="color:#FFFFFF";>Dirección</th><th style="color:#FFFFFF";>Telefono</th>
<th style="color:#FFFFFF";>Codigo Postal</th><th style="color:#FFFFFF";>Correo</th>
<th style="color:#FFFFFF";>Operaciones</th>
</tr>
@foreach($clientes as $cli)
<tr>
<td>{{$cli->idc}}</td>

<td><img src = "{{asset('archivos/'.$cli->archivo)}}"
        height =50 width=50>
    </td>

<td>{{$cli->nombre}}</td>
<td>{{$cli->ap_cli}}</td>
<td>{{$cli->am_cli}}</td>
<td>{{$cli->edad}}</td>
<td>{{$cli->direccion}}</td>
<td>{{$cli->telefono}}</td>
<td>{{$cli->cp}}</td>
<td>{{$cli->correo}}</td>
<td>
@if($cli->deleted_at=="")
   <a href="{{URL::action('curso@eliminac',['idc'=>$cli->idc])}}"><div class="cambiar">Inhabilitar</a></div> 
   <a href="{{URL::action('curso@modificac',['idc'=>$cli->idc])}}"><div class="cambiar">Modificar</a></div>

 @else
    <a href="{{URL::action('curso@restaurac',['idc'=>$cli->idc])}}"><div class="cambiar">Restaurar</a></div>
    <a href="{{URL::action('curso@efisicac',['idc'=>$cli->idc])}}"><div class="cambiar">Eliminar</a></div>
 @endif
</td>
</tr>
@endforeach

</table>
</div>
</center>
@stop
    

