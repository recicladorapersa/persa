            <table border= 1>
            <tr><td>Clave</td><td>Producto</td><td>Cantidad</td><td>Costo</td><td>Subtotal</td><td>Operaciones</td></Tr>
            @foreach($resultado as $res)
            <tr><td>{{$res->idp}}</td><td>{{$res->nombre}}</td><td>{{$res->cantidad}}</td><td>{{$res->costo}}</td><td>{{$res->subt}}</td>
           <td>
       
            <form action='' method = 'POST' enctype='application/x-www-form-urlencoded' 
name='frmdo{{$res->idvd}}' id='frmdo{{$res->idvd}}' target='_self'>
<input type = 'hidden' value = '{{$res->idvd}}' name = 'idvd' id= 'idvd'>
<input type='button' name='borrar' class='borrar' value='borrar' />
</form>
           
            </td>
</Tr>
           @endforeach
            </tr>
            <tr><td colspan= 5>Subtotal</td><td>{{$resultado2->subtotal}}</td></tr>
            <tr><td colspan= 5>IVA</td><td>{{$resultado2->iva}}</td></tr>
            <tr><td colspan= 5>Total</td><td>{{$resultado2->total}}</td>
            </tr>
            </table>
            <script type="text/javascript">

$(function () {
	$('.borrar').click(
		function () {
			formulario = this.form;
            $("#carrito").load('{{url('borraventas')}}' + '?' + $(this).closest('form').serialize()) ;
		}
	);
});
</script>
            