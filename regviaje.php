<?php
session_start();
if (!isset($_SESSION['matricula'])) {
	header("Location:index.php");
}else {
	include('menu.php');
}
?>
<!DOCTYPE html>
<html>
<head> 
	<title>Regstrar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	<center>
	<h1>Registro</h1>
	<form action="regviaje2.php" method="post">
		
		Nombre: <input type="text" name="Nombre" required=""><br><br>
		Apellido: <input type="text" name="Apellido" required=""><br><br>
		Fecha de nacimiento: <input type="date" name="Fecha" required=""><br><br>
		Sexo</br>
		Hombre: <INPUT type=radio name="ge" value="1">
		Mujer: <INPUT type=radio name="ge" value="2"></br></br>
		
		Tipo</br>
		General: <INPUT type=radio name="tipo" value="1">
		Preferente: <INPUT type=radio name="tipo" value="2">
		Vip: <INPUT type=radio name="tipo" value="3">
		Golden: <INPUT type=radio name="tipo" value="4">
		Platinum: <INPUT type=radio name="tipo" value="5"></br></br>
		Destino: <select name="destino" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">CDMX</option>
			<option value="2">Monterrey</option>
			<option value="3">Guadalajara</option>
		</select><br><br>
		Hora de llegada: <input type="time" name="horalle" size="20" />
		Hora de salida: <input type="time" name="horasa" size="20" /></br></br>
		
		
		<input type="submit" name="Registrar" value="Continuar">
		
	</form></center>
</body>
</html>