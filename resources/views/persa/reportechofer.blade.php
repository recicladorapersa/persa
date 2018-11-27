
@extends('persa.tablas')
@section('contenido')
<body>

<h3 align="center">Reporte de Choferes</h3>

<link type="text/css" href="rchofer.css" rel="stylesheet">
<div class="table-container">
      <table class="table-rwd">
<thead>
<tr>
<th style="color:#FFFFFF";>Clave</th><th style="color:#FFFFFF";>Imagen</th>
<th style="color:#FFFFFF";>Nombre</th>
<th style="color:#FFFFFF";>Apellido Paterno</th>
<th style="color:#FFFFFF";>Apellido Materno</th>
<th style="color:#FFFFFF";>Direccion</th>
<th style="color:#FFFFFF";>Telefono</th>
<th style="color:#FFFFFF";>Codigo Postal</th>
<th style="color:#FFFFFF";>Ruta</th>
<th style="color:#FFFFFF";>Licencia</th>
<th style="color:#FFFFFF";>Operaciones</th>
</tr>
</thead>
@foreach($choferes as $cho)
<tr>
<td>{{$cho->idcho}}</td>

<td><img src = "{{asset('archivos/'.$cho->archivo)}}"
        height =50 width=50>
    </td>

<td>{{$cho->nombre}}</td>
<td>{{$cho->ap_emp}}</td>
<td>{{$cho->am_emp}}</td>
<td>{{$cho->direccion}}</td>
<td>{{$cho->telefono}}</td>
<td>{{$cho->cp}}</td>
<td>{{$cho->ruta}}</td>
<td>{{$cho->licencia}}</td>
<td>


@if($cho->deleted_at=="")
   <a href="{{URL::action('curso@eliminacho',['idcho'=>$cho->idcho])}}"><div class="cambiar">Inhabilitar</div></a>  
	
   <a href="{{URL::action('curso@modificacho',['idcho'=>$cho->idcho])}}"><div class="cambiar">Modificar</div></a>


 @else
    <a href="{{URL::action('curso@restauracho',['idcho'=>$cho->idcho])}}"><div class="cambiar">Restaurar</div></a>

    <a href="{{URL::action('curso@efisicacho',['idcho'=>$cho->idcho])}}"> <div class="cambiar">Eliminar</div></a>
 @endif
</td>
</tr>
@endforeach
</table>
</div>

</body>

@stop



    