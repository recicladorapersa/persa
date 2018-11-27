<h1>prueba de vista</h1>
<br>
haber si si
<br>
{{$doble}}
<br>
Maestros <select name = 'idm'>
@foreach($maestros as $mae)
			<option value = '{{$mae->idm}}'>{{$mae->nombre}}</option>
			@endforeach
</select>