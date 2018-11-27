      
@foreach($productos as $pr)
<option value = '{{$pr->idp}}'>{{$pr->nombre}}</option>
@endforeach
           
		