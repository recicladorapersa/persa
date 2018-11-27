



@extends('sistema.principal')

@section('contenido')
<form action="{{route('valida')}}"  method = 'POST'>
{{csrf_field()}}
Teclea usuario<input type = 'text' name = 'user' value="{{old('user')}}">
<br>
Teclea password<input type = 'text' name = 'pasword' value="{{old('pasword')}}">
<br>
<input type='submit' value = 'Inicia Sesion'>
</form>
@if (Session::has('error'))
    <div>{{ Session::get('error') }}</div>
<script>
    alert("{{Session::get('error')}}");
</script>
@endif

@stop