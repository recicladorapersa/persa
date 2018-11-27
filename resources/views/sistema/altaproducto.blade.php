



@extends('sistema.principal')

@section('pie')
ESte es el PIE de alta de producto 
@stop

@section('contenido')

		<form>
		cLAVE <input type= 'text' name = 'idu'>
		<br>
		Nombre<input type = 'text' name = 'nombre'>
		<br>
		Tipo<input type = 'radio' name ='tipo' value= 'A'>A
		    <input type = 'radio' name ='tipo' value= 'B'>B
		<br>
		<input type = 'submit' value = 'Guardar'>
		</form>
@stop






