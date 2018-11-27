



@extends('sistema.principal')

@section('contenido')

		<form action = "{{route('modificam2')}}" method = "POST">
        {{csrf_field()}}
		
		@if($errors->first('idm')) 
			<i> {{ $errors->first('idm') }} </i> 
		@endif	<br>
		
		cLAVE <input type= 'text' name = 'idm' value="{{$maestros->idm}}" readonly = 'readonly' >
		<br>
		@if($errors->first('nombre')) 
			<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Nombre<input type = 'text' name = 'nombre' value="{{$maestros->nombre}}">
		<br>
		@if($errors->first('edad')) 
			<i> {{ $errors->first('edad') }} </i> 
		@endif	<br>
		Edad<input type = 'text' name = 'edad' value="{{$maestros->edad}}">
		<br>
		@if($errors->first('carrera')) 
			<i> {{ $errors->first('carrrera') }} </i> 
		@endif	<br>
		Carrera<input type = 'text' name = 'carrera' value="{{$maestros->carrera}}">
		<br>
		@if($errors->first('sexo')) 
			<i> {{ $errors->first('sexo') }} </i> 
		@endif	<br>
		Sexo<input type = 'text' name = 'sexo' value="{{$maestros->sexo}}">
		<br>
		Seleccione plantel<select name = 'idpl'>
		    <option value = '{{$idpl}}'>{{$nomplan}}</option>
			@foreach($todosplan as $tp)
			<option value = '{{$tp->idpl}}'>{{$tp->nombre}}</option>
			@endforeach
			
		                  </select>
		<br>
		<input type = 'submit' value = 'Guardar'>
		</form>
@stop








