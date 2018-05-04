<?php
include ('conexion.php');
$name = $_POST ["Nombre"];
$apell = $_POST ["Apellido"];
$fecha = $_POST ["Fecha"];
$sexo = $_POST ["ge"];
$tipo = $_POST ["tipo"];
$dest = $_POST ["destino"];
$llegada = $_POST ["horalle"];
$salida = $_POST ["horasa"];

$query = ("INSERT INTO clientes(nombre,apellido,fecha_nac,sexo,tipo) VALUES ('$name', '$apell', '$fecha', '$sexo', '$tipo')");
if (mysqli_query($conexion, $query)) 
{
	echo '<script>alert("Viaje registrado exitosamente")</script> ';
	echo "<script>location.href='regviaje3.php'</script>";
}


$query2 = ("INSERT INTO horario(hora_llegada, hora_salida) VALUES ('$llegada','$salida')");
if (mysqli_query($conexion, $query2)) 
{
			$query3 = "SELECT id_horario FROM horario WHERE id_horario = (SELECT MAX(id_horario) from horario)";
			$resultado = mysqli_query($conexion, $query3);
			if (mysqli_num_rows($resultado)>0) {
			while ($row = mysqli_fetch_assoc($resultado)) {
				$_SESSION['nam'] = $row['id_horario'];
					$nem=$_SESSION['nam'];

					
				$query4 = ("INSERT INTO destino(nombre, id_horario) VALUES ('$dest','$nem')");
				if (mysqli_query($conexion, $query4)) 
				{
					echo '<script>alert("Viaje registrado exitosamente")</script> ';
					echo "<script>location.href='use2.php'</script>";
					

}}	}
}
	
else
{
	echo '<script>alert("Id de viaje ya registrado")</script>';
	echo "<script>location.href='viajes.php'</script>";
	echo "Error: " . mysqli_error($conexion);
}
?>