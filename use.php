<?php
session_start();
if (!isset($_SESSION['matricula'])) {
	header("Location:index.php");

}else {
	include('menu2.php');
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
		$matricula=$_SESSION['matricula'];
		
		$query = "SELECT nombre_mat FROM materia WHERE matricula =$matricula";
		// $query = "SELECT us.nombre, us.apellido, us.grupo, mat.nombre_mat FROM usuarios us INNER JOIN materia mat ON us.matricula = mat.matricula";

		$resultado = mysqli_query($conexion, $query);
		if (mysqli_num_rows($resultado) > 0)
		{			
			echo "<table style='margin: auto;'><tr><th class='center'>Materias Asignadas</th></tr>";

			while ($row = mysqli_fetch_assoc($resultado)) 
			{			
				echo "<tr><td>$row[nombre_mat]</td></tr>";					
			}
			echo "</table>	";	

		}
		else 	
		{
			echo "0 Registros";
		}
	}	
	?>
</body>
</html>
	
</body>
</html>
