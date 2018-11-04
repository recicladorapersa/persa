

<title>Registro Clientes </title>
<meta charset="UTF-8"
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="estilo.css" rel="stylesheet">

<div class="testbox">


  <form action="/">
      <hr>
      <h2>Registro Clientes</h2>
  <hr>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="idc" id="idc" placeholder="Clave" required/>
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="idmun" id="idmun" placeholder="Municipio" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="nombre" id="nombre" placeholder="Nombre" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="apcli" id="ap_cli" placeholder="Apellido Paterno" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="amcli" id="am_cli" placeholder="Apellido Materno" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="number" name="edad" id="edad" placeholder="Edad" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="text" name="dir" id="direccion" placeholder="direccion" required/>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="tel" name="telefono" id="telefono" placeholder="Teléfono" required/>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="cp" id="cp" placeholder="Código Postal" required/>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="email" name="correo" id="correo" placeholder="Email" required/>
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="name" id="name" placeholder="Password" required/>
  <!--
  <div class="gender">
    <input type="radio" value="None" id="male" name="gender" checked/>
    <label for="male" class="radio" chec>Male</label>
    <input type="radio" value="None" id="female" name="gender" />
    <label for="female" class="radio">Female</label>
   </div> 
-->
<br>

<h3>Seccione un archivo:</h3> <input type='file' id="archivo" name ='archivo' required>
<br>
<br>
<input type="submit" class="hover" value="Registrar"> <input type="reset" value="Borrar">
  </form>
</div>