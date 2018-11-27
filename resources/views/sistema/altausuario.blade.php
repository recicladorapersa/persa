



@extends('sistema.principal')

@section('pie')
ESte es el PIE de alta de usuario
@stop

<b>hola mundo</b>

@section('contenido')
		<form>
		cLAVE <input type= 'text' name = 'idu'>
		<br>
		Nombre<input type = 'text' name = 'nombre' class='cajatextroja'>
		<br>
		Password <input type = 'text' name ='passw'>
		<br>
		<input type = 'submit' value = 'Guardar'>
		</form>
@stop









