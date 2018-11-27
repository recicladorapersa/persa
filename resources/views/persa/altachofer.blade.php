
@extends('persa.inicio')


@section('contenido')
<link type="text/css" href="tostadita2.css" rel="stylesheet">
<head><h1><center><img src="https://img.icons8.com/color/50/000000/driver.png">Registro Choferes</center></h1></head>
    <title>Choferes</title>
	<div class="testbox">
    
    <center>
    <form action =  "{{route('guardachofer')}}" method = "POST" enctype='multipart/form-data' >                        
    {{csrf_field()}}
    @if($errors->first('idccho')) 
    <i> {{ $errors->first('idccho') }} </i> 
    @endif  <br>
	
    Clave
     <br>
     	 
	<input type = 'text' name = 'idcho'  placeholder="" value="{{$idchof}}" readonly ='readonly' required>
    <br>
    @if($errors->first('nombre')) 
    <i> {{ $errors->first('nombre') }} </i> 
    @endif  <br>
    Nombre
	<br>
    <label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='nombre' value="{{old('nombre')}}" required placeholder="Escriba el Nombre">
    <br>

    @if($errors->first('ap_emp')) 
    <i> {{ $errors->first('ap_emp') }} </i> 
    @endif  <br>
    Apellido Paterno
<br>
    <label id="icon" for="name"><i class="icon-envelope "></i></label> 	
	<input type = 'text' name  ='ap_emp' value="{{old('ap_emp')}}" required placeholder="Escriba Apellido Paterno">
    <br>

    @if($errors->first('am_emp')) 
    <i> {{ $errors->first('am_emp') }} </i> 
    @endif  <br>
    Apellido materno
     <br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	 
	<input type = 'text' name  ='am_emp' value="{{old('am_emp')}}" required placeholder="Escriba Apellido Materno">
    <br>
    @if($errors->first('direccion')) 
    <i> {{ $errors->first('direccion') }} </i> 
    @endif  <br>
    Dirección
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='direccion' value="{{old('direccion')}}" required placeholder=" Escriba Dirección">
        <br>
        <br>

        Seleccione Municipio
		<br>
		<label id="icon" for="name"><i class="icon-envelope "></i></label>
		<select name = 'idmun' required>
            
            @foreach($municipio as $mun)
            <option value = '{{$mun->idmun}}'>{{$mun->municipio}}</option>
            @endforeach
            
                          </select>
    <br><br>
    @if($errors->first('cp')) 
    <i> {{ $errors->first('cp') }} </i> 
    @endif  
    Codigo Postal
<br>
 <label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text'name = 'cp' value="{{old('cp')}}" required placeholder="Código postal">
    <br>
    @if($errors->first('telefono')) 
    <i> {{ $errors->first('telefono') }} </i> 
    @endif     
    <br>
    Telefono
<br>
<label id="icon" for="name"><i class="icon-envelope "></i></label>	
	<input type = 'text' name  ='telefono' value="{{old('telefono')}}" required placeholder="Coloque su télefono">
    <br>
    <br>
   Destino
   
   <br>
    <!--Se colocan como ejemplos posteriormente se camiara a valores correcos-->
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
    <select name='ruta' required="">
        <option value="1">            </option>
        <option value="San Mateo Atenco">San Mateo Atenco</option>
        <option value="Lerma">Lerma</option>
        <option value="Ocoyoacac">Ocoyocac</option>
        <option value="Santiago">Santiago</option>
        <option value="Toluca">Toluca</option>
        <option value="Metepec">Metepec</option>
    </select> 
    <br>

    @if($errors->first('licencia')) 
    <i> {{ $errors->first('licencia') }} </i> 
    @endif      <br>
    Licencia
	<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type = 'text' name  ='licencia' value="{{old('licencia')}}" required placeholder="Núm de Licencia">

    <br>

    @if($errors->first('archivo')) 
    <i> {{ $errors->first('archivo') }} </i> 
    @endif  <br>
	<br>
    Foto
<br>
	<label id="icon" for="name"><i class="icon-envelope "></i></label>
	<input type='file' name ='archivo' placeholder="Seleccione una imagen" required>
	<br>
	<br>
    

    <input type="submit" value="Registrar"> <input type="reset" value="Borrar">
<br>
<br>
	

</form>
</div>
</center>
@stop

