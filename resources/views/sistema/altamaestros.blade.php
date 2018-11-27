



@extends('sistema.principal')

@section('contenido')

		<form action = "{{route('gi')}}" method = "POST"  enctype='multipart/form-data'>
        {{csrf_field()}}
		
		@if($errors->first('idm')) 
			<i> {{ $errors->first('idm') }} </i> 
		@endif	<br>
		
		cLAVE <input type= 'text' name = 'idm' value="{{$idms}}" >
		<br>
		@if($errors->first('nombre')) 
			<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Nombre<input type = 'text' name = 'nombre' value="{{old('nombre')}}">
		<br>
		@if($errors->first('edad')) 
			<i> {{ $errors->first('edad') }} </i> 
		@endif	<br>
		Edad<input type = 'text' name = 'edad' value="{{old('edad')}}">
		<br>
		@if($errors->first('carrera')) 
			<i> {{ $errors->first('carrrera') }} </i> 
		@endif	<br>
		Carrera<input type = 'text' name = 'carrera' value="{{old('carrera')}}">
		<br>
		@if($errors->first('sexo')) 
			<i> {{ $errors->first('sexo') }} </i> 
		@endif	<br>
		Sexo<input type = 'text' name = 'sexo' value="{{old('sexo')}}">
		<br>
		Seleccione plantel<select name = 'idpl'>
		    
			@foreach($planteles as $pl)
			<option value = '{{$pl->idpl}}'>{{$pl->nombre}}</option>
			@endforeach
			
		                  </select>
		<br>
		
		<br>
		<br>
			@if($errors->first('img')) 
			<i> {{ $errors->first('img') }} </i> 
		@endif	<br>
		Selecciona Imagen <input type="file" name="img" >
		<br>
		<input type = 'submit' value = 'Guardar'>
		</form>
@stop








