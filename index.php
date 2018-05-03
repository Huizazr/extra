<html>
<head>
  <title>Proyecto final</title>
  <style type="text/css">
    body {
     
    }
    td.A1 {  
            font-family:'Verdana';
	    font-weight:bold;
}

  th.A2 { 
            font-family:'Verdana';
	    font-weight:bold;
            
}

    * {
      margin: auto;
    }
    .abajo {
      padding-top: 200px;
    }
  </style>
</head>
<body>
  <form method="post" action="login.php">
    <table class="abajo" style="width: 33%">
      <tr>
        <th class="A2" colspan="2">Aerolineas Martin </th>
      </tr>
      <tr>
        <td class="A1" style="text-align: right;">Usuario:</td>
        <td><input type="text" name="Matricula" required=""></td>
      </tr>
      <tr>
        <td class="A1" style="text-align: right;">Contraseña:</td>
        <td><input type="password" name="Contrasenia" required=""></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Aceptar" value="Entrar"></td>
      </tr>
	  
    </table>
		  </form>
	  
	 <center>
	  <a href="registro.php"><input type="button"value="Nuevo usuario"</a>
	  </center>
  

 
  </body>
  </html>
