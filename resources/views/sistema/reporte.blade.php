


@extends('sistema.principal')

@section('contenido')
<h1> Reporte de maestros </h1>
<br>
<table border= 1>
<tr><td>Imagen</td><td>Clave</td><td>Nombre</td><td>Sexo</td><td>Carrera</td>
<td>Operaciones</td></tr>
	@foreach($ma as $m)
	<tr>
	
	<td>
    <img src = "{{asset('archivos/'.$m->imagen)}}" height =50 width=50>
    </td>
	
	<td>{{$m->idm}}</td><td>{{$m->nombre}}</td>
	<td>{{$m->sexo}}</td><td>{{$m->carrera}}</td>
	<td>
	<a href="{{URL::action('maestross@borramaestro',['idm'=>$m->idm])}}">
	Eliminar</a>
	<a href="{{URL::action('maestross@modificam',['idm'=>$m->idm])}}">
	Modificar</a>
	</td></tr>
	@endforeach
</table>
     {{$ma->render()}}
@stop







