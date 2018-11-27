<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Suma</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<script type="text/javascript">
$(document).ready(function(){
        $('#suma').click(function (e) {
            $('#resultado').load('{{url('suma')}}' + '?' + $(this).closest('form').serialize());
          //  $('#resultado').load('{{url('suma')}}' + '?x='+$('#x').val() + '&idm='+ $('#idm').val());
        });
});
</script>

<form>
    <div>
       Numero 1 <input type="text" name="x" id= 'x'>
    </div>
    <div>
       Numero 2 <input type="text" name="y" id='y'>
    </div>
    <div>
       Clave del maestro<input type="text" name="idm" id='idm'>
    </div>
    <div>
        <button type="button" id="suma">suma</button>
    </div>

<div id="resultado">
Maestros 
<select name = 'idm'>
</select></div>

</form>


</body>
</html>
