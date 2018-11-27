@extends('sistema.principal')

@section('contenido')

@if (Session::has('sesionname'))
    <div>BIENVENIDO {{ Session::get('sesionname')}}
    <br>
    {{Session::get('sesiontipo')}}</div>
@endif
<br>
<a href="{{URL::action('maestross@muestraregistros')}}">Muestra maestros</a>
<br>
@if (Session::get('sesiontipo')=='Administrador')
<a href="{{URL::action('maestross@altamaestros')}}">Alta maestros</a>
<br>
@endif	
<a href="{{URL::action('maestross@cerrarsesion')}}">Cerrar Sesion</a>



@stop





