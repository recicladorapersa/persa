@extends('persa.inicio')
@section('contenido')
<link type="text/css"href="tostadita3.css" rel="stylesheet">

    <title>Productos</title>
    <head><h1><center>Registro Productos</center></h1></head>
    <center>
	<div class="testbox">
 <form action =  "{{route('guardaproducto')}}" method = "POST" enctype='multipart/form-data' >                        
{{csrf_field()}}
    @if($errors->first('idpro')) 
    <i> {{ $errors->first('idpro') }} </i> 
    @endif  <br>
    Clave
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name = 'idpro' value="{{$idpros}}" readonly ='readonly'>
    <br>
    <br>
        Seleccione Tipo
		<br>
        <label id="icon" for="name"><i class="icon-envelope "></i></label>		
		<select name = 'idtip' placeholder="Seleccione un Tipo">
            
            @foreach($tipo as $tip)
            <option value = '{{$tip->idtip}}'>{{$tip->tipo}}</option>
            @endforeach
            
                          </select>
    <br>
    <br>
    @if($errors->first('costo')) 
    <i> {{ $errors->first('costo') }} </i> 
    @endif  <br>
    <div class="form-group">
    Costo
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='costo' placeholder="Escriba el costo" value="{{old('costo')}}">
    </div>
    <br>

	Unidad
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<select name="unidad" required="">
    <option value>   </option>
    <option value="kgr">kgr</option>
    <option value="lbr">lbr</option>
    <option value="gr">gr</option>
</select>
<br>
<br>
<input type="submit" value="Registrar"> <input type="reset" value="Borrar">

</table>
</Form>
</div>
</center>


@stop

    
