<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Suma</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function(){
    function trunc (x, posiciones = 0) {
  var s = x.toString()
  var l = s.length
  var decimalLength = s.indexOf('.') + 1
  var numStr = s.substr(0, decimalLength + posiciones)
  return Number(numStr)
}
    
    $("#idc").click(function() {
         $("#idp").load('{{url('comboca')}}' + '?idc=' + this.options[this.selectedIndex].value) ;
       });
       
       
        $("#idp").click(function() {
       $("#detallep").load('{{url('detallep')}}' + '?idp=' + this.options[this.selectedIndex].value) ;
       });
       
       
        $("#cantidad").keyup(function() {
            var existencia;
            var cantidad;
            existencia = parseInt($("#existencia").val());
            cantidad = parseInt($("#cantidad").val());
            if (cantidad>existencia)
            {
           $("#valida").text('no se puede'); 
           $('#agrega').attr("disabled", true);
            $('#subt').attr("value", 0);
            
            }
            else
            {
           $("#valida").text('si se puede'); 
           $('#agrega').attr("disabled", false);
              $('#subt').attr("value", $("#costo").val());
            }
            
       
       });
        $("#agrega").click(function() {
         $("#carrito").load('{{url('carrito')}}' + '?' + $(this).closest('form').serialize()) ;
       });
       
       
        $("input[name=descuento]").click(function () {
        switch ($('input:radio[name=descuento]:checked').val()) { 
	    case '0': 
          $("#subt").val(parseInt($("#cantidad").val())*parseInt($("#costo").val()));
		break;
		case '10': 
          $("#subt").val(trunc(parseInt($("#cantidad").val())*parseInt($("#costo").val())/1.10,2));
		break;
	    case '30': 
          $("#subt").val(trunc(parseInt($("#cantidad").val())*parseInt($("#costo").val())/1.30,2));
		break;
          }
        });
        
      
	
        
        
});
</script>

<form>

Clave venta <input type = 'text' name = 'idv' id= 'idv' value = '{{$idv}}' readonly = 'readonly'>
<br>
Selecciona cliente<select name = 'idcl' id= 'idcl'> 
                  <option value = '1'>pablo</option>
                  <option value = '2'>Mariana</option>
                  <option value = '3'>Josue</option>
                  </select>
<br>
Fecha de venta<input type = 'date' name = 'fecha' id= 'fecha'>
<br>
Seleccione categoria<select name = 'idc' id= 'idc'>
		    
			@foreach($categorias as $cat)
			<option value = '{{$cat->idc}}'>{{$cat->nombre}}</option>
			@endforeach
			
		                  </select>
		<br>
<div id='combop'>
Seleccione Producto<select name = 'idp' id = 'idp'>
                    </select>
</div>
<div id='detallep'>
Existencia <input type = 'text' name = 'existencia' id='existencia' readonly = 'readonly'>
<br>
Costo <input type = 'text' name = 'costo' id= 'costo'readonly= 'readonly'>
<br>
</div>
Cantidad a comprar <input type = 'text' name ='cantidad' id = 'cantidad'>
<br>
Descuento<input type = 'radio' value = '0' name = 'descuento' id = 'descuento1' checked>0%
         <input type = 'radio' value = '10' name = 'descuento' id = 'descuento2'>10%
         <input type = 'radio' value = '30' name = 'descuento' id = 'descuento3'>30%
<br>
Subtotal<input type = 'text' name ='subt' id = 'subt'>
<br>

<div id='valida'>
</div>
<br>
<button type="button" name = "agrega" id="agrega" disabled= 'false'>Agrega Carrito</button>
<br>

<div id='carrito'>
</div>


</form>

</body>
</html>




