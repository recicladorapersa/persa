<title>Alta Choferes</title>
    
<meta charset="UTF-8"
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="estilo.css" rel="stylesheet">

<div class="testbox">
  

  <form action="/">
      <hr>
    <h2>Registro Choferes</h2>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="idc" id="idc" placeholder="Clave" required/>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="idmun" id="idmun" placeholder="Municipio" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="nombre" id="nombre" placeholder="Nombre" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="apemp" id="ap_emp" placeholder="Apellido Paterno" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="amemp" id="am_emp" placeholder="Apellido Materno" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="dir" id="direccion" placeholder="direccion" required/>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required/>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="cp" id="cp" placeholder="Código Postal" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="ruta" id="ruta" placeholder="Ruta" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="number" name="lic" id="licencia" placeholder="licencia" required/>
  <!--a
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
-->
  

    <!--Se colocan como ejemplos posteriormente se camiara a valores correcos-->
    <h3>Destino</h3>
    <select required="">
        <option value=""></option>
        <option value="1">San Mateo Atenco</option>
        <option value="2">Lerma</option>
        <option value="3">Ocoyocac</option>
        <option value="4">Santiago</option>
        <option value="5">Toluca</option>
        <option value="6">Metepéc</option>
    </select> 
    <br>
    <br>
    <br>


    <h3>Seccione un archivo:</h3> <input type='file' id="archivo" name ='archivo' required>

    <br>
    <br>
<center>
    <input type="submit" value="Registrar"> <input type="reset" value="Borrar">
</center>
   </fieldset> 
</form>
</center>
</body>
</html>