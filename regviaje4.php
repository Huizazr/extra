<?php
include ('conexion.php');

session_start();

	
$A1 = $_POST ["Estado"];
$A2 = $_POST ["idvuelo"];
$A3 = $_POST ["dispo"];
$A4 = $_POST ["tipovuelo"];
$A5 = $_POST ["iddestino"];
$A6 = $_POST ["destinos"];
$A7 = $_POST ["maravi"];
$A8 = $_POST ["esta"];
$nim=$_SESSION['sel'];



 $query5 =("INSERT INTO vuelos(disponibilidad,tipo) VALUES ('$A3', '$A4')");
	$query = ("INSERT INTO reservados(estado,id_vuelo) VALUES ('$A1', '$A2')");	
    if (mysqli_query($conexion, $query)) {
	$query3 = "SELECT id_cliente FROM clientes WHERE id_cliente = (SELECT MAX(id_cliente) from clientes)";
			$resultado = mysqli_query($conexion, $query3);
			if (mysqli_num_rows($resultado)>0) {
			while ($row = mysqli_fetch_assoc($resultado)) {
				$_SESSION['nam'] = $row['id_cliente'];
					$nem=$_SESSION['nam'];	
				$query4 = ("UPDATE reservados SET id_cliente='$nem', id_usuario='$nim' WHERE id_vuelo='$A2'");
				
	
				
				
				
				if (mysqli_query($conexion, $query4)) {
	echo '<script>alert("Viaje registrado exitosamente")</script> ';
	echo "<script>location.href='use2.php'</script>";
	}
	
	if (mysqli_query($conexion, $query5)) {
	echo '<script>alert("Viaje registrado exitosamente")</script> ';
	echo "<script>location.href='use2.php'</script>";
	}
	
	}}}

else
{
	echo '<script>alert("No coneccion")</script>';
	echo "<script>location.href='viajes.php'</script>";
	echo "Error: " . mysqli_error($conexion);
}
?>