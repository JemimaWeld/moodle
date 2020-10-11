<title>Agregar</title>
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
.Estilo2 {font-size: 18px; }
-->
</style></head>
 <style>
    .back {
      background-color: #b3cce6;
  color: #000000;
  border: 10px #0d0d0d;
  margin: 20px #0d0d0d;
  padding: 20px;
  width: 400px;
  height: 400px;
    }
  </style>
<body>
    <center><div class="back">
<h1 align="center">Profesor</h1>
<span>
  <form id="form11" name="form11" method="post" action="profagregado.php">
    <table width="298" border=1px #33ccff>
      <tr>
        <th width="120" bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Identidad</div></th>
        <td width="120" bgcolor="#FFFFFF"><label></label>
          <center>
            <input name="id_profesor" type="text" id="id_profesor" autocomplete="off" minlength="30" required="required" />    </center>    </td>
      </tr>

      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Primer nombre </div></th>
        <td bgcolor="#FFFFFF"><label></label>       <center> <input name="primer_nombre" type="text" id="primer_nombre" autocomplete="off" minlength="30" required="required"/> </center></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Segundo nombre </div></th>
        <td bgcolor="#FFFFFF"><label></label>     <center>   <input name="segundo_nombre" type="text" id="segundo_nombre" autocomplete="off" minlength="30" required="required"/> </center></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Primer apellido </div></th>
        <td bgcolor="#FFFFFF"><label></label>        <center> <input name="primer_apellido" type="text" id="primer_apellido" autocomplete="off" minlength="30" required="required"/> </center></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Segundo apellido </div></th>
        <td bgcolor="#FFFFFF"><label></label>     <center>   <input name="segundo_apellido" type="text" id="segundo_apellido" autocomplete="off" minlength="30" required="required"/> </center></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Sexo</div></th>
        <td bgcolor="#FFFFFF"><label></label>       <input name="sexo" type="radio" id="masculino" autocomplete="off" required="required"/> <label for="masculino">Masculino</label><br>
        <input name="sexo" type="radio" id="femenino" autocomplete="off" required="required"/> <label for="femenino"></label>Femenino<br>
      </td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Celular</div></th>
        <td bgcolor="#FFFFFF"><label></label>     <center>   <input name="celular" type="text" id="celular" autocomplete="off" minlength="11" required="required"/> </center> </td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Correo</div></th>
        <td bgcolor="#FFFFFF"><label></label>    <center>    <input name="correo" type="text" id="correo" autocomplete="off" minlength="50" required="required"/> </center></td>
      </tr>
      <tr>
        <th bgcolor="#FFFFFF" scope="row"><div align="left" class="Estilo3">Contrase&ntilde;a</div></th>
        <td bgcolor="#FFFFFF"><label></label>     <center>   <input name="contrase&ntilde;a" type="password" id="contrase&ntilde;a" autocomplete="off" minlength="30" required="required"/> </center> </td>
      </tr>
    </table>
    <p>
      <label></label>
      <input type="submit" name="Agregar" value="Agregar" />
    </p>
  </form>
  </span>
</div>
</center>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
