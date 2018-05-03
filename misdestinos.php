<?php
session_start();
if (!isset($_SESSION['matricula'])) {
	header("Location:index.php");

}else {
	include('menu.php');
	include('conexion.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<h5 style="margin: auto;">Bienvenido <?php echo $_SESSION['nombre']?> <?php echo $_SESSION['apellido']?></h5>
	
	
	<br><br>
	
	<?php

	if ($conexion) {
		
		$sel=$_SESSION['sel'];
		
		$query = "SELECT * FROM reserva WHERE id_usuario = $sel";

		$resultado = mysqli_query($conexion, $query);
		if (mysqli_num_rows($resultado) > 0)
		{						
			echo "<table style='margin: auto; width: 50%'><tr><th>vuelo</th><th>folio de cliente</th><th>estado</th></tr>";

			while ($row = mysqli_fetch_assoc($resultado)) 
			{		
		$_SESSION['estado'] = $row['estado'];
		
		if($_SESSION['estado'] == "1"){
				echo "<tr><td>$row[id_vuelo]</td><td>$row[id_destino]</td><td>activo</td></tr>";					
		}
		else{
			echo "<tr><td>$row[id_vuelo]</td><td>$row[id_destino]</td><td>inactivo</td></tr>";		
		}
				
			}}
			echo "</table>	";	

		}
		else 	
		{
			echo "No hay entradas";
		}
		
	?>
</body>
</html>
	
</body>
</html>
