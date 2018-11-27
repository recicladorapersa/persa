¿



@extends('sistema.principal')

@section('contenido')

		<form action = "{{route('manda')}}" method = "POST">
        {{csrf_field()}}
		
		@if($errors->first('nombre')) 
			<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		
	
		Nombre<input type = 'text' name = 'nombre' value="{{old('nombre')}}">
        @if($errors->first('asunto')) 
			<i> {{ $errors->first('asunto') }} </i> 
		@endif	<br>
		
	
		Asunto<input type = 'text' name = 'asunto' value="{{old('asunto')}}">
		<br>
		@if($errors->first('correo')) 
			<i> {{ $errors->first('correo') }} </i> 
		@endif	<br>
		correo<input type = 'text' name = 'correo' value="{{old('correo')}}">
		<br>
		@if($errors->first('mensaje')) 
			<i> {{ $errors->first('mensaje') }} </i> 
		@endif	<br>
		Mensaje<input type = 'text' name = 'mensaje' value="{{old('mensaje')}}">
		<br>
	
		<input type = 'submit' value = 'Enviar'>
		</form>
@stop








