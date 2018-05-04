
<!DOCTYPE html>
<html>
<head> 
	<title>Regstrar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	<center>
	<h1><font face="Arial Rounded MT Bold" color="#808080">Registro Nuevo 
	Usuario</font></h1>
	<form action="registro2.php" method="post">
		
		Nombre: <input type="text" name="Nombre" required=""><br><br>
		Apellido: <input type="text" name="Apellido" required=""><br><br>
		user: <input type="number" name="user" required=""><br><br>
		password: <input type="text" name="pass" required=""><br><br>
		Destino: <select name="tipo" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">Primera clase</option>
			<option value="2">Segunda clase</option>
			<option value="3">Tercera clase</option>
		</select><br><br>
		<input type="submit" name="Registrar" value="Continuar">
		
	</form></center>
<center><p><img src="hotel.jpg" width="948" height="272"></p></center>

</body>
</html>