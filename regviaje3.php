<?php
session_start();
if (!isset($_SESSION['matricula'])) {
	
	header("Location:index.php");
}else {
	include('menu.php');
}
?>	
<title>Registrar</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h5 style="margin: auto;">Bienvenido <?php echo $_SESSION['nombre']?> <?php echo $_SESSION['matricula']?></h5>
	<center>
	<h1>Registro</h1>
	<form action="regviaje4.php" method="post">
		
	Estado: <select name="Estado" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">Activo</option>
			<option value="2">Inactivo</option>
		</select><br><br>
		Id vuelo: <input type="number" name="idvuelo" required=""><br><br>
		Disponibilidad: <select name="dispo" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">Alta</option>
			<option value="2">Media</option>
			<option value="3">Baja</option>
		</select><br><br>
		Marca de avion: <select name="maravi" required="">
			<option value="" disabled="" selected=""></option>
			<option value="ToroRed">ToroRed</option>
			<option value="UTPlaner">UTPlaner</option>
			<option value="VamosalInfernus">VamosalInfernus</option>
		</select><br><br>
		Estado del avion: <select name="esta" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">Bien</option>
			<option value="2">Regular</option>
			<option value="3">Mala</option>
		</select><br><br>
		Tipo de vuelo: <select name="tipovuelo" required="">
			<option value="" disabled="" selected=""></option>
			<option value="1">Comercial</option>
			<option value="2">Privado</option>
			<option value="3">De pobre</option>
		</select><br><br>
		Destino: <select name="destinos" required="">
			<option value="" disabled="" selected=""></option>
			<option value="CDMX">CDMX</option>
			<option value="Monterrey">Monterrey</option>
			<option value="Guadalajara">Guadalajara</option>
		</select><br><br>
		
		<input type="submit" name="Registrar" value="Continuar">
		
	</form></center>
</body>
</html>