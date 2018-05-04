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
	<title>Registrar materia</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	<center>
	<h1>Registro</h1>
	<form action="regMateria2.php" method="post">
		Matricula del Alumno: <input type="text" name="Matricula" required=""><br><br>
		<select name="materia" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">CDMX</option>
			<option value="2">Monterrey</option>
			<option value="3">Guadalajara</option>
		</select><br><br>
		<input type="submit" name="Registrar" value="Okay">
	</form>
</center>
</body>
</html>